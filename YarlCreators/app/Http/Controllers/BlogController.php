<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function blog_management_view(){
        if (!auth()->check()) {
            return redirect()->route('login');
        }

        // Or safely access the user
        $user = auth()->user();

        return view('admin.blog_management', compact('user'));
    }

    public function blog_create_view(){
        if (!auth()->check()) {
            return redirect()->route('login');
        }

        // Or safely access the user
        $user = auth()->user();

        return view('admin.blog_create', compact('user'));
    }

    public function user_blog_view(){

        return view('user.blogview');
    }

    public function user_page_view(){

        return view('user.blogpage');
    }


}
