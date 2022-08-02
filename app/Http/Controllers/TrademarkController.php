<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\Trademark;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class TrademarkController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Fetch all invenstion disclosures

        //  Get manager users
        $users = User::all();

        //  Get trainer users
        $paralegals = User::all();

        // Get Country
        $countries = Country::all();

        $trademarks = Trademark::all();
        
        return \view('portal.country.trademark', compact('countries','users', 'paralegals','trademarks'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $trademark = DB::transaction(function() use($request) {
            $design = Trademark::create((array) $request->all());
        });

        Alert::success('Congrats', 'You\'ve Successfully Registered Trademark');
        return back()->with($trademark);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\
     * @return \Illuminate\Http\Response
     */
    public function show($inventionDisclosure)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        // Fetch all invenstion disclosures
        $trademark = Design::find($id);

        //  Get manager users
        $users = User::all();

        //  Get trainer users
        $paralegals = User::all();

        // Get Country
        $countries = Country::all();
        return \view('portal.country.design_edit', compact('trademark','countries', 'users', 'paralegals'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $trademark = Trademark::destroy($id);

        Alert::success('Congrats', 'You\'ve Successfully Deleted');
        return back()->with($trademark);
    }
}
