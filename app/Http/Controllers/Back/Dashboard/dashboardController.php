<?php

namespace App\Http\Controllers\Back\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class dashboardController extends Controller
{
    public function index(){
        return view('back.dashboard.dashboard');
    }
}
