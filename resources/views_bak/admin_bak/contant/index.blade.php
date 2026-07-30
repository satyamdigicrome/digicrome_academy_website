@extends('admin_layout.app')

@section('title', 'Manage Extra')

@section('content')
<div class="container mt-4">
    <h3 class="mb-4">Manage Content</h3>

    <!-- Form -->
    <form id="contentForm" method="POST" action="{{ route('admin.extra.store') }}">
        @csrf
        <div class="mb-3">
            <label for="content_type" class="form-label">Content Type</label>
            <select class="form-select" name="content_type" id="content_type" required>
                <option value="">-- Select Type --</option>
                <option value="Terms">Terms</option>
                <option value="Polocy">Polocy</option>
                <option value="Disclaimer">Disclaimer</option>

            </select>
        </div>

        <div class="mb-3">
            <label for="content" class="form-label">Content</label>
    <textarea class="form-control" id="content" name="content" required></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Save</button>
    </form>
    

    <!-- Table -->
    <div class="mt-5">
        <h4>All Content Entries</h4>
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Content Type</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($contents as $content)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $content->content_type }}</td>
                        <td>
                            {{-- You can implement edit later --}}
                            {{-- <a href="{{ route('contant.edit', $content->id) }}" class="btn btn-sm btn-warning">Edit</a> --}}
                            <form action="{{ route('admin.extra.destroy', $content->id) }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" onclick="return confirm('Are you sure?')" class="btn btn-sm btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="text-center">No content found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

@endsection
