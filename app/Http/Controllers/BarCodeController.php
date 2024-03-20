<?php

namespace App\Http\Controllers;
use App\Models\Barcode;
use App\Models\ReturnCards;
use Illuminate\Http\Request;

class BarCodeController extends Controller
{
    public function index(){
        return view('tracer');
    }

    public function formTest(){
        return view('barcode.store');
    }

    public function store(Request $request){

        $request->validate([
            'barcode' => 'required|unique:barcodes,barcode' // Ensure barcode is required and unique in the 'barcodes' table
        ]);

        Barcode::create([
            'barcode'=> $request->input('barcode')
        ]);
        return redirect('/tracer')->with('flash_mssg', 'Successfully Created!');
    }

    public function addReturnCard(Request $request){
    
        try {
             // Get the array of return cards from the request
        $rrr_tns_json = $request->input('rrr_tns');
    
        // Decode the JSON string into an array
        $rrr_tns = json_decode($rrr_tns_json);
    
        // Check if $rrr_tns is not null and is an array
        if (is_array($rrr_tns)) {
            // Create a new ReturnCards record for each return card
            foreach ($rrr_tns as $returnCard) {
                ReturnCards::create([
                    'trucknumber' => $request->input('truckNumMail'),
                    'returncard' => strtoupper($returnCard)
                ]);
            }
        } else {
            $rrr_tns = [];
        }
    
            return redirect()->back()->with('success', 'Return card added successfully!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Error adding return card: ' . $e->getMessage());
        }
    }

    public function show(){
        $returncards = ReturnCards::all();
    
        return view('return_cards.index', compact('returncards'));
    }

    public function update(){

    }

    public function destroy($id)
    {
        $returnCard = ReturnCards::findOrFail($id);
        $returnCard->delete();

        return redirect()->back()->with('success', 'Return card deleted successfully.');
    }
}
