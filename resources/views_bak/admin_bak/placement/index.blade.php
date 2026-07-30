@extends('admin_layout.app')

@section('title', 'Manage Placements')

@section('content')
<div class="container mt-4">
    <h2 class="mb-4">Add Placement</h2>

    <form action="{{ route('placement.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="image" class="form-label">Image</label>
            <input type="file" class="form-control" id="image" name="image" required>
        </div>

        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>

        <div class="mb-3">
            <label for="position" class="form-label">Position</label>
            <input type="text" class="form-control" id="position" name="position" required>
        </div>

        <div class="mb-3">
            <label for="package" class="form-label">Package</label>
            <input type="number" class="form-control" id="package" name="package" step="0.01" required>
        </div>
        <button type="submit" class="btn btn-primary">Add Placement</button>
    </form>
</div>
<div class="container mt-4">
    <h2 class="mb-4">Manage Placements</h2>


    <table class="table table-bordered align-middle">
        <thead class="table-light">
            <tr>
                <th>Image</th>
                <th>Name</th>
                <th>Position</th>
                <th>Package</th>
                <th>User ID</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($placements as $placement)
                <tr>
                    <td><img src="{{ asset($placement->image) }}" alt="{{ $placement->name }}" width="100"></td>
                    <td>{{ $placement->name }}</td>
                    <td>{{ $placement->position }}</td>
                    <td>{{ $placement->package }}</td>
                    <td>{{ $placement->user_id }}</td>
                    <td>
                        <form action="{{ route('placement.destroy', $placement->id) }}" method="POST" style="display:inline;" onsubmit="return confirm('Are you sure you want to delete this placement?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection