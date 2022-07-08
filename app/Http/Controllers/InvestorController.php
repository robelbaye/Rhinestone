<?php

namespace App\Http\Controllers;

use App\Models\Investor;
use App\Models\User;
use App\Models\Country;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class InvestorController extends Controller
{
    public function index()
    {
        // Fetch all invenstion disclosures
        $investor = Investor::all();

        //  Get manager users
        $attorneys = User::all();

        //  Get trainer users
        $paralegals = User::all();
        
        return \view('portal.contacts.index', compact('investor', 'attorneys', 'paralegals'));
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
}
