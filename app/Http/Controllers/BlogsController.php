<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;

class BlogsController extends Controller
{
    // Index Method
    public function index()
    {
        $blogs =Blog::where('status', 1)->latest()->get();
//        $blogs =  Blog::latest()->get();
        return view('blogs.index', compact('blogs'));
    }
    // Create Method
    public function create()
    {
        $categories = Category::latest()->get();
        return view('blogs.create', compact('categories'));
    }
    // Store Method
    public function store(Request $request)
    {
        $input = $request->all();
//        Meta Stuff
        $input['slug'] = Str::slug($request->title, '-');
        $input['meta_title'] = Str::limit($request->title, 40, '....');
        $input['meta_description'] = Str::limit($request->body, 80, '....');
        // Image Update
        if ($file = $request->featured_image){
            $name =uniqid() . $file->getClientOriginalName();
            $file->move('images/featured_image',$name);
            $input['featured_image'] = $name;
        }
        $blog = Blog::create($input);
        //  sync with category
        if ($request->category_id){
            $blog->category()->sync($request->category_id);
        }
        return redirect('/blogs');

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
        $categories = Category::latest()->get();
        $blogs = Blog::findOrFail($id);

        $filter_category = array();
        foreach ($blogs->category as $c){
            $filter_category[] = $c->id-1;
        }
        $filter =Arr::except($categories, $filter_category);

        return view('blogs.edit', compact('blogs', 'categories', 'filter'));
    }
    public function update(Request $request, $id)
    {

        $input = $request->all();
        $blog = Blog::findOrFail($id);
        $blog->update($input);
        //  sync with category
        if ($request->category_id){
            $blog->category()->sync($request->category_id);
        }
        return redirect()->route('blogs.index');

    }
    public function destroy($id)
    {

        $blog = Blog::findOrFail($id);;

        $blog->delete();
        return redirect()->route('blogs.index');

    }

    public function trash()
    {
        $trashedBlogs = Blog::onlyTrashed()->get();
       return view('blogs.trash', compact('trashedBlogs'));
    }
    public function restore($id)
    {
       $restoredBlog = Blog::onlyTrashed()->findOrFail($id);
       $restoredBlog->restore($restoredBlog);
       return redirect()->route('blogs.index');
    }
    public function permanent_delete($id)
    {
        $permanent_delete = Blog::onlyTrashed()->findOrFail($id);
        $permanent_delete->forceDelete($permanent_delete);
       return back();
    }
}
