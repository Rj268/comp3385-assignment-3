<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Client;

class DashboardController extends Controller
{
    public function index()
    {
        $clients = Client::all();
        //dd($clients);
        return view('dashboard',compact('clients'));
    }
}
