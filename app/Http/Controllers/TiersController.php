<?php
namespace App\Http\Controllers;

use App\Models\Tier;
use App\Models\Country;
use Illuminate\Http\Request;

class TiersController extends Controller
{
    public function index()
    {
        $tiers = Tier::all();
        return view('Earn money.index', compact('tiers'));  
    }



}
