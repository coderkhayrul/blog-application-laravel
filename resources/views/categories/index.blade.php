@extends('layouts.app')
@section('content')
    @foreach($categories as $category)
        <a href="{{ route('category.show', $category->slug) }}"><h2>{{ $category->name }}</h2></a>
    @endforeach
@endsection
