<?php

namespace App\Http\Controllers;

use App\SubMenu;
use App\Module;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard.index');
    }


}