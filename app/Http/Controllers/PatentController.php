<?php

namespace App\Http\Controllers;

use App\Models\Patent;
use App\Models\Country;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class PatentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Fetch all invenstion disclosures
        $patents = Patent::all();
        //  Get manager users
        $users = User::all();

        //  Get trainer users
        $paralegals = User::all();

        // Get Country
        $countries = Country::all();
        
        return \view('portal.country.patent', compact('patents','countries','users', 'paralegals'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $paten = DB::transaction(function() use($request) {
            $patent = Patent::create((array) $request->all());
        });

        Alert::success('Congrats', 'You\'ve Successfully Registered');
        return back()->with($paten);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\
     * @return \Illuminate\Http\Response
     */
    public function show($patent)
    {
        //
    }

    public function edit($id)
    {
        // Fetch all invenstion disclosures
        $patents = Patent::find($id);

        //fetch all country list
        $countries = Country::all();

        //  Get manager users
        $users = User::all();

        //  Get trainer users
        $paralegals = User::all();
        return \view('portal.country.patent_edit', compact('patents','countries', 'users', 'paralegals'));
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Usersmgt  $usersmgt
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $patents = Patent::find($id);
        $input = $request->all();
        $patents->update($input);

        Alert::success('Congrats', 'You\'ve Successfully Updated');
        return redirect('patent');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Usersmgt  $usersmgt
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $patents = Patent::destroy($id);

        Alert::success('Congrats', 'You\'ve Successfully Deleted');
        return back()->with($patents);
    }
}
