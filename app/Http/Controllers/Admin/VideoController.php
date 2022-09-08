<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\VideoFormRequest;
use App\Models\Video;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Request;

class VideoController extends Controller
{
    public function index()
    {
        $videos = DB::table('videos')->get();
        return view('backend.video.index', compact('videos'));
    }

    public function create()
    {
        return view('backend.video.create');
    }
    public function store(VideoFormRequest $request)
    {
        $validated_data = $request->validated();
        if (!$validated_data) {
            return back()->with('error', 'Some thing went wrong');
        }
        $validated_data['banner'] = $this->uploadVideoBanner();
        Video::create($validated_data);
        return redirect()->route('admin.video.index')->with('success', 'video url created successfully');
    }
    public function edit($id)
    {
        $video = Video::findOrFail($id);
        return view('backend.video.edit', compact('video'));
    }
    public function update(VideoFormRequest $request, $id)
    {
        $video = Video::findOrFail($id);
        $validated_data = $request->validated();
        if (!$validated_data) {
            return back()->with('error', 'something went wrong');
        }
        $validated_data['banner'] = $this->uploadVideoBanner();
        $video->update($validated_data);
        return redirect()->route('admin.video.index')->with('success', 'Video url updated successfuly');
    }

    public function destroy($id)
    {
        Video::findOrFail($id)->delete();
        return back()->with('success', 'Video url deleted successfully');
    }

    public function uploadVideoBanner()
    {
        if (Request::file('banner')) {
            $file = Request::file('banner');
            // $fileName = $file->getClientOriginalName();
            $extension = $file->getClientOriginalExtension() ?: 'png';
            $folderName      = 'uploads/video/banner/';
            $safeName        = uniqid() . '.' . $extension;
            $file->move($folderName, $safeName);

            $filePath = $folderName . $safeName;
            $filename = $filePath;

            return $filename;
        } else {
            return '';
        }
    }
}
