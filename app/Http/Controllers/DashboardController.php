<?php

namespace App\Http\Controllers;

class DashboardController extends Controller
{
    public function index()
    {
        // Your logic to display dashboard page
        return view('layouts.private.dashboard');
    }
}
