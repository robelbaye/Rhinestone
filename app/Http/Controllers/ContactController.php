<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Country;
use App\Models\Licensor;
use App\Models\Applicant;
use App\Models\Investor;
use App\Models\Agent;
use App\Models\Licensee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContactController extends Controller
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
        $countries = Country::all();
        $applicant = Applicant::all();
        $investor = Investor::all();
        $licensor = Licensor::all();
        $licensee = Licensee::all();
        $agent = Agent::all();

        return \view('portal.contacts.index', compact(['countries','applicant','investor','licensor','agent','licensee']));
    }

    public function fetch(Request $request)
    {
        // if($request->get('country'))
        // {
        //     $query = $request->get('country');
        //     $data = DB::table('countries')->where('name','LIKE','%{$query}%')->get();
        //     $output = '<ul class="dropdown-menu" style="display:block; position:relative;">';
        //     foreach($data as $row)
        //     {
        //         $output .= '<li><a href="#">.$row->name.</a></li>';
        //     }
        //     $output .='</ul>';
        //     echo $output;
        // }

        $data = $request->all();

        $query = $data['query'];

        $filter_data = Country::select('name')
                                ->where('name', 'LIKE', '%'.$query.'%')
                                ->get();
        return response()->json($filter_data);
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
        DB::transaction(function() use($request) {
            $applicant = Applicant::create((array) $request->all());
        });

        return back()->with([
            'success' => 'Added successfully'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $countries = Country::all();
        $applicant = Applicant::all();
        $investor = Investor::all();
        $licensor = Licensor::all();
        $licensee = Licensee::all();
        $agent = Agent::all();
        return \view(
        'portal.contacts.show', compact(['countries', 'applicant', 'investor', 'licensor', 'agent', 'licensee']));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function merged()
    {
        $countries = Country::all();
        $applicant = Applicant::all();
        $investor = Investor::all();
        $licensor = Licensor::all();
        $licensee = Licensee::all();
        $agent = Agent::all();
        return \view(
            'portal.contacts.merged',
            compact(['countries', 'applicant', 'investor', 'licensor', 'agent', 'licensee'])
        );
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function edit(Contact $contact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contact $contact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contact $contact)
    {
        //
    }
}
