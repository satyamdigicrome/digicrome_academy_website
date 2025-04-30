@extends('admin_layout.app')

@section('title', 'Key Points')

@section('content')
<div class="container mt-4">
    <h2 class="mb-4">Key Points Management</h2>

    <!-- Add Key Point Form -->
    <div class="card mb-5">
        <div class="card-header bg-white fw-bold">Add New Key Point</div>
        <div class="card-body">
            <form action="{{ route('keypoints.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="mb-3">
                    <label for="image" class="form-label">Image</label>
                    <input type="file" class="form-control" name="image" id="image" accept="image/*" required>
                </div>

                <div class="mb-3">
                    <label for="name" class="form-label">Key Point Name</label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="Enter key point name" required>
                </div>

                <div class="mb-3">
                    <label for="course_id" class="form-label">Select Courses</label>
                    <select class="form-select" name="course_id[]" id="course_id" multiple required>
                        @foreach($courses as $course)
                            <option value="{{ $course->id }}">{{ $course->name }}</option>
                        @endforeach
                    </select>
                </div>

                <button type="submit" class="btn btn-primary">Add Key Point</button>
            </form>
        </div>
    </div>

    <!-- Existing Key Points Table -->
    <h4 class="mb-3">Existing Key Points</h4>
    <div class="table-responsive">
        <table class="table table-bordered align-middle">
            <thead class="table-light">
                <tr>
                    <th style="width: 60px;">Image</th>
                    <th>Name</th>
                    <th>Courses</th>
                    <th>User</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($keypoints as $keypoint)
                    <tr>
                        <td>
                            <img src="{{ asset('storage/' . $keypoint->image) }}" alt="Image" style="height: 40px; width: 40px; object-fit: cover; border-radius: 4px;">
                        </td>
                        <td>{{ $keypoint->name }}</td>
                        <td>{{ $keypoint->course->name ?? 'N/A' }}</td>
                        <td>{{ $keypoint->user->name ?? 'N/A' }}</td>
                        <td>
                            <form action="{{ route('keypoints.destroy', $keypoint) }}" method="POST" onsubmit="return confirm('Are you sure?')">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-sm btn-danger"><i class="bi bi-trash"></i> Delete</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="text-center text-muted">No key points found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
