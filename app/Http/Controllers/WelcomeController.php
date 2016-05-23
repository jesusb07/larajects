<?php

namespace critipelis\Http\Controllers;

use Illuminate\Http\Request;

use critipelis\Http\Requests;
use critipelis\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class WelcomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::user()){
            $user = Auth::user();
            return view('index',compact('user'));
        }
        else{
            return view('index');
        }
    }

}
