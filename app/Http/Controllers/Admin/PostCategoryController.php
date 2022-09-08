<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PostCategory;
use Illuminate\Http\Request;

class PostCategoryController extends Controller
{
    public function index()
    {
        $postCategories = PostCategory::latest()->get();
        return view('backend.post-category.index', compact('postCategories'));
    }
    public function store(Request $request)
    {
        $validated_data = $request->validate([
            'name' => 'required|string'
        ]);
        if (!$validated_data) {
            return back()->wiith('error', 'Something went wrong');
        }
        PostCategory::create($validated_data);
        return back()->with('success', 'Post Category created successfully');
    }

    public function update(Request $request, $id)
    {
        $postCategory = PostCategory::find($id);
        $validated_data = $request->validate([
            'name' => 'required|string',
        ]);
        if (!$validated_data) {
            return back()->with('error', 'someting went wrong');
        }
        $postCategory->update($validated_data);
        return back()->with('success', 'Post category updated successfully');
    }

    public function destroy($id)
    {
        $postCategory = PostCategory::find($id);
        $postCategory->delete();
        return back()->with('success', 'Post Category Deleted Successfully');
    }
}
