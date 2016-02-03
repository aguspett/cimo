<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

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

    public function mail()
    {
        Mail::send('home',	array('key'	=>	'value'),	function($message) {
            $message->to('foo@example.com',	'John	Smith')->subject('Welcome!');
        });
}
}
