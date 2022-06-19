<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\User;
use App\Models\Design;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class DesignController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Fetch all invenstion disclosures
        // $designitems = DesignController::all();
        $designs = Design::all();
        //  Get manager users
        $users = User::all();

        //  Get trainer users
        $paralegals = User::all();

        // Get Country List
        $countries = Country::all();
        
        return \view('portal.country.design', compact('designs','countries', 'users', 'paralegals'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $desgn = DB::transaction(function() use($request) {
            $design = Design::create((array) $request->all());
        });

        Alert::success('Congrats', 'You\'ve Successfully Registered');
        return back()->with($desgn);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\InventionDisclosure  $inventionDisclosure
     * @return \Illuminate\Http\Response
     */
    public function show($design)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\InventionDisclosure  $inventionDisclosure
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\InventionDisclosure  $inventionDisclosure
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\InventionDisclosure  $inventionDisclosure
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        //
    }
}
