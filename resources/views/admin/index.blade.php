@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="jumbotron">
            <h1>Admin Dashboard</h1>
        </div>
        <div class="col-md-12">
            <a class="btn btn-primary mr-2 text-white" href="{{ route('blogs.create') }}">Create Blog</a>
            <a class="btn btn-success mr-2 text-white" href="{{ route('category.create') }}">Create Category</a>
            <a class="btn btn-danger mr text-white" href="{{ route('blogs.trash') }}">Trash Blog</a>
        </div>
    </div>
@endsection
