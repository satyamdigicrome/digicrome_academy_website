@extends('admin_layout.app')

@section('title', 'Home Page')

@section('content')



<h2>Add Blog</h2>
<form action="{{ route('blogs.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    @include('admin.manage_blog.form')
    <button type="submit" class="btn btn-success">Create</button>
</form>


@endsection