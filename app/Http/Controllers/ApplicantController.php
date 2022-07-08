<?php

namespace App\Http\Controllers;

use App\Models\Applicant;
use App\Models\User;
use App\Models\Country;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class ApplicantController extends Controller
{
       /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Fetch all invenstion disclosures
        $applicant = Applicant::all();

        //  Get manager users
        $attorneys = User::all();

        //  Get trainer users
        $paralegals = User::all();
        
        return \view('portal.contacts.index', compact('applicant', 'attorneys', 'paralegals'));
    }

    public function store(Request $request)
    {
        $appli = DB::transaction(function() use($request) {
            $applicant = Applicant::create((array) $request->all());
        });

        // return back()->with([
        //     'success' => 'Added successfully'
        // ]);
        Alert::success('Congrats', 'You\'ve Successfully Registered');
        return back()->with($appli);
    }

    public function edit($id)
    {
        // Fetch all invenstion disclosures
        $applicant = Applicant::find($id);

        //fetch all country list
        $countries = Country::all();

        //  Get manager users
        $attorneys = User::all();

        //  Get trainer users
        $paralegals = User::all();
        return \view('portal.contacts.applicant_edit', compact('countries','applicant', 'attorneys', 'paralegals'));
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Usersmgt  $usersmgt
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Applicant $appt)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Usersmgt  $usersmgt
     * @return \Illuminate\Http\Response
     */
    public function destroy(Applicant $appt)
    {
        //
    }
}
