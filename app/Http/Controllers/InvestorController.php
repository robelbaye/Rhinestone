<?php

namespace App\Http\Controllers;

use App\Models\Investor;
use App\Models\Applicant;
use App\Models\Licensor;
use App\Models\Licensee;
use App\Models\Agent;
use App\Models\User;
use App\Models\Country;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class InvestorController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        // Fetch all invenstion disclosures
        $investor = Investor::all();

        //  Get manager users
        $attorneys = User::all();

        //  Get trainer users
        $paralegals = User::all();

        //fetch all country list
        $countries = Country::all();
        
        return \view('portal.contacts.index', compact('investor', 'countries', 'attorneys', 'paralegals'));
    }
    public function store(Request $request)
    {
        $investo = DB::transaction(function() use($request) {
            $investor = Investor::create((array) $request->all());
        });

        Alert::success('Congrats', 'You\'ve Successfully Registered');
        return back()->with($investo);
    }

    public function edit($id)
    {
        // Fetch all invenstion 
        $investor = Investor::find($id);

        //  Get manager users
        $attorneys = User::all();

        //  Get trainer users
        $paralegals = User::all();

        //fetch all country list
        $countries = Country::all();

        return \view('portal.contacts.invention_edit', compact('investor','countries','attorneys','paralegals'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Country  $country
     * @return \Illuminate\Http\Response
     */
    public function show(Investor $investor)
    {
        // Fetch all invenstion 
        $investor = Investor::all();

        // Fetch all invenstion 
        $applicant = Applicant::all();

        // Fetch all invenstion 
        $licensor = Licensor::all();

        // Fetch all invenstion 
        $licensee = Licensee::all();

        // Fetch all invenstion 
        $agent = Agent::all();

        // Fetch all invenstion 
        $investor = Investor::all();
        //  Get manager users
        $attorneys = User::all();

        //  Get trainer users
        $paralegals = User::all();

        //fetch all country list
        $countries = Country::all();
        return \view('portal.contacts.index', compact('investor','licensee','licensor','applicant','agent','countries','attorneys','paralegals'));
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $investor = Investor::find($id);
        $input = $request->all();
        $investor->update($input);

        Alert::success('Congrats', 'You\'ve Successfully Updated');
        return redirect('contacts');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $investor = Investor::destroy($id);

        Alert::success('Congrats', 'You\'ve Successfully Deleted');
        return back()->with($investor);
    }
}
