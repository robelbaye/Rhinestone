<?php

namespace App\Http\Controllers;

use App\Models\Agent;
use App\Models\User;
use App\Models\Country;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class AgentController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

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
        $agents = DB::transaction(function() use($request) {
            $agent = Agent::create((array) $request->all());
        });

        Alert::success('Congrats', 'You\'ve Successfully Registered');
        return back()->with($agents);
    }

    public function edit($id)
    {
        // Fetch all invenstion disclosures
        $agent = Agent::find($id);

       //fetch all country list
        $countries = Country::all();

        return \view('portal.contacts.agent_edit', compact('agent','countries'));
    }
    
    public function update(Request $request, $id)
    {
        $agent = Agent::find($id);
        $input = $request->all();
        $agent->update($input);

        Alert::success('Congrats', 'You\'ve Successfully Updated');
        return redirect('contacts');
    }

    public function destroy($id)
    {
        $agent = Agent::destroy($id);

        Alert::success('Congrats', 'You\'ve Successfully Deleted');
        return back()->with($agent);
    }
}
