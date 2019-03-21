<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TableController extends Controller
{
    public function simple()
    {
        return view('table.simple');
    }

    public function data()
    {
        return view('table.data');
    }
}
