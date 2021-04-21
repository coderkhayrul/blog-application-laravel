@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <article>
            <div class="jumbotron">
                <h1><a class="btn btn-primary" href="{{ route('blogs.edit', $blogs->id) }}">Edit</a> {{ $blogs->title }}</h1>
                <form action="{{ route('blogs.destroy', $blogs->id) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger" type="submit">delete</button>
                </form>
            </div>
            <div class="col-md-12">
                <p>{{ $blogs->body }}</p>
            </div>
        </article>
    </div>
@endsection
