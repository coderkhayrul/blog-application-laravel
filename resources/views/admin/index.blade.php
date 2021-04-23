@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="jumbotron">
            <!-- Authentication Links -->
            @if(auth()->user() && Auth::user()->role_id === 1)
                <h1>Admin Dashboard</h1>
            @elseif(auth()->user() && Auth::user()->role_id === 2)
                <h1>Author Dashboard</h1>
            @elseif(auth()->user() && Auth::user()->role_id === 3)
                <h1>Subscriber Dashboard</h1>
            @endif
        </div>
        <div class="col-md-12">
            <a class="btn btn-primary mr-2 text-white" href="{{ route('blogs.create') }}">Create Blog</a>
            <a class="btn btn-success mr-2 text-white" href="{{ route('category.create') }}">Create Category</a>
            <a class="btn btn-danger mr text-white" href="{{ route('blogs.trash') }}">Trash Blog</a>
        </div>
    </div>
@endsection
