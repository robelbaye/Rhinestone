<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        $applicant = ApplicantController::all();

        //  Get manager users
        $attorneys = User::all();

        //  Get trainer users
        $paralegals = User::all();
        
        return \view('portal.contacts.index', compact('applicant', 'attorneys', 'paralegals'));
    }
    public function store(Request $request)
    {
        DB::transaction(function() use($request) {
            $applicant = ApplicantController::create((array) $request->all());
        });

        return back()->with([
            'success' => 'Added successfully'
        ]);
    }
}
