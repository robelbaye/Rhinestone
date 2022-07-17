<?php

namespace App\Http\Controllers;

use App\Models\InventionDisclosure;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class InventionDisclosureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Fetch all invenstion disclosures
        $inventionDisclosures = InventionDisclosure::all();

        $status = config('settings.invention_status');

        //  Get manager users
        $attorneys = User::all();

        //  Get trainer users
        $paralegals = User::all();
        
        return \view('portal.invention-disclosures.index', compact('inventionDisclosures', 'status', 'attorneys', 'paralegals'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $invention = DB::transaction(function() use($request) {
            $inventionDisclosure = InventionDisclosure::create((array) $request->all());
        });

        Alert::success('Congrats', 'You\'ve Successfully Registered');
        return back()->with($invention);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\InventionDisclosure  $inventionDisclosure
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        // Fetch all invenstion disclosures
        $inventionDisclosures = InventionDisclosure::all();
        $status = config('settings.invention_status');

        //  Get manager users
        $attorneys = User::all();

        //  Get trainer users
        $paralegals = User::all();

        return \view('portal.invention-disclosures.show', [
            'inventionDisclosure' => $inventionDisclosures,
            'status' => $status,
            'attorneys' => $attorneys,
            'paralegals' => $paralegals
        ]);
    }

    public function edit($id)
    {
        // Fetch all invenstion disclosures
        $inventionDisclosures = InventionDisclosure::find($id);

        //fetch all country list
        $status = config('settings.invention_status');

        //  Get manager users
        $attorneys = User::all();

        //  Get trainer users
        $paralegals = User::all();
        return \view('portal.invention-disclosures.invention_disc_edit', compact('inventionDisclosures','status', 'attorneys', 'paralegals'));
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
        $inventionDisclosures = InventionDisclosure::find($id);
        $input = $request->all();
        $inventionDisclosures->update($input);

        Alert::success('Congrats', 'You\'ve Successfully Updated');
        return redirect('invention-disclosures');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Usersmgt  $usersmgt
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $inventionDisclosures = InventionDisclosure::destroy($id);

        Alert::success('Congrats', 'You\'ve Successfully Deleted');
        return back()->with($inventionDisclosures);
    }
}
