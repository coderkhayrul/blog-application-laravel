@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="jumbotron">
            <h1>Edit Blog</h1>
        </div>
        <div class="col-md-12">
            <form action="{{ route('blogs.update', $blogs->id) }}" method="post">
                @csrf
                @method('put')
                <div class="form-group">
                    <label for="title">Title</label>
                    <input class="form-control" type="text" name="title" value="{{ $blogs->title }}"/>
                </div>
                <div class="form-group">
                    <label for="body">Body</label>
                    <textarea class="form-control" name="body" id="" cols="30" rows="10">{{ $blogs->body }}</textarea>
                </div>
                <button type="submit" class="btn btn-primary">Update a Blog</button>
            </form>
        </div>
    </div>
@endsection
