<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class TrademarkController extends Controller
{
    //
    public function index()
    {
        // Fetch all invenstion disclosures

        //  Get manager users
        $users = User::all();

        //  Get trainer users
        $paralegals = User::all();

        // Get Country
        $countries = Country::all();
        
        return \view('portal.country.trademark', compact('countries','users', 'paralegals'));
    }

}
