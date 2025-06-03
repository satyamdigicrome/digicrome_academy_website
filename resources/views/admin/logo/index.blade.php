@extends('admin_layout.app')

@section('title', 'Manage Placements')

@section('content')
<div class="container mt-4">
    <h2 class="mb-4">Add Logo</h2>

    <form action="{{ route('logos.store') }}" method="POST" enctype="multipart/form-data">
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
            <label for="type" class="form-label">Type</label>
            <select class="form-select" id="type" name="type" required>
                <option value="">-- Select Type --</option>
                <option value="association">Association</option>
                <option value="certification_partner">Certification Partner</option>
                <option value="awords">Awards</option>
                <option value="companies">Companies</option>
                <option value="tools">Tools</option>
                <option value="gallery">Gallery</option>
                <option value="certificate">Certificate</option>
            </select>
        </div>
        <div class="mb-3" id="course-selector" style="display: none;">
            <label for="course_id" class="form-label">Select Course</label>
            <select class="form-select" id="course_id" name="course_id">
                <option value="">-- Select Course --</option>
                @foreach($courses as $course)
                    <option value="{{ $course->id }}">{{ $course->name }}</option>
                @endforeach
            </select>
        </div>
        
        <div class="mb-3">
            <label for="country" class="form-label">Country</label>
            <input type="text" class="form-control" id="country" name="country" required>
        </div>

        <button type="submit" class="btn btn-primary">Add Logo</button>
    </form>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const typeSelect = document.getElementById('type');
            const courseSelector = document.getElementById('course-selector');
    
            typeSelect.addEventListener('change', function () {
                if (typeSelect.value === 'tools') {
                    courseSelector.style.display = 'block';
                } else {
                    courseSelector.style.display = 'none';
                    document.getElementById('course_id').value = ''; // Clear selection if hidden
                }
            });
        });
    </script>
    
</div>
<div class="container mt-4">
    <h2 class="mb-4">Manage Logos</h2>

    <table class="table table-bordered align-middle">
        <thead class="table-light">
            <tr>
                <th>Image</th>
                <th>Name</th>
                <th>User ID</th>
                <th>Type</th>
                <th>Country</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($logos as $logo)
                <tr>
                    <td><img src="{{ asset('storage/' . $logo->image) }}" alt="Logo" width="100"></td>
                    <td>{{$logo->name}}</td>
                    <td>{{ $logo->user_id }}</td>
                    <td>{{ $logo->type }}</td>
                    <td>{{ $logo->country }}</td>
                    <td>
                        <form action="{{ route('logos.destroy', $logo->id) }}" method="POST" style="display:inline;" onsubmit="return confirm('Are you sure you want to delete this placement?');">
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