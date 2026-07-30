@extends('admin_layout.app')

@section('page-title', 'Blogs')

@section('content')

<div class="page-header">
    <div>
        <h1 class="page-title">Blog Posts</h1>
        <p class="page-subtitle">Manage articles and blog content</p>
    </div>
    <a href="{{ route('blogs.create') }}" class="btn-cms-primary">
        <i class="bi bi-plus-circle me-1"></i> Write New Blog
    </a>
</div>

<div class="cms-card">
    <div class="cms-card-header">
        <h5 class="cms-card-title"><i class="bi bi-file-earmark-text me-2"></i>All Blogs</h5>
        <span class="badge bg-primary">{{ $blogs->count() }} total</span>
    </div>
    <div class="cms-card-body p-0">
        @if($blogs->isEmpty())
            <div class="empty-state">
                <i class="bi bi-file-earmark-text"></i>
                <p>No blogs yet. <a href="{{ route('blogs.create') }}">Write the first one</a>.</p>
            </div>
        @else
        <div class="table-responsive">
            <table class="cms-table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Heading</th>
                        <th>Author</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($blogs as $blog)
                    <tr>
                        <td class="text-muted">{{ $loop->iteration }}</td>
                        <td>
                            <div class="fw-semibold">{{ Str::limit($blog->heading, 55) }}</div>
                            @if($blog->tagline)
                                <small class="text-muted">{{ Str::limit($blog->tagline, 60) }}</small>
                            @endif
                        </td>
                        <td>
                            <div class="d-flex align-items-center gap-2">
                                @if($blog->author_image)
                                    <img src="{{ asset('storage/' . $blog->author_image) }}" class="rounded-circle"
                                         style="width:28px;height:28px;object-fit:cover;" alt="Author">
                                @endif
                                {{ $blog->author_name }}
                            </div>
                        </td>
                        <td>
                            @php
                                $statusColors = ['published' => 'success', 'draft' => 'warning', 'archived' => 'secondary'];
                                $statusColor = $statusColors[$blog->status] ?? 'secondary';
                            @endphp
                            <span class="badge bg-{{ $statusColor }}">{{ ucfirst($blog->status) }}</span>
                        </td>
                        <td>
                            <div class="action-group">
                                <a href="{{ route('blogs.edit', $blog->id) }}" class="btn-cms-edit" title="Edit">
                                    <i class="bi bi-pencil"></i>
                                </a>
                                <form action="{{ route('blogs.destroy', $blog->id) }}" method="POST"
                                      onsubmit="return confirm('Delete this blog post?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn-cms-delete" title="Delete">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        @endif
    </div>
</div>

@endsection
