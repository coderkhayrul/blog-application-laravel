@extends('layouts.app')
@section('content')
   <div class="container-fluid">
       <div class="jumbotron">
           <h1>Crate New Blog</h1>
       </div>
       <div class="col-md-12">
           <form action="{{ route('blogs.store') }}" method="post">
               @csrf
               <div class="form-group">
                   <label for="title">Title</label>
                   <input class="form-control" type="text" name="title"/>
               </div>
               <div class="form-group">
                   <label for="body">Body</label>
                   <textarea class="form-control" name="body" id="" cols="30" rows="10"></textarea>
               </div>
               <button type="submit" class="btn btn-primary">Create a new Blog</button>
           </form>
       </div>
   </div>
@endsection
