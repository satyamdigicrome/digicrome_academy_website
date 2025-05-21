@extends('admin_layout.app')

@section('title', 'Add modules')

@section('content')
<div class="container mt-4">
    <h3>Add Multiple modules</h3>

    <form method="POST" action="{{ route('modules.store') }}">
        @csrf

        <div class="mb-3">
            <label for="course_id" class="form-label">Select Course</label>
            <select name="course_id" class="form-select" required>
                @foreach ($courses as $course)
                    <option value="{{ $course->id }}">{{ $course->name }}</option>
                @endforeach
            </select>
        </div>

        <div id="module-container">
            <div class="module-item row mb-3">
                <div class="col-md-5">
                    <input type="text" name="modules[0][question]" class="form-control" placeholder="Question" required>
                </div>
                <div class="col-md-5">
                    <textarea name="modules[0][answer]" class="form-control" placeholder="Answer" required></textarea>
                </div>
                <div class="col-md-2">
                    <button type="button" class="btn btn-danger remove-module">Remove</button>
                </div>
            </div>
        </div>

        <button type="button" class="btn btn-secondary mb-3" id="add-module">+ Add More module</button>
        <br>
        <button type="submit" class="btn btn-primary">Save modules</button>
    </form>
</div>
<!-- module List Table -->
<form method="GET" class="mb-4">
    <div class="row">
        <div class="col-md-4">
            <select name="filter_course_id" class="form-select" onchange="this.form.submit()">
                <option value="">-- Filter by Course --</option>
                @foreach($courses as $course)
                    <option value="{{ $course->id }}" {{ request('filter_course_id') == $course->id ? 'selected' : '' }}>
                        {{ $course->name }}
                    </option>
                @endforeach
            </select>
        </div>
    </div>
</form>
<h4 class="mb-3">module List</h4>
<table class="table table-bordered table-hover">
    <thead class="table-light">
        <tr>
            <th>#</th>
            <th>Course</th>
            <th>Question</th>
            <th>Answer</th>
            <th>Created By</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($modules as $index => $module)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $module->course->name ?? 'N/A' }}</td>
                <td>{{ $module->question }}</td>
                <td>{{ $module->answer }}</td>
                <td>{{ $module->user->name ?? 'Unknown' }}</td>
                <td>
                    <form action="{{ route('modules.destroy', $module->id) }}" method="POST" onsubmit="return confirm('Delete this module?')">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-sm btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @empty
            <tr><td colspan="6" class="text-center">No modules found.</td></tr>
        @endforelse
    </tbody>
</table>

<script>
    let index = 1;
    document.getElementById('add-module').addEventListener('click', function () {
        const container = document.getElementById('module-container');
        const moduleItem = document.createElement('div');
        moduleItem.classList.add('row', 'mb-3', 'module-item');
        moduleItem.innerHTML = `
            <div class="col-md-5">
                <input type="text" name="modules[${index}][question]" class="form-control" placeholder="Question" required>
            </div>
            <div class="col-md-5">
                <textarea name="modules[${index}][answer]" class="form-control" placeholder="Answer" required></textarea>
            </div>
            <div class="col-md-2">
                <button type="button" class="btn btn-danger remove-module">Remove</button>
            </div>
        `;
        container.appendChild(moduleItem);
        index++;
    });

    document.addEventListener('click', function (e) {
        if (e.target.classList.contains('remove-module')) {
            e.target.closest('.module-item').remove();
        }
    });
</script>
@endsection
