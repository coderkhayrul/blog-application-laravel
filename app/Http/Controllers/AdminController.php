<?php

namespace App\Http\Controllers;

use App\Models\Blog;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware(['admin', 'auth']);
    }

    public function index(){
        return view('admin.index');
    }
    public function blogs(){
        $publishedBlogs = Blog::where('status',1)->latest()->get();
        $draftdBlogs = Blog::where('status',0)->latest()->get();
        return view('admin.blogs', compact('publishedBlogs', 'draftdBlogs'));
    }
}
