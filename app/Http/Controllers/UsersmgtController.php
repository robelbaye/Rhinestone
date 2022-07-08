<?php

namespace App\Http\Controllers;

use App\Models\Usersmgt;
use App\Models\User;
use Illuminate\Http\Request;

class UsersmgtController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();

        return \view('portal.usersmgt.usersmgt', compact('users'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Usersmgt  $usersmgt
     * @return \Illuminate\Http\Response
     */
    public function show(Usersmgt $usersmgt)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Usersmgt  $usersmgt
     * @return \Illuminate\Http\Response
     */
    public function edit(Usersmgt $usersmgt)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Usersmgt  $usersmgt
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Usersmgt $usersmgt)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Usersmgt  $usersmgt
     * @return \Illuminate\Http\Response
     */
    public function destroy(Usersmgt $usersmgt)
    {
        //
    }
}
