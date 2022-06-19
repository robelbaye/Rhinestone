<?php

namespace App\Http\Controllers;

use App\Models\Agent;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class AgentController extends Controller
{
    public function index()
    {
        // Fetch all Licensor
        $agent = Agent::all();

        //  Get manager users
        $attorneys = User::all();

        //  Get trainer users
        $paralegals = User::all();
        
        return \view('portal.contacts.index', compact('agent', 'attorneys', 'paralegals'));
    }
    public function store(Request $request)
    {
        DB::transaction(function() use($request) {
            $agent = Agent::create((array) $request->all());
        });

        Alert::success('Congrats', 'You\'ve Successfully Registered');
        return back()->with($appli);
    }
}
