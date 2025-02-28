<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\View_Aeropuerto;
use App\Models\View_Cliente;
use App\Models\View_Regional;

class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $users = User::all();
        return view('home', compact('users'));
    }
}
