<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Myprofile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class MyprofileController extends Controller
{
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    * @author Robel Baye <robelbaye6@gmail.com>
    */
   public function index()
   {
    //    $this->authorize('viewAny', Setting::class);

       /**
        * Get all the settings
        */
        // $general = General::all();
        // $cost = Cost::all();
        $users = User::all();

       /**
        * Return the results
        */
        return \view('portal.my-profile.my-profile', compact('users'));
   }
}
