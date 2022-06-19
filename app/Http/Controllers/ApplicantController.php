<?php

namespace App\Http\Controllers;

use App\Models\Applicant;
use App\Models\User;
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
}
