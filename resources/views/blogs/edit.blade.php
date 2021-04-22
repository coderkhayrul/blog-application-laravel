@extends('layouts.app')
@section('content')
    @include('partials.tinymce')
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
                    <textarea class="form-control" id="mytextarea" name="body">{{ $blogs->body }}</textarea>
                </div>
                <div class="form-group form-check form-check-inline">
                    {{ $blogs->category->count() ? 'Current Categories' : '' }} &nbsp;
                    @foreach($blogs->category as $category)
                        <input class="form-check-input ml-2" type="checkbox" value="{{ $category->id }}" name="category_id[]" checked>
                        <label class="form-check-label ">{{ $category->name }}</label>
                    @endforeach
                </div>
                <br>
                <div class="form-group form-check form-check-inline">
                    {{ $filter->count() ? 'Unused Categories' : '' }} &nbsp;
                    @foreach($filter as $unused_category)
                        <input class="form-check-input ml-2" type="checkbox" value="{{ $unused_category->id }}" name="category_id[]">
                        <label class="form-check-label ">{{ $unused_category->name }}</label>
                    @endforeach
                </div>
                <br>
                <button type="submit" class="btn btn-primary">Update a Blog</button>
            </form>
        </div>
    </div>
@endsection
