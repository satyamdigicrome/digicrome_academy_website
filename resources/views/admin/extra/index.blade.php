@extends('admin_layout.app')

@section('title', 'Manage Extra')

@section('content')
<div class="row">
    <div class="col-lg-6">
        <h2 class="mb-4">Manage Extra</h2>

        <!-- Form 1 -->
        <div class="card mb-4">
            <div class="card-header">Add Part 1</div>
            <div class="card-body">
                <form action="{{ route('extra.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="heading1" class="form-label">Heading</label>
                        <input type="text" class="form-control" name="heading" id="heading1" required>
                    </div>
    
                    <div class="mb-3">
                        <label for="course_id1" class="form-label">Select Course</label>
                        <select class="form-select" name="course_id[]" id="course_id" multiple required>
                            @foreach($courses as $course)
                                <option value="{{ $course->id }}">{{ $course->name }}</option>
                            @endforeach
                        </select>
                    </div>
    
                    <input type="hidden" name="part" value="1">
                    <button type="submit" class="btn btn-primary">Add Part 1</button>
                </form>
            </div>
        </div>
    
        <!-- Form 2 -->
        <div class="card mb-4">
            <div class="card-header">Add Part 2</div>
            <div class="card-body">
                <form action="{{ route('extra.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="heading2" class="form-label">Heading</label>
                        <input type="text" class="form-control" name="heading" id="heading2" required>
                    </div>
    
                    <div class="mb-3">
                        <label for="course_id2" class="form-label">Select Course</label>
                        <select class="form-select" name="course_id[]" id="course_id" multiple required>
                            @foreach($courses as $course)
                                <option value="{{ $course->id }}">{{ $course->name }}</option>
                            @endforeach
                        </select>
                    </div>
    
                    <input type="hidden" name="part" value="2">
                    <button type="submit" class="btn btn-primary">Add Part 2</button>
                </form>
            </div>
        </div>
    
    </div>
    <div class="col-lg-6">
        <div class="container mt-4">
            <h2 class="mb-4">Manage Extra</h2>
        
            <!-- Filter Form -->
            <div class="mb-4">
                <form action="{{ route('extra.filter') }}" method="GET" class="d-flex">
                    <div class="me-2">
                        <select name="course_id" class="form-select" onchange="this.form.submit()">
                            <option value="">Select Course</option>
                            @foreach($courses as $course)
                                <option value="{{ $course->id }}" {{ request('course_id') == $course->id ? 'selected' : '' }}>
                                    {{ $course->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="me-2">
                        <select name="part" class="form-select" >
                            <option value="">Select Part</option>
                            <option value="1" {{ request('part') == '1' ? 'selected' : '' }}>Internship</option>
                            <option value="2" {{ request('part') == '2' ? 'selected' : '' }}>Softskill</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Filter</button>
                </form>
            </div>
        
            <!-- Existing Extras Table -->
            <h4 class="mb-3">Existing Extras</h4>
            <div class="table-responsive">
                <table class="table table-bordered align-middle">
                    <thead class="table-light">
                        <tr>
                            <th>Heading</th>
                            <th>Course</th>
                            <th>Part</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($extras as $extra)
                            <tr>
                                <td>{{ $extra->heading }}</td>
                                <td>{{ $extra->course->name ?? 'N/A' }}</td>
                                <td>
                                    @if ($extra->part == 1.00)
                                        Internship
                                    @elseif ($extra->part == 2.00)
                                        Softskill
                                    @else
                                        {{ $extra->part }} <!-- Fallback for any other part values -->
                                    @endif
                                </td>
                                <td>
                                    <form action="{{ route('extra.destroy', $extra) }}" method="POST" onsubmit="return confirm('Are you sure?')">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-sm btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4" class="text-center text-muted">No extra records found.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection