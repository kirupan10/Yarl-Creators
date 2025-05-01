<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog; // Import the Blog model

class BlogController extends Controller
{
    public function blog_management_view(){
        if (!auth()->check()) {
            return redirect()->route('login');
        }

        // Or safely access the user
        $user = auth()->user();

        $blogs = Blog::latest()->get();
        return view('admin.blog_management', compact('blogs'));
    }

    public function user_blog_view(){

        return view('user.blogview');
    }

    public function user_page_view(){

        return view('user.blogpage');
    }

    public function store(Request $request)
{
    $request->validate([
        'main_title' => 'required|string',
        'date' => 'required|date',
        'category' => 'required|string',
        'image' => 'required|image',
        'excerpt' => 'required|string',
        'sub_heading' => 'nullable|string',
        'sub_details' => 'nullable|string',
        'full_details' => 'required|string',
        'additional_images.*' => 'nullable|image',
    ]);

    $imagePath = $request->file('image')->store('blogs', 'public');

    $additionalPaths = [];
    if ($request->hasFile('additional_images')) {
        foreach ($request->file('additional_images') as $img) {
            $additionalPaths[] = $img->store('blogs/additional', 'public');
        }
    }

    Blog::create([
        'main_title' => $request->main_title,
        'date' => $request->date,
        'category' => $request->category,
        'image' => $imagePath,
        'excerpt' => $request->excerpt,
        'sub_heading' => $request->sub_heading,
        'sub_details' => $request->sub_details,
        'full_details' => $request->full_details,
        'additional_images' => $additionalPaths,
    ]);

    return redirect()->back()->with('success', 'Blog created successfully!');
}


}
