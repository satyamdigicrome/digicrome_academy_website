@extends('admin_layout.app')

@section('title', 'Mentor')

@section('content')

@if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif

<!-- Form to Add Mentor -->
<form action="{{ route('mentor.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="mb-3">
        <label for="course_id" class="form-label">Select Courses</label>
        <select class="form-select" name="course_id[]" id="course_id" multiple required>
            @foreach($courses as $course)
                <option value="{{ $course->id }}">{{ $course->name }}</option>
            @endforeach
        </select>
    </div>

    <div class="mb-3">
        <label for="name" class="form-label">Mentor Name</label>
        <input type="text" class="form-control" name="name" id="name" required>
    </div>

    <div class="mb-3">
        <label for="description" class="form-label">Description</label>
        <textarea class="form-control" name="description" id="description"></textarea>
    </div>

    <div class="mb-3">
        <label for="position" class="form-label">Position</label>
        <input type="text" class="form-control" name="position" id="position">
    </div>

    <div class="mb-3">
        <label for="experience" class="form-label">Experience (years)</label>
        <input type="number" class="form-control" name="experience" id="experience">
    </div>

    <div class="mb-3">
        <label for="photo" class="form-label">Photo Size (390*480)</label>
        <input type="file" class="form-control" name="photo" id="photo">
    </div>

    <button type="submit" class="btn btn-primary">Add Mentor</button>
</form>

<!-- Table of Mentors -->
<hr>
<h4 class="mt-4">Mentor List</h4>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>Course</th>
            <th>User ID</th>
            <th>Name</th>
            <th>Position</th>
            <th>Experience</th>
            <th>Photo</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($mentors as $mentor)
            <tr>
                <td>{{ $mentor->id }}</td>
                <td>{{ $mentor->course->name ?? 'N/A' }}</td>
                <td>{{ $mentor->user_id }}</td>
                <td>{{ $mentor->name }}</td>
                <td>{{ $mentor->position }}</td>
                <td>{{ $mentor->experience }} yrs</td>
                <td>
                    @if($mentor->photo)
                        <img src="{{ asset('storage/' . $mentor->photo) }}" alt="Photo" width="50">
                    @else
                        No photo
                    @endif
                </td>
                <td>
                    <form action="{{ route('mentor.destroy', $mentor->id) }}" method="POST" onsubmit="return confirm('Delete this mentor?');">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

@endsection
