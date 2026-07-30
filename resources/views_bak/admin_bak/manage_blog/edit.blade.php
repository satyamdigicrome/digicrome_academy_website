@extends('admin_layout.app')

@section('title', 'Home Page')

@section('content')


<h2>Edit Blog</h2>
<form action="{{ route('blogs.update', $blog->id) }}" method="POST" enctype="multipart/form-data">
    @csrf @method('PUT')
    @include('admin.manage_blog.form', ['blog' => $blog])
    <button type="submit" class="btn btn-primary">Update</button>
</form>

@endsection