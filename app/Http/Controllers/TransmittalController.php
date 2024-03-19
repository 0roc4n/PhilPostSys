<?php

namespace App\Http\Controllers;

use App\Models\ReturnCards;
use App\Models\Transmittals;
use App\Models\AddresseeList;
use Illuminate\Http\Request;
use Illuminate\View\View;
use PhpParser\Node\Stmt\Return_;
use PHPUnit\Framework\MockObject\Stub\ReturnArgument;

class TransmittalController extends Controller
{
    public function index(Request $request): View
    {   
        $count = Transmittals::count();
        $query = Transmittals::query()->get();
        $rrt_n = [];
        $addressees = [];
    
        foreach ($query as $record) {
            // Retrieve ReturnCards related to the current Transmittal's mailTrackNum
            $returnCards = ReturnCards::where('trucknumber', $record->mailTrackNum)->get();
            
            // Retrieve AddresseeList related to the current Transmittal's recieverName
            $addressee = AddresseeList::find($record->recieverName);
    
            // Add the ReturnCards to the array
            $rrt_n[$record->id] = $returnCards;
    
            // Add the AddresseeList to the array
            $addressees[$record->id] = $addressee;
        }
    
        return view('tracer', compact('query', 'rrt_n', 'addressees', 'count'));
    }
    

    public function store(Request $request) {
        // Define validation rules
        $rules = [
            'mail_tn' => 'required|unique:transmittals,mailTrackNum',
            'rrr_tns.*' => 'required|unique:return_cards,returncard',
            // Add more rules as needed
        ];
    
        // Validate the incoming request
        $validatedData = $request->validate($rules);
    
        // Create a new Transmittals record
        $transmittal = Transmittals::create([
            'mailTrackNum' => strtoupper($request->input('mail_tn')),
            'recieverName' => $request->input('receiver'),
            'recieverAddress' => $request->input('address'),
            'date' => $request->input('date_posted')
        ]);
    
        // Get the array of return cards from the request
        $rrr_tns_json = $request->input('rrr_tns');
    
        // Decode the JSON string into an array
        $rrr_tns = json_decode($rrr_tns_json);
    
        // Check if $rrr_tns is not null and is an array
        if (is_array($rrr_tns)) {
            // Create a new ReturnCards record for each return card
            foreach ($rrr_tns as $returnCard) {
                ReturnCards::create([
                    'trucknumber' => $request->input('mail_tn'),
                    'returncard' => strtoupper($returnCard)
                ]);
            }
        } else {
            $rrr_tns = [];
        }
    
        // Redirect or respond as needed
        return redirect('/tracer')->with('flash_mssg', 'Successfully Created!');
    }
    

    // fetch to the bladev views
    public function show($mailTrackNum){
        $record = Transmittals::find($mailTrackNum);
        $rrr_tn = ReturnCards::where('trucknumber', $record->mailTrackNum)->get();
        $count = $rrr_tn->count();
        $addressee = AddresseeList::find($record->recieverName);
        if (!$record) { 
            abort(404);
        }
        
        return view('transmittals', compact('mailTrackNum'))->with(['records' => $record, 'rrt_n' =>$rrr_tn, 'addressee' => $addressee, 'count' => $count]);
        
    }

    public function checkMailTN(Request $request)
    {
        $mail_tn = $request->input('mail_tn');

        $existingTransmittal = Transmittals::where('mailTrackNum', $mail_tn)->exists();

        return response()->json(['exists' => $existingTransmittal]);
    }

    

    public function edit($id){  
        $records = Transmittals::find($id);
        if (!$records) {
            return redirect()->route('/transmittals')->with('flash_message', 'Transmittal not found');
        }
    
        $addressee = AddresseeList::find($records->recieverName);
        $rrr_tn = ReturnCards::where('trucknumber', $records->mailTrackNum)->get();
    
        return view('edit-transmitttals', compact('records', 'addressee', 'rrr_tn'));
    }
    
    
    public function update(Request $request, $id)
    {
        try {
            $record = Transmittals::find($id);   
            if (!$record) {
                return redirect()->back()->with('error', 'Transmittal not found');
            }

            $request->validate([
                'mail_tn' => 'required|unique:transmittals,mailTrackNum,'.$id,
                // Add validation rules for other fields if needed
            ]);

            // Retrieve other fields from the request
            $mailTrackNum = $request->input('mail_tn');
            $date = $request->input('date_posted');
            $address = $request->input('receiver');

            // Retrieve the current truck number
            $currentMailTrackNum = $record->mailTrackNum;

            // Update the record with the new data
            $record->update([
                'mailTrackNum' => $mailTrackNum,
                'date' => $date,
                'recieverName' => $address,
            ]);
            

            // Update associated return cards' truck numbers
            ReturnCards::where('trucknumber', $currentMailTrackNum)->update(['trucknumber' => $mailTrackNum]);

            return redirect('/tracer')->with('success', 'Record Updated Successfully!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Error updating transmittal: ' . $e->getMessage());
        }
    }

    public function destroy($id)
    {
        // Find the Transmittal by ID
        $transmittal = Transmittals::find($id);

        if ($transmittal) {
            // Check if there are associated return cards with the truck number
            $returnCards = ReturnCards::where('trucknumber', $transmittal->mailTrackNum)->exists();

            if ($returnCards) {
                // Delete associated return cards
                ReturnCards::where('trucknumber', $transmittal->mailTrackNum)->delete();
            }

            // Then delete the transmittal itself
            $transmittal->delete();

            return redirect('tracer')->with('flash_mssg', 'Record Deleted Successfully!');
        } else {
            return redirect('tracer')->with('error_mssg', 'Transmittal Record Not Found!');
        }
    }
    
    public function deleteReturnCard($id){
        ReturnCards::destroy($id);
        return redirect()->back()->with('success', 'Record Deleted Successfully!');
    }
}
