@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <article>
            <div class="jumbotron">
                <h1>{{ $category->name }}</h1>
                <div class="btn-group">
                    <a class="btn btn-primary mr-2" href="{{ route('category.edit', $category->id) }}">Edit</a>
                    <form action="{{ route('category.destroy', $category->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" type="submit">Delete</button>
                    </form>
                </div>
            </div>
        </article>
    </div>
@endsection
