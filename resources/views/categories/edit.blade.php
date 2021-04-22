@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="jumbotron">
            <h1>Edit Category</h1>
        </div>
        <div class="col-md-12">
            <form action="{{ route('category.update', $category->id) }}" method="post">
                @csrf
                @method('put')
                <div class="form-group">
                    <label for="title">Name</label>
                    <input class="form-control" type="text" name="name" value="{{ $category->name }}"/>
                </div>

                <button type="submit" class="btn btn-primary">Update a Category</button>
            </form>
        </div>
    </div>
@endsection
