<?php

namespace App\Http\Controllers;

use App\Models\Licensee;
use App\Models\User;
use App\Models\Country;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class LicenseeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        // Fetch all Licensor
        $licensee = Licensee::all();

        //  Get manager users
        $attorneys = User::all();

        //  Get trainer users
        $paralegals = User::all();
        
        return \view('portal.contacts.index', compact('licensee', 'attorneys', 'paralegals'));
    }
    public function store(Request $request)
    {
        $licens = DB::transaction(function() use($request) {
            $licensee = Licensee::create((array) $request->all());
        });

        Alert::success('Congrats', 'You\'ve Successfully Registered');
        return back()->with($licens);
    }

    public function edit($id)
    {
        // Fetch all Licensor
        $licensee = Licensee::find($id);

        //  Get manager users
        $attorneys = User::all();

        //  Get trainer users
        $paralegals = User::all();

        //fetch all country list
        $countries = Country::all();

        return \view('portal.contacts.licensee_edit', compact('licensee','countries','attorneys','paralegals'));
    }

    public function update(Request $request, $id)
    {
        $licensee = Licensee::find($id);
        $input = $request->all();
        $licensee->update($input);

        Alert::success('Congrats', 'You\'ve Successfully Updated');
        return redirect('contacts');
    }

    public function destroy($id)
    {
        $licensee = Licensee::destroy($id);

        Alert::success('Congrats', 'You\'ve Successfully Deleted');
        return back()->with($licensee);
    }
}
