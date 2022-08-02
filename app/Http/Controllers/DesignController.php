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

    public function edit($id)
    {
        // Fetch all invenstion disclosures
        $designs = Design::find($id);

        //fetch all country list
        $countries = Country::all();

        //  Get manager users
        $users = User::all();

        //  Get trainer users
        $paralegals = User::all();
        return \view('portal.country.design_edit', compact('designs','countries', 'users', 'paralegals'));
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
        $designs = Design::find($id);
        $input = $request->all();
        $designs->update($input);

        Alert::success('Congrats', 'You\'ve Successfully Updated');
        return redirect('design');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Usersmgt  $usersmgt
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $designs = Design::destroy($id);

        Alert::success('Congrats', 'You\'ve Successfully Deleted');
        return back()->with($designs);
    }
}
