@extends('layouts.app')
@include('partials.meta_static');
@section('content')
    <div class="container">
        @if(\Illuminate\Support\Facades\Session::has('success'))
            <div class="alert alert-success">
                {{ Session::get('success') }}
            </div>
        @endif
        @foreach($blogs as $blog)
            <h2>
                <a href="{{ route('blogs.show', $blog->id) }}">{{ $blog->title }}</a>
            </h2>
        @endforeach
    </div>
@endsection
