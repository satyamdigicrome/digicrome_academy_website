@extends('admin_layout.app')

@section('title', 'Add Apart')

@section('content')
<div class="container mt-4">
    <h2 class="mb-4">Add New Apart</h2>

    <div class="card mb-5">
        <div class="card-header bg-white fw-bold">Add Apart Details</div>
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

            <form action="{{ route('aparts.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="mb-3">
                    <label for="image" class="form-label">Image</label>
                    <input type="file" class="form-control" name="image" id="image" accept="image/*" required>
                </div>

                <div class="mb-3">
                    <label for="heading" class="form-label">Heading</label>
                    <input type="text" class="form-control" name="heading" id="heading" placeholder="Enter heading" required>
                </div>

                <div class="mb-3">
                    <label for="tagline" class="form-label">Tagline</label>
                    <input type="text" class="form-control" name="tagline" id="tagline" placeholder="Enter tagline" required>
                </div>

                <div class="mb-3">
                    <label for="paragraph" class="form-label">Paragraph</label>
                    <textarea class="form-control" name="paragraph" id="paragraph" rows="4" placeholder="Enter paragraph" required></textarea>
                </div>

                <div class="mb-3">
                    <label for="course_id" class="form-label">Select Course</label>
                    <select class="form-select" name="course_id[]" id="course_id" multiple required>
                        @foreach($courses as $course)
                            <option value="{{ $course->id }}">{{ $course->name }}</option>
                        @endforeach
                    </select>
                </div>

                <button type="submit" class="btn btn-primary">Add Apart</button>
            </form>
            <script>
                ClassicEditor
                    .create(document.querySelector('#paragraph'))
                    .then(editor => {
                        // Sync manually (optional but useful)
                        editor.model.document.on('change:data', () => {
                            document.querySelector('#paragraph').value = editor.getData();
                        });
                    })
                    .catch(error => {
                        console.error('CKEditor error:', error);
                    });
            </script>
            
        </div>
    </div>
</div>
<div class="container mt-4">
    <h2 class="mb-4">Aparts Management</h2>

    <h4 class="mb-3">Existing Aparts</h4>
    <div class="table-responsive">
        <table class="table table-bordered align-middle">
            <thead class="table-light">
                <tr>
                    <th style="width: 60px;">Image</th>
                    <th>Heading</th>
                    <th>Tagline</th>
                    <th>Paragraph</th>
                    <th>Course</th>
                    <th>User</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($aparts as $apart)
                    <tr>
                        <td>
                            <img src="{{ asset('storage/' . $apart->image) }}" alt="Image" style="height: 40px; width: 40px; object-fit: cover; border-radius: 4px;">
                        </td>
                        <td>{{ $apart->heading }}</td>
                        <td>{{ $apart->tagline }}</td>
                        <td>{{ $apart->paragraph }}</td>
                        <td>{{ $apart->course->name ?? 'N/A' }}</td>
                        <td>{{ $apart->user->name ?? 'N/A' }}</td>
                        <td>
                            <form action="{{ route('aparts.destroy', $apart) }}" method="POST" onsubmit="return confirm('Are you sure?')">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-sm btn-danger"><i class="bi bi-trash"></i> Delete</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="7" class="text-center text-muted">No apart records found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
                   