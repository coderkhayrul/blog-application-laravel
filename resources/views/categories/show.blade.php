@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <article>
            <div class="jumbotron">
                <h1>{{ $category->name }}</h1>
                <div class="btn-group">
                    <a class="btn btn-primary mr-2" href="{{ route('category.edit', $category->id) }}">Edit</a>
                    <form action="{{ route('category.destroy', $category->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" type="submit">Delete</button>
                    </form>
                </div>
            </div>
            <div class="col-md 12">
                @foreach($category->blog as $blog)
                    <h3><a href="{{ route('blogs.show', $blog->id) }}">{{ $blog->title }}</a></h3>
                @endforeach
            </div>
        </article>
    </div>
@endsection
