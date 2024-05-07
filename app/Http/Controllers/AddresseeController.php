<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AddresseeList;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class AddresseeController extends Controller
{
    public function showIndex()
    {
        if(Auth::user()->role == "root"){
            return view('new-addressee');
        }
        return redirect('/dashboard');
        
        
    }

    public function showUpdateAddressee($addressee_id)
    {
        $record = AddresseeList::find($addressee_id);   
        if (!$record) {
            return redirect()->back()->with('error', 'Addressee not found');
        }
        return view('update-addressee', compact('record'));
    }

    public function storeAddressee(Request $request)
    {
        try {
            $request->validate([
                'nameAbbrev' => 'required',
                'namePrimary' => 'required',
                'city' => 'required',
                'zip' => 'required',
                'province' => 'required',
            ]);

            AddresseeList::create([
                'abbrev' => strtoupper($request->input('nameAbbrev')),
                'name_primary' => strtoupper($request->input('namePrimary')),
                'name_secondary' => strtoupper($request->input('nameSecondary')),
                'address' => ucwords($request->input('address')),
                'city' => ucwords($request->input('city')),
                'zip' => $request->input('zip'),
                'province' => ucwords($request->input('province'))
            ]);
            
            //return redirect()->back()->with('flash_mssg', 'Addressee Added Successfully');
            return redirect('/add_transmittal')->with('flash_mssg', 'Addressee Added Successfully');
        } catch (ValidationException $e) {
            // If validation fails, redirect back with errors and input data
            return redirect()->back()->withErrors($e->errors())->withInput();
        }
    }

    public function getAddressees()
    {
        $addressees = AddresseeList::select('*')->get();
        return response()->json(['addressees' => $addressees], 200);
    }

    public function checkAddressee(Request $request)
    {
        $addressee = $request->input('nameAbbrev');

        $existingAddressee = AddresseeList::where('abbrev', $addressee)->exists();

        return response()->json(['exists' => $existingAddressee]);
    }

    public function updateAddressee(Request $request, $addressee_id)
    {
        try {
            $addressee = AddresseeList::find($addressee_id);
            if (!$addressee) {
                // Handle the case where the addressee is not found (you may want to show an error message or redirect)
                return redirect()->back()->with('error', 'Addressee not found');
            }

            $request->validate([
                'nameAbbrev' => 'required',
                'namePrimary' => 'required',
                'city' => 'required',
                'zip' => 'required',
                'province' => 'required',
            ]);

            // Update the addressee's information
            $addressee->update([
                'abbrev' => strtoupper($request->input('nameAbbrev')),
                'name_primary' => strtoupper($request->input('namePrimary')),
                'name_secondary' => strtoupper($request->input('nameSecondary')),
                'address' => ucwords($request->input('address')),
                'city' => ucwords($request->input('city')),
                'zip' => $request->input('zip'),
                'province' => ucwords($request->input('province'))
            ]);

            return redirect('/show-addressee')->with('flash_mssg', 'Addressee Updated Successfully');
        } catch (ValidationException $e) {
            // If validation fails, redirect back with errors and input data
            return redirect()->back()->withErrors($e->errors())->withInput();
        }
    }

    public function showAddresseeList(){
        $count = AddresseeList::count();
        $addresseeAll = AddresseeList::select('*')->get();

        return view('addressee-list')->with(['addresseeAll'=>$addresseeAll, 'count'=>$count]);
    }
    
    public function destroy($id)
    {
        AddresseeList::destroy($id);
        return redirect('show-addressee')->with('flash_mssg', 'Record Deleted Successfully!');  
    }
}

