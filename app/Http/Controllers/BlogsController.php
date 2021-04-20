<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogsController extends Controller
{
    // Index Method
    public function index()
    {
        $blogs =  Blog::all();
        return view('blogs.index', compact('blogs'));
    }
    // Create Method
    public function create()
    {
        return view('blogs.create');
    }
    // Store Method
    public function store(Request $request)
    {

        $blogs = new Blog();
        $blogs->title = $request->title;
        $blogs->body = $request->body;

        $blogs->save();
        return back();

    }
}
