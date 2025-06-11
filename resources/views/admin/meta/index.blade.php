@extends('admin_layout.app')

@section('title', 'Home Page')

@section('content')

<div class="container">
    <h2>Meta Tags Management</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <form action="{{ route('meta.store') }}" method="POST" class="mb-4">
        @csrf

        <div class="mb-3">
            <label for="page_name" class="form-label">Page Name</label>
            <select name="page_name" id="page_name" class="form-control" required>
                <option value="">Select Page</option>
                @foreach($pages as $page)
                    <option value="{{ $page }}">{{ $page }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="title" class="form-label">Meta Title</label>
            <input type="text" name="title" id="title" class="form-control">
        </div>

        <div class="mb-3">
            <label for="keywords" class="form-label">Meta Keywords</label>
            <input type="text" name="keywords" id="keywords" class="form-control">
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Meta Description</label>
            <textarea name="description" id="description" class="form-control" rows="3"></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Save Meta Tag</button>
    </form>

    <h4>Existing Meta Tags</h4>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Page Name</th>
                <th>Title</th>
                <th>Keywords</th>
                <th>Description</th>
                <th>Created By</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse($metaTags as $meta)
                <tr>
                    <td>{{ $meta->page_name }}</td>
                    <td>{{ $meta->title }}</td>
                    <td>{{ $meta->keywords }}</td>
                    <td>{{ $meta->description }}</td>
                    <td>{{ $meta->user_id }}</td>
                    <td>
                        <form action="{{ route('meta.delete', $meta->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this meta tag?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>                        
                </tr>
            @empty
                <tr>
                    <td colspan="5">No meta tags found.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>


@endsection