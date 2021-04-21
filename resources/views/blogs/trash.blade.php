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
            <div class="btn-group">
                {{--Restor--}}
                <form action="{{ route('blogs.restore', $blog->id) }}" method="get">
                    @csrf
                    <button type="submit" class="btn btn-success btn-xs pull-left btn-margin-right">Restore</button>
                </form>
                {{-- Permanent Delete --}}
                <form action="{{ route('blogs.permanent-delete', $blog->id) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-xs pull-right ml-2">Permanent Delete</button>
                </form>
            </div>
        @endforeach
    </div>
@endsection
