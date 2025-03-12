<?php

namespace App\Http\Controllers;

use App\Models\DeletedVideo;
use Illuminate\Http\Request;

class DmcaController extends Controller
{
    public function index()
    {

        $deletedVideos = DeletedVideo::where('user_id', auth()->id())->get();


        return view('Dmca.index', compact('deletedVideos'));
    }
}
