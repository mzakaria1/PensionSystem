<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        //$users = \App\User::all();
        return view('dashboard');
    }

    public function employee_form()
    {
        return view('employee_form');
    }

    public function pensioner_form()
    {
        return view('pensioner_form');
    }
}
