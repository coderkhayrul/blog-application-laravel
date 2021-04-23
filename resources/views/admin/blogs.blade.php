@extends('layouts.app')
@include('partials.meta_static');
@section('content')
    <div class="container-fluid">
        <div class="jumbotron">
            <h1>Manage Blogs</h1>
        </div>
        <div class="row">
            <div class="col-md-6">
                <h3>Published Blogs</h3>
                <hr>
                @foreach($publishedBlogs as $blog)
                    <h2>
                        <a href="{{ route('blogs.show', $blog->id) }}">{{ $blog->title }}</a>

                        <form action="{{ route('blogs.update', $blog->id) }}" method="post">
                            @csrf
                            @method('put')
                                <input type="checkbox" name="status" value="0" checked style="display: none"/>
                                <button class="btn btn-warning btn-xs" type="submit">Save as draft</button>
                        </form>
                    </h2>
                @endforeach
            </div>
            <div class="col-md-6">
                <h3>Draft Blogs</h3>
                <hr>
                @foreach($draftdBlogs as $blog)
                    <h2>
                        <a href="{{ route('blogs.show', $blog->id) }}">{{ $blog->title }}</a>
                        <form action="{{ route('blogs.update', $blog->id) }}" method="post">
                            @csrf
                            @method('put')
                            <input type="checkbox" name="status" value="1" checked style="display: none"/>
                            <button class="btn btn-primary btn-xs" type="submit">Published</button>
                        </form>
                    </h2>
                @endforeach
            </div>
        </div>
    </div>
@endsection
