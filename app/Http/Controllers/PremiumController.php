<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PremiumController extends Controller
{
    public function extend()
    {
        return view('premium.extend');
    }
}
