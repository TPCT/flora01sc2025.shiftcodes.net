<?php

namespace App\Http\Controllers;

use App\Models\Video;
use App\Models\Folder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StoreVideoRequest;
use App\Http\Requests\UpdateVideoRequest;

class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $videos = Video::orderBy('id', 'desc')->get();
        return view('MyVedio.index', compact('videos')); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $folders = Folder::where('user_id', auth()->id())->get();
        return view('Upload.index', compact('folders'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:mp4,mkv,avi,webm,ts,mpg,mpeg,vob,flv,wmv,3gp,mov|max:51200',
        ]);

        if ($request->hasFile('file')) {
            $file = $request->file('file');


            $fileName = time() . '_' . $file->getClientOriginalName();
            $destinationPath = public_path('uploads/videos');


            if (!file_exists($destinationPath)) {
                mkdir($destinationPath, 0777, true);
            }


            $file->move($destinationPath, $fileName);


            Video::create([
                'name' => $file->getClientOriginalName(),
                'path' => 'uploads/videos/' . $fileName,
                'user_id' => auth()->id(),
                'title' => pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME),
                'video' => 'uploads/videos/' . $fileName,
                'video_url' => null,
            ]);

            return back()->with('success', 'Video uploaded successfully.');
        }

        return back()->with('error', 'Failed to upload video.');
    }






    public function storeFromUrl(Request $request)
    {
        if (!auth()->check()) {
            return redirect()->route('login')->with('error', 'You must be logged in to upload a video.');
        }


        $request->validate([
            'urls' => 'required|string',
        ]);


        $urls = explode("\n", trim($request->input('urls')));

        foreach ($urls as $url) {
            $url = trim($url);
            if (!filter_var($url, FILTER_VALIDATE_URL)) {
                continue;
            }

            $fileName = basename(parse_url($url, PHP_URL_PATH));


            Video::create([
                'name' => $fileName,
                'user_id' => auth()->id(),
                'title' => pathinfo($fileName, PATHINFO_FILENAME),
                'video_url' => $url,
                'video' => '',
            ]);
        }

        return back()->with('success', 'Videos uploaded successfully.');
    }






    /**
     * Display the specified resource.
     */
    public function show(Video $video)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Video $video)
{
    return view('MyVedio.edit', compact('video'));
}

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Video $video)
    {
        $request->validate([
            'title' => 'required|string|max:255',
        ]);

        $video->update([
            'title' => $request->title,
        ]);

        return back()->with('success', 'Video updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Video $video)
    {

        if ($video->video && file_exists(public_path($video->video))) {
            unlink(public_path($video->video));
        }


        $video->delete();

        return back()->with('success', 'Video deleted successfully.');
    }

}
