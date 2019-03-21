<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExamplesController extends Controller
{
    public function invoice()
    {
        return view('examples.invoice');
    }

    public function profile()
    {
        return view('examples.profile');
    }

    public function login()
    {
        return view('examples.login');
    }

    public function register()
    {
        return view('examples.register');
    }

    public function reset()
    {
        return view('examples.reset');
    }

    public function lockscreen()
    {
        return view('examples.lockscreen');
    }

    public function error404()
    {
        return view('examples.404');
    }

    public function error500()
    {
        return view('examples.500');
    }

    public function blank()
    {
        return view('examples.blank');
    }

    public function pace()
    {
        return view('examples.pace');
    }

    public function invoicePrint()
    {
        return view('examples.invoice-print');
    }
}
