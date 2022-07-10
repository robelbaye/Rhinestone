<?php

namespace App\Http\Controllers;

use App\Models\Licensor;
use App\Models\User;
use App\Models\Country;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class LicensorController extends Controller
{
    public function index()
    {
        // Fetch all Licensor
        $licensor = Licensor::all();

        //  Get manager users
        $attorneys = User::all();

        //  Get trainer users
        $paralegals = User::all();
        
        return \view('portal.contacts.index', compact('licensor', 'attorneys', 'paralegals'));
    }
    public function store(Request $request)
    {
        $licens = DB::transaction(function() use($request) {
            $licensor = Licensor::create((array) $request->all());
        });

        Alert::success('Congrats', 'You\'ve Successfully Registered');
        return back()->with($licens);
    }
        
    public function edit($id)
    {
        // Fetch all Licensor
        $licensor = Licensor::find($id);

        //  Get manager users
        $attorneys = User::all();

        //  Get trainer users
        $paralegals = User::all();
        
        //fetch all country list
        $countries = Country::all();

        return \view('portal.contacts.licensor_edit', compact('licensor','countries','attorneys','paralegals'));
    }

    public function update(Request $request, $id)
    {
        $licensor = Licensor::find($id);
        $input = $request->all();
        $licensor->update($input);

        Alert::success('Congrats', 'You\'ve Successfully Updated');
        return redirect('contacts');
    }

    public function destroy($id)
    {
        $licensor = Licensor::destroy($id);

        Alert::success('Congrats', 'You\'ve Successfully Deleted');
        return back()->with($licensor);
    }
}
