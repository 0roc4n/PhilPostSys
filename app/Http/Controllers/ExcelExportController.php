<?php

namespace App\Http\Controllers;

use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;
use PhpOffice\PhpSpreadsheet\Cell\DataType; 

class ExcelExportController extends Controller
{
   
    public function exportToExcel(Request $request)
    {
        $exportData = json_decode($request->input('exportData'), true);
        
        // Load the existing spreadsheet (assuming format.xlsx is your template)
        $spreadsheet = IOFactory::load(public_path('assets/format.xlsx'));

        // Get the active sheet
        $sheet = $spreadsheet->getActiveSheet();

        $formattedDate = Carbon::parse($exportData['records']['date'])->format('F j, Y');

        function capitalizeFirstLetter($str) {
            return ucwords(strtolower($str));
        }

        $data = [
            'D5' => $exportData['records']['mailTrackNum'] ?? '',
            'A5' => $formattedDate,
            'A7' => strtoupper($exportData['records']['addresseePN'] ?? ''),
            'A8' => strtoupper($exportData['records']['addresseeSN'] ?? ''),
            'A9' => (isset($exportData['records']['address']) && $exportData['records']['address'] ? capitalizeFirstLetter($exportData['records']['address']) . ', ' : '') . (isset($exportData['records']['city']) ? capitalizeFirstLetter($exportData['records']['city']) : ''),
            'A10' => capitalizeFirstLetter($exportData['records']['zip']) . ' ' . capitalizeFirstLetter($exportData['records']['province']) ?? '',
        ];

        if (empty($exportData['records']['addresseeSN'])) {
            $data['A8'] = (isset($exportData['records']['address']) && $exportData['records']['address'] ? capitalizeFirstLetter($exportData['records']['address']) . ', ' : '') . (isset($exportData['records']['city']) ? capitalizeFirstLetter($exportData['records']['city']) : '');
            $data['A9'] = capitalizeFirstLetter($exportData['records']['zip']) . ' ' . capitalizeFirstLetter($exportData['records']['province']) ?? '';
            $data['A10'] = '';
            $boldCells = ['D5', 'A7'];
        } else {
            $boldCells = ['D5', 'A7', 'A8'];
        }

        // Set font attributes to make it bold for specific cells

        foreach ($data as $cell => $value) {
            // Decode HTML entities before setting cell value
            $decodedValue = html_entity_decode($value, ENT_QUOTES | ENT_HTML5);
            
            // Set cell value explicitly as string
            $sheet->setCellValueExplicit($cell, $decodedValue, DataType::TYPE_STRING);
            
            // Set font attributes to make it bold if the cell is in $boldCells array
            if (in_array($cell, $boldCells)) {
                $sheet->getStyle($cell)->getFont()->setBold(true);
            }
        }

        $rrtnLength = count($exportData['rrtn']);
        $startRow = 16;
        $startCol2 = 'A';
        $startCol = 'A';
        $lastRow= 0;
        $tnCount = 1;
        $rowCount = 0;
        $rowCount2 = 0;

        if ($rrtnLength > 100 && $rrtnLength > 120) {
            foreach ($exportData['rrtn'] as $index => $rrtn) {
                if ($tnCount <= 120) 
                {
                    $rowCount++;
                    $row = $startRow + $rowCount;
                    $col = $startCol;
    
                    if ($row > 45) {
                        $row = $startRow + $rowCount;
                        $rowCount = 0;
                        $startCol = chr(ord($col) + 1);
                    }
                    $sheet->setCellValue($col . $row, $tnCount . '  .' . $rrtn);
                    $tnCount++;
                    $lastRow = $row;
                } 
                else 
                {
                    $startRow = 48;
                    $rowCount2++;
                    $row = $startRow + $rowCount2;
                    $col = $startCol2;
    
                    if ($row > 88) {
                        $row = $startRow + $rowCount2;
                        $rowCount2 = 0;
                        $startCol2 = chr(ord($col) + 1);
                    }
                    $sheet->setCellValue($col . $row, $tnCount . '  .' . $rrtn);
                    $tnCount++;
                    $lastRow = $row;
                }
            }
            if ($tnCount > 160) {
                $lastRow = 88;
            }
        } else if ($rrtnLength > 100 && $rrtnLength <= 120) {
            foreach ($exportData['rrtn'] as $index => $rrtn) {
                if ($tnCount <= 100) 
                {
                    $rowCount++;
                    $row = $startRow + $rowCount;
                    $col = $startCol;
    
                    if ($row > 40) {
                        $row = $startRow + $rowCount;
                        $rowCount = 0;
                        $startCol = chr(ord($col) + 1);
                    }
                    $sheet->setCellValue($col . $row, $tnCount . '  .' . $rrtn);
                    $tnCount++;
                    $lastRow = $row;
                } 
                else 
                {
                    $startRow = 48;
                    $rowCount2++;
                    $row = $startRow + $rowCount2;
                    $col = $startCol2;
    
                    if ($row > 87) {
                        $row = $startRow + $rowCount2;
                        $rowCount2 = 0;
                        $startCol2 = chr(ord($col) + 1);
                    }
                    $sheet->setCellValue($col . $row, $tnCount . '  .' . $rrtn);
                    $tnCount++;
                    $lastRow = $row;
                }
            }
        } else if ($rrtnLength <= 100) {
            foreach ($exportData['rrtn'] as $index => $rrtn) {
                $rowCount++;
                $row = $startRow + $rowCount;
                $col = $startCol;

                if ($row > 40) {
                    $row = $startRow + $rowCount;
                    $rowCount = 0;
                    $startCol = chr(ord($col) + 1);
                }

                $sheet->setCellValue($col . $row, $tnCount . '  .' . $rrtn);
                $tnCount++;
                $lastRow = $row;
            }
            if ($tnCount > 25) {
                $lastRow = 41;
            }
        }
        $sheet->setCellValue('A' . ($lastRow + 2), "Very truly yours,");
        $sheet->setCellValue('A' . $lastRow + 5, "NENITA B. PAN");
        $sheet->setCellValue('A' . $lastRow + 6, "Postmaster");

        $directoryPath = public_path('tracer_exports');

        // Create the directory if it doesn't exist
        if (!file_exists($directoryPath) && !is_dir($directoryPath)) {
            mkdir($directoryPath, 0777, true);
        }

        // Save the updated spreadsheet to the new directory
        date_default_timezone_set('Asia/Tokyo');
        $filename = '/tracer_' . date('Y_m_d_G-i-s') . '.xlsx';
        $writer = new Xlsx($spreadsheet);
        $writer->save($directoryPath . $filename);

        return response()->json(['success' => true, 'path' => $filename]);
    }

    public function downloadExcel($filename)
    {
        $filePath = public_path('tracer_exports/' . $filename);

        return response()->download($filePath);
    }
    
}

