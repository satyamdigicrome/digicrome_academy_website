@extends('admin_layout.app')

@section('page-title', 'Create Blog')

@section('content')

<div class="page-header">
    <div>
        <h1 class="page-title">Write New Blog</h1>
        <p class="page-subtitle">Create a new article or blog post</p>
    </div>
    <a href="{{ route('blogs.index') }}" class="btn-cms-secondary">
        <i class="bi bi-arrow-left me-1"></i> Back to Blogs
    </a>
</div>

<div class="cms-card">
    <div class="cms-card-header">
        <h5 class="cms-card-title"><i class="bi bi-plus-circle me-2"></i>New Blog Post</h5>
    </div>
    <div class="cms-card-body">
        <form action="{{ route('blogs.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @include('admin.manage_blog.form')
            <div class="d-flex gap-2 mt-4 pt-3 border-top">
                <button type="submit" class="btn-cms-primary">
                    <i class="bi bi-check-circle me-1"></i> Publish Blog
                </button>
                <a href="{{ route('blogs.index') }}" class="btn-cms-secondary">Cancel</a>
            </div>
        </form>
    </div>
</div>

@endsection
