<?php

namespace App\Http\Controllers;

use App\Models\AddressBook;
use App\Models\User;
use App\Models\Country;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class AddressBookController extends Controller
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
        // Fetch all AddressBook 
        $addressBook = AddressBook::all();

        // Get users
        $users = User::all();

        return \view('portal.contacts.merged', compact('addressBook', 'users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $addressBook = DB::transaction(function() use($request) {
            $agent = AddressBook::create((array) $request->all());
        });

        Alert::success('Congrats', 'You\'ve Successfully Registered');
        return back()->with($addressBook);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AddressBook  $addressBook
     * @return \Illuminate\Http\Response
     */
    public function show(AddressBook $addressBook)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AddressBook  $addressBook
     * @return \Illuminate\Http\Response
     */
    public function edit(AddressBook $addressBook)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AddressBook  $addressBook
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $addressBook = AddressBook::find($id);
        $input = $request->all();
        $addressBook->update($input);

        Alert::success('Congrats', 'You\'ve Successfully Updated');
        return redirect('contacts');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AddressBook  $addressBook
     * @return \Illuminate\Http\Response
     */
    public function destroy(AddressBook $addressBook)
    {
        //
    }
}
