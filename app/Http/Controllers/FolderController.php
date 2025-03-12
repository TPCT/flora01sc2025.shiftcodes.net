<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Folder;

class FolderController extends Controller
{
    public function index()
    {
        $folders = Folder::where('user_id', auth()->id())->get();
        return view('Upload.index', compact('folders'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        Folder::create([
            'name' => $request->name,
            'user_id' => auth()->id(),
        ]);

        return back()->with('success', 'Folder created successfully.');
    }

    public function destroy(Folder $folder)
    {
        if ($folder->user_id !== auth()->id()) {
            return back()->with('error', 'Unauthorized.');
        }

        $folder->delete();
        return back()->with('success', 'Folder deleted successfully.');
    }
}
