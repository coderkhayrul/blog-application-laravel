@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <article>
            <div class="jumbotron">
                <h1>{{ $blogs->title }}</h1>
                <div class="btn-group">
                    <a class="btn btn-primary mr-2" href="{{ route('blogs.edit', $blogs->id) }}">Edit</a>
                    <form action="{{ route('blogs.destroy', $blogs->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" type="submit">Delete</button>
                    </form>
                </div>
            </div>
            <div class="col-md-12">
                <p>{{ $blogs->body }}</p>
                <hr>
                <strong>Categories:</strong>
                @foreach($blogs->category as $category)
                    <span><a href="{{ route('category.show', $category->slug) }}">{{ $category->name }}</a></span>
                @endforeach
            </div>
        </article>
    </div>
@endsection
