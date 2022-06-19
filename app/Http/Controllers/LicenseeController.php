<?php

namespace App\Http\Controllers;

use App\Models\Licensee;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class LicenseeController extends Controller
{
    public function index()
    {
        // Fetch all Licensor
        $licensee = Licensee::all();

        //  Get manager users
        $attorneys = User::all();

        //  Get trainer users
        $paralegals = User::all();
        
        return \view('portal.contacts.index', compact('licensee', 'attorneys', 'paralegals'));
    }
    public function store(Request $request)
    {
        $licens = DB::transaction(function() use($request) {
            $licensee = Licensee::create((array) $request->all());
        });

        Alert::success('Congrats', 'You\'ve Successfully Registered');
        return back()->with($licens);
    }
}
