@extends('layouts.app')
@section('content')
    @foreach($trashedBlogs as $blog)
        <h2 class="text-danger">{{ $blog->title }}</h2>
    @endforeach
@endsection
