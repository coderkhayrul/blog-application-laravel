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
        $input = $request->all();
        $blog = Blog::create($input);
//        $blog = new Blog();
//        $blog->title = $request->title;
//        $blog->body = $request->body;
//
//        $blog->save();
        return redirect()->route('blogs.index');

    }
    // Show Method
    public function show($id)
    {
        $blogs = Blog::findOrFail($id);
        return view('blogs.show', compact('blogs'));
    }
    // Edit Method
    public function edit($id)
    {
        $blogs = Blog::findOrFail($id);
        return view('blogs.edit', compact('blogs'));
    }
    public function update(Request $request, $id)
    {
        $input = $request->all();
        $blog = Blog::findOrFail($id);
        $blog->update($input);
        return redirect()->route('blogs.index');

    }
}
