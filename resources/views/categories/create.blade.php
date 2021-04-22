@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="jumbotron">
            <h1>Create New Category</h1>
        </div>
        <div class="col-md-12">
            <form action="{{ route('category.store') }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="title">Name</label>
                    <input class="form-control" type="text" name="name"/>
                </div>

                <button type="submit" class="btn btn-primary">Create a new Category</button>
            </form>
        </div>
    </div>
@endsection
