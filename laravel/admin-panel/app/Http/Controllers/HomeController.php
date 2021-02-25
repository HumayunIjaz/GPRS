<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\massage;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }
     public function welcome()
    {
        return view('welcome');
    }

   
    public function massage()
    {
        $massage = massage::latest('id')->get();
        return view('massage',compact('massage'));
    }

    public function pass()
    {
        return view('change-password');
    }



}
