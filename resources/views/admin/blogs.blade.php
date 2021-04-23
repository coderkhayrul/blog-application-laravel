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
                    </h2>
                @endforeach
            </div>
            <div class="col-md-6">
                <h3>Draft Blogs</h3>
                <hr>
                @foreach($draftdBlogs as $blog)
                    <h2>
                        <a href="{{ route('blogs.show', $blog->id) }}">{{ $blog->title }}</a>
                    </h2>
                @endforeach
            </div>
        </div>
    </div>
@endsection
