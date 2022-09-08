<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PostFormRequest;
use App\Models\Post;
use App\Models\PostCategory;
use Carbon\Carbon;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::latest()->get();
        return view('backend.post.index', compact('posts'));
    }
    public function create()
    {
        $postCategories = PostCategory::get();
        return view('backend.post.create', compact('postCategories'));
    }
    public function store(PostFormRequest $request)
    {
        $validated_data = $request->validated();
        // return $validated_data;
        if (!$validated_data) {
            return back()->with('error', 'something went wrong');
        }
        $validated_data['post_date'] = Carbon::now()->format('y-m-d');
        $validated_data['post_time'] = Carbon::now()->format('H:i:s');
        $validated_data['slug'] = $request->heading;
        $validated_data['feature_image'] = $this->uploadImage();
        Post::create($validated_data);
        return redirect()->route('admin.post.index')->with('success', 'Post added successfully');
    }
    public function show($id)
    {
        $post = Post::findOrFail($id);
        return view('backend.post.show', compact('post'));
    }
    public function edit($id)
    {
        $postCategories = PostCategory::get();
        $post = Post::find($id);
        return view('backend.post.edit', compact('post', 'postCategories'));
    }
    public function update(PostFormRequest $request, $id)
    {
        $post = Post::find($id);
        $validated_data = $request->validated();
        // dd($request->file('feature_image'));
        // return $validated_data;
        if (!$validated_data) {
            return back()->with('error', 'something went wrong');
        }
        if ($post) {
            if ($request->hasFile('feature_image')) {
                $imagePath = public_path($post->feature_image);
                if (File::exists($imagePath)) {
                    File::delete($imagePath);
                    // unlink($imagePath);
                }
                $validated_data['feature_image'] =  $this->uploadImage();
            } else {
                $validated_data['feature_image'] = $post->feature_image?? $this->uploadImage();
            }
        }
        $validated_data['post_date'] = Carbon::now()->format('y-m-d');
        $validated_data['post_time'] = Carbon::now()->format('H:i:s');
        $validated_data['slug'] = $request->heading;
        // $validated_data['feature_image'] =  $this->uploadImage();
        $post->update($validated_data);
        return redirect()->route('admin.post.index')->with('success', 'Post updated successfully');
    }
    public function destroy($id)
    {
        Post::find($id)->delete();
        return back()->with('success', 'Post deleted successfully');
    }

    public function uploadImage()
    {
        if (Request::file('feature_image')) {
            $file = Request::file('feature_image');
            $fileName = $file->getClientOriginalName();
            $extension = $file->getClientOriginalExtension() ?: 'png';
            $folderName      = 'uploads/post/featureimage/';
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
