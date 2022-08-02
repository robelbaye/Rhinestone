<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use App\Models\General;
use App\Models\User;
use App\Models\Cost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class SettingController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

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
        return \view('portal.settings.index', compact('users'));
   }

   /**
    * Display the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    * @author Robel Baye <robelbaye6@gmail.com>
    */
   public function show(Setting $setting)
   {

   }

   /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    * @author Robel Baye <robelbaye6@gmail.com>
    */

   public function store(SettingRequest $request)
   {

   }

   /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  int  $id
    * @return \Illuminate\Http\Response
    * @author Robel Baye <robelbaye6@gmail.com>
    */
   public function update(SettingRequest $request, Setting $setting)
   {

   }
}
