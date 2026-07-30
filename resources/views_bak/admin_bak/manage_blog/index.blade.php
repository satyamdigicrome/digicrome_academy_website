@extends('admin_layout.app')

@section('title', 'Home Page')

@section('content')



<h2>All Blogs</h2>
<a href="{{ route('blogs.create') }}" class="btn btn-primary mb-3">Add New Blog</a>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>#</th><th>Author</th><th>Heading</th><th>Status</th><th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($blogs as $blog)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $blog->author_name }}</td>
            <td>{{ $blog->heading }}</td>
            <td>{{ ucfirst($blog->status) }}</td>
            <td>
                <a href="{{ route('blogs.edit', $blog->id) }}" class="btn btn-sm btn-warning">Edit</a>
                <form action="{{ route('blogs.destroy', $blog->id) }}" method="POST" style="display:inline;">
                    @csrf @method('DELETE')
                    <button onclick="return confirm('Are you sure?')" class="btn btn-sm btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>


@endsection