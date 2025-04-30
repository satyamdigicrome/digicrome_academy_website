@extends('admin_layout.app')

@section('title', 'Manage Case Studies')

@section('content')
<div class="container mt-4">
    <h2 class="mb-4">Add Case Study</h2>

    <form action="{{ route('casestudy.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="heading" class="form-label">Heading</label>
            <input type="text" class="form-control" id="heading" name="heading" required>
        </div>

        <div class="mb-3">
            <label for="paragraph" class="form-label">Paragraph</label>
            <textarea class="form-control" id="paragraph" name="paragraph" rows="3" required></textarea>
        </div>

        <div class="mb-3">
            <label for="courses" class="form-label">Select Courses</label>
            <select class="form-select" name="course_id[]" id="course_id" multiple required>
                @foreach($courses as $course)
                    <option value="{{ $course->id }}">{{ $course->name }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Add Case Study</button>
    </form>
</div>
<div class="container mt-4">
    <h2 class="mb-4">Manage Case Studies</h2>

    <div class="table-responsive">
        <table class="table table-bordered align-middle">
            <thead class="table-light">
                <tr>
                    <th>Heading</th>
                    <th>Course</th>
                    <th>User</th>
                    <th>Paragraph</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($caseStudies as $caseStudy)
                    <tr>
                        <td>{{ $caseStudy->heading }}</td>
                        <td>{{ $caseStudy->course->name ?? 'N/A' }}</td>
                        <td>{{ $caseStudy->user->name ?? 'N/A' }}</td>
                        <td>{{ $caseStudy->paragraph }}</td>
                        <td>
                            <form action="{{route('caseStudy.destroy',$caseStudy->id)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn-outline-danger">
                                    <i class="bi bi-trash"></i> Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="text-center text-muted">No case studies found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection