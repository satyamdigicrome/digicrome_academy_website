@extends('admin_layout.app')

@section('page-title', 'Mentors')

@section('content')

<div class="page-header">
    <div>
        <h1 class="page-title">Mentors</h1>
        <p class="page-subtitle">Manage course instructors and mentors</p>
    </div>
</div>

<div class="row g-4">
    {{-- Add Form --}}
    <div class="col-lg-4">
        <div class="cms-card">
            <div class="cms-card-header">
                <h5 class="cms-card-title"><i class="bi bi-plus-circle me-2"></i>Add Mentor</h5>
            </div>
            <div class="cms-card-body">
                <form action="{{ route('mentor.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label fw-semibold">Select Courses <span class="text-danger">*</span></label>
                        <select name="course_id[]" class="form-select" multiple required style="min-height:100px;">
                            @foreach($courses as $course)
                                <option value="{{ $course->id }}">{{ $course->name }}</option>
                            @endforeach
                        </select>
                        <small class="text-muted">Hold Ctrl/Cmd to select multiple</small>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-semibold">Mentor Name <span class="text-danger">*</span></label>
                        <input type="text" name="name" class="form-control" placeholder="Full name" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-semibold">Position</label>
                        <input type="text" name="position" class="form-control" placeholder="e.g. Senior Developer">
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-semibold">Experience (years)</label>
                        <input type="number" name="experience" class="form-control" placeholder="5" min="0">
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-semibold">Description</label>
                        <textarea name="description" class="form-control" rows="3" placeholder="Brief bio..."></textarea>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-semibold">Photo <small class="text-muted">(390×480px)</small></label>
                        <input type="file" name="photo" accept="image/*" class="form-control">
                    </div>
                    <button type="submit" class="btn-cms-primary w-100">
                        <i class="bi bi-plus-circle me-1"></i> Add Mentor
                    </button>
                </form>
            </div>
        </div>
    </div>

    {{-- Mentors Table --}}
    <div class="col-lg-8">
        <div class="cms-card">
            <div class="cms-card-header">
                <h5 class="cms-card-title"><i class="bi bi-people me-2"></i>All Mentors</h5>
                <span class="badge bg-primary">{{ $mentors->count() }} total</span>
            </div>
            <div class="cms-card-body p-0">
                @if($mentors->isEmpty())
                    <div class="empty-state">
                        <i class="bi bi-people"></i>
                        <p>No mentors yet. Add one to get started.</p>
                    </div>
                @else
                <div class="table-responsive">
                    <table class="cms-table">
                        <thead>
                            <tr>
                                <th>Photo</th>
                                <th>Name</th>
                                <th>Course</th>
                                <th>Position</th>
                                <th>Exp.</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($mentors as $mentor)
                            <tr>
                                <td>
                                    @if($mentor->photo)
                                        <img src="{{ asset('storage/' . $mentor->photo) }}" alt="Photo"
                                             class="rounded" style="width:45px;height:55px;object-fit:cover;">
                                    @else
                                        <div class="rounded bg-primary d-flex align-items-center justify-content-center"
                                             style="width:45px;height:55px;color:#fff;font-weight:bold;font-size:18px;">
                                            {{ strtoupper(substr($mentor->name, 0, 1)) }}
                                        </div>
                                    @endif
                                </td>
                                <td>
                                    <div class="fw-semibold">{{ $mentor->name }}</div>
                                    @if($mentor->description)
                                        <small class="text-muted">{{ Str::limit($mentor->description, 40) }}</small>
                                    @endif
                                </td>
                                <td>
                                    <span class="badge bg-info text-dark">{{ $mentor->course->name ?? 'N/A' }}</span>
                                </td>
                                <td>{{ $mentor->position ?? '—' }}</td>
                                <td>
                                    @if($mentor->experience)
                                        <span class="badge bg-success">{{ $mentor->experience }} yrs</span>
                                    @else
                                        —
                                    @endif
                                </td>
                                <td>
                                    <div class="action-group">
                                        <button class="btn-cms-edit"
                                            onclick="openEditModal({{ $mentor->id }}, {{ json_encode($mentor) }})">
                                            <i class="bi bi-pencil"></i>
                                        </button>
                                        <form action="{{ route('mentor.destroy', $mentor->id) }}" method="POST"
                                              onsubmit="return confirm('Delete this mentor?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn-cms-delete">
                                                <i class="bi bi-trash"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                @endif
            </div>
        </div>
    </div>
</div>

{{-- Edit Modal --}}
<div class="modal fade" id="editModal" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><i class="bi bi-pencil-square me-2"></i>Edit Mentor</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <form id="editForm" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label class="form-label fw-semibold">Mentor Name</label>
                            <input type="text" name="name" id="edit_name" class="form-control" required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label fw-semibold">Course</label>
                            <select name="course_id" id="edit_course_id" class="form-select" required>
                                @foreach($courses as $course)
                                    <option value="{{ $course->id }}">{{ $course->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label fw-semibold">Position</label>
                            <input type="text" name="position" id="edit_position" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label fw-semibold">Experience (years)</label>
                            <input type="number" name="experience" id="edit_experience" class="form-control" min="0">
                        </div>
                        <div class="col-12">
                            <label class="form-label fw-semibold">Description</label>
                            <textarea name="description" id="edit_description" class="form-control" rows="3"></textarea>
                        </div>
                        <div class="col-12">
                            <label class="form-label fw-semibold">Photo <small class="text-muted">(leave blank to keep current)</small></label>
                            <input type="file" name="photo" accept="image/*" class="form-control">
                            <div id="edit_current_photo" class="mt-2"></div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn-cms-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn-cms-primary">
                        <i class="bi bi-check-circle me-1"></i> Save Changes
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
function openEditModal(id, data) {
    document.getElementById('editForm').action = '/admin/mentor/' + id;
    document.getElementById('edit_name').value = data.name || '';
    document.getElementById('edit_position').value = data.position || '';
    document.getElementById('edit_experience').value = data.experience || '';
    document.getElementById('edit_description').value = data.description || '';

    var courseSelect = document.getElementById('edit_course_id');
    for (var i = 0; i < courseSelect.options.length; i++) {
        if (courseSelect.options[i].value == data.course_id) {
            courseSelect.selectedIndex = i;
            break;
        }
    }

    var photoDiv = document.getElementById('edit_current_photo');
    if (data.photo) {
        photoDiv.innerHTML = '<img src="/storage/' + data.photo + '" class="rounded" style="width:45px;height:55px;object-fit:cover;" alt="Current">' +
                             '<small class="ms-2 text-muted">Current photo</small>';
    } else {
        photoDiv.innerHTML = '<small class="text-muted">No current photo</small>';
    }

    new bootstrap.Modal(document.getElementById('editModal')).show();
}
</script>

@endsection
