<?php

namespace App\Http\Controllers;

use App\Models\Video;
use App\Models\DeletedVideo;
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
     * Remove the specified resource from storage.
     */
    public function destroy(Video $video)
    {

        DeletedVideo::create([
            'user_id' => $video->user_id,
            'name' => $video->name ?? 'Unnamed Video',
            'path' => $video->path,
            'video_url' => $video->video_url,
            'title' => $video->title,
        ]);


        if ($video->path) {
            Storage::disk('public')->delete($video->path);
        }


        $video->delete();

        return redirect()->route('videos.index')->with('success', 'تم حذف الفيديو ونقله إلى الأرشيف!');
    }
}
