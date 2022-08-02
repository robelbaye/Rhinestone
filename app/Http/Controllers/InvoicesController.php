<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class InvoicesController extends Controller
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
        // $patents = Patent::all();
        //  Get manager users
        $users = User::all();

        //  Get trainer users
        $paralegals = User::all();

        // Get Country
        $countries = Country::all();
        
        return \view('portal.invoices.index', compact('countries','users', 'paralegals'));
    }
}
