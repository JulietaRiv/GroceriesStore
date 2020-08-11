<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;


class WelcomeController extends Controller
{
    public function index()
    {
        return view('Site/index');
    }
    
}