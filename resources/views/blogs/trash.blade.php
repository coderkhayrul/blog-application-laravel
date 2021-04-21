@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="jumbotron">
            <h1>Trashed Blogs</h1>
        </div>
    </div>
    <div class="col-md-12">
            @foreach($trashedBlogs as $blog)
                <h2 class="text-danger">{{ $blog->title }}</h2>

            {{--Restor--}}
            <form action="{{ route('blogs.restore', $blog->id) }}" method="get">
                @csrf
                <button type="submit" class="btn btn-success btn-xs pull-left btn-margin-right">Restore</button>
            </form>
        @endforeach
    </div>
@endsection
