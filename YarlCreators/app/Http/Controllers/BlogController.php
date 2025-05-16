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

public function create_blog() {
    return view('admin.create_blog');

}

public function store(Request $request)
{
    try {
        $request->validate([
            'title' => 'required|string',
            'date' => 'required|date',
            'category' => 'required|string',
            'main_image' => 'required|image',
            'excerpt' => 'required|string',
            'sub_heading' => 'nullable|string',
            'sub_details' => 'nullable|string',
            'details' => 'required|string',
            'gallery_images.*' => 'image|nullable',
        ]);

        // Save Main Image
        $mainImagePath = $request->file('main_image')->store('blogs/main', 'public');

        // Save Gallery Images
        $galleryPaths = [];
        if ($request->hasFile('gallery_images')) {
            foreach ($request->file('gallery_images') as $image) {
                $galleryPaths[] = $image->store('blogs/gallery', 'public');
            }
        }

        // Save to DB
        Blog::create([
            'title' => $request->title,
            'date' => $request->date,
            'category' => $request->category,
            'main_image' => $mainImagePath,
            'excerpt' => $request->excerpt,
            'sub_heading' => $request->sub_heading,
            'sub_details' => $request->sub_details,
            'details' => $request->details,
            'gallery_images' => json_encode($galleryPaths),
        ]);

        return redirect()->route('blog-management')->with('success', 'Blog created successfully!');
    } catch (\Exception $e) {
        return redirect()->back()->withErrors(['db_error' => 'Database error: ' . $e->getMessage()]);
    }
}
}
