@extends('admin_layout.app')

@section('title', 'Add project')

@section('content')
<div class="container mt-4">
    <h2 class="mb-4">Add New project</h2>

    <div class="card mb-5">
        <div class="card-header bg-white fw-bold">Add project Details</div>
        <div class="card-body">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('project.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="mb-3">
                    <label for="heading" class="form-label">Heading</label>
                    <input type="text" class="form-control" name="heading" id="heading" placeholder="Enter heading" required>
                </div>

                <div class="mb-3">
                    <label for="paragraph" class="form-label">Paragraph</label>
                    <textarea name="paragraph" class="form-control" id="content" required></textarea>
                </div>

                <div class="mb-3">
                    <label for="course_id" class="form-label">Select Course</label>
                    <select class="form-select" name="course_id[]" id="course_id" multiple required>
                        @foreach($courses as $course)
                            <option value="{{ $course->id }}">{{ $course->name }}</option>
                        @endforeach
                    </select>
                </div>

                <button type="submit" class="btn btn-primary">Add project</button>
            </form>
            
            
        </div>
    </div>
</div>
<div class="container mt-4">
    <h2 class="mb-4">Project Management</h2>

    <h4 class="mb-3">Existing Project</h4>
    <div class="table-responsive">
        <table class="table table-bordered align-middle">
            <thead class="table-light">
                <tr>
                    <th>Heading</th>
                    <th>Paragraph</th>
                    <th>Course</th>
                    <th>User</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($project as $project  )
                    <tr>
                        <td>{{ $project->heading }}</td>
                        <td>{{ $project->paragraph }}</td>
                        <td>{{ $project->course->name ?? 'N/A' }}</td>
                        <td>{{ $project->user->name ?? 'N/A' }}</td>
                        <td>
                            <form action="{{ route('project.destroy', $project) }}" method="POST" onsubmit="return confirm('Are you sure?')">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-sm btn-danger"><i class="bi bi-trash"></i> Delete</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="7" class="text-center text-muted">No project records found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
                   