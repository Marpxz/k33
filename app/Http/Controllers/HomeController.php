<?php

/*
 * Taken from
 * https://github.com/laravel/framework/blob/5.3/src/Illuminate/Auth/Console/stubs/make/controllers/HomeController.stub
 */

namespace Kat33\Http\Controllers;

use Kat33\Http\Requests;
use Illuminate\Http\Request;
use Kat33\User;

/**
 * Class HomeController
 * @package Kat33\Http\Controllers
 */
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
     * @return Response
     */
    public function index()
    {
        $users = User::all();

        return view('adminlte::home',compact('users'));
    }
}