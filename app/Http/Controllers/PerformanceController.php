<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PerformanceController extends Controller
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
        //  Get manager users
        $users = User::all();

        //  Get trainer users
        $paralegals = User::all();

        // Get Country
        $countries = Country::all();
        
        return \view('portal.performance.index', compact('countries','users', 'paralegals'));
    }
}
