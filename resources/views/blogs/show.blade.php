@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <article>
            <div class="jumbotron">
                <h1>{{ $blogs->title }}</h1>
            </div>
            <div class="col-md-12">
                <p>{{ $blogs->body }}</p>
            </div>
        </article>
    </div>
@endsection
