<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
     
    //Removing authorisation for home page below.
    
    /* 
    public function __construct()
    {
        $this->middleware('auth');
    }
    */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

    //This will show home page (Modification by Faryaz)
    public function index()
    {
        return view('welcome');
    }
}
