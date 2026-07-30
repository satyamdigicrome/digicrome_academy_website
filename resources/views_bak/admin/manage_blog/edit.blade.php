@extends('admin_layout.app')

@section('page-title', 'Edit Blog')

@section('content')

<div class="page-header">
    <div>
        <h1 class="page-title">Edit Blog Post</h1>
        <p class="page-subtitle">Update: <strong>{{ Str::limit($blog->heading, 60) }}</strong></p>
    </div>
    <a href="{{ route('blogs.index') }}" class="btn-cms-secondary">
        <i class="bi bi-arrow-left me-1"></i> Back to Blogs
    </a>
</div>

<div class="cms-card">
    <div class="cms-card-header">
        <h5 class="cms-card-title"><i class="bi bi-pencil-square me-2"></i>Edit Post</h5>
        <span class="badge bg-{{ ['published'=>'success','draft'=>'warning','archived'=>'secondary'][$blog->status] ?? 'secondary' }}">
            {{ ucfirst($blog->status) }}
        </span>
    </div>
    <div class="cms-card-body">
        <form action="{{ route('blogs.update', $blog->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            @include('admin.manage_blog.form', ['blog' => $blog])
            <div class="d-flex gap-2 mt-4 pt-3 border-top">
                <button type="submit" class="btn-cms-primary">
                    <i class="bi bi-check-circle me-1"></i> Save Changes
                </button>
                <a href="{{ route('blogs.index') }}" class="btn-cms-secondary">Cancel</a>
            </div>
        </form>
    </div>
</div>

@endsection
