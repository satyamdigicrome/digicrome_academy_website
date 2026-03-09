@extends('admin_layout.app')

@section('page-title', 'Key Points')

@section('content')

<div class="page-header">
    <div>
        <h1 class="page-title">Key Points</h1>
        <p class="page-subtitle">Manage course key highlights and features</p>
    </div>
</div>

<div class="row g-4">
    {{-- Add Form --}}
    <div class="col-lg-4">
        <div class="cms-card">
            <div class="cms-card-header">
                <h5 class="cms-card-title"><i class="bi bi-plus-circle me-2"></i>Add Key Point</h5>
            </div>
            <div class="cms-card-body">
                <form action="{{ route('keypoints.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label fw-semibold">Key Point Name <span class="text-danger">*</span></label>
                        <input type="text" name="name" class="form-control" placeholder="e.g. Live Projects" required>
                    </div>
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
                        <label class="form-label fw-semibold">Icon/Image <span class="text-danger">*</span></label>
                        <input type="file" name="image" accept="image/*" class="form-control" required>
                    </div>
                    <button type="submit" class="btn-cms-primary w-100">
                        <i class="bi bi-plus-circle me-1"></i> Add Key Point
                    </button>
                </form>
            </div>
        </div>
    </div>

    {{-- Key Points Table --}}
    <div class="col-lg-8">
        <div class="cms-card">
            <div class="cms-card-header">
                <h5 class="cms-card-title"><i class="bi bi-check2-square me-2"></i>All Key Points</h5>
                <span class="badge bg-primary">{{ $keypoints->count() }} total</span>
            </div>
            <div class="cms-card-body p-0">
                @if($keypoints->isEmpty())
                    <div class="empty-state">
                        <i class="bi bi-check2-square"></i>
                        <p>No key points yet. Add one to get started.</p>
                    </div>
                @else
                <div class="table-responsive">
                    <table class="cms-table">
                        <thead>
                            <tr>
                                <th>Icon</th>
                                <th>Name</th>
                                <th>Course</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($keypoints as $keypoint)
                            <tr>
                                <td>
                                    <img src="{{ asset('storage/' . $keypoint->image) }}" alt="Icon"
                                         class="rounded" style="width:40px;height:40px;object-fit:cover;">
                                </td>
                                <td class="fw-semibold">{{ $keypoint->name }}</td>
                                <td>
                                    <span class="badge bg-info text-dark">{{ $keypoint->course->name ?? 'N/A' }}</span>
                                </td>
                                <td>
                                    <div class="action-group">
                                        <button class="btn-cms-edit"
                                            onclick="openEditModal({{ $keypoint->id }}, {{ json_encode($keypoint) }})">
                                            <i class="bi bi-pencil"></i>
                                        </button>
                                        <form action="{{ route('keypoints.destroy', $keypoint) }}" method="POST"
                                              onsubmit="return confirm('Delete this key point?')">
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
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><i class="bi bi-pencil-square me-2"></i>Edit Key Point</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <form id="editForm" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label fw-semibold">Key Point Name</label>
                        <input type="text" name="name" id="edit_name" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-semibold">Course</label>
                        <select name="course_id" id="edit_course_id" class="form-select" required>
                            @foreach($courses as $course)
                                <option value="{{ $course->id }}">{{ $course->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-semibold">Icon/Image <small class="text-muted">(leave blank to keep current)</small></label>
                        <input type="file" name="image" accept="image/*" class="form-control">
                        <div id="edit_current_image" class="mt-2"></div>
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
    document.getElementById('editForm').action = '/admin/keypoints/' + id;
    document.getElementById('edit_name').value = data.name || '';

    var courseSelect = document.getElementById('edit_course_id');
    for (var i = 0; i < courseSelect.options.length; i++) {
        if (courseSelect.options[i].value == data.course_id) {
            courseSelect.selectedIndex = i;
            break;
        }
    }

    var imgDiv = document.getElementById('edit_current_image');
    if (data.image) {
        imgDiv.innerHTML = '<img src="/storage/' + data.image + '" class="rounded" style="width:40px;height:40px;object-fit:cover;" alt="Current">' +
                           '<small class="ms-2 text-muted">Current icon</small>';
    } else {
        imgDiv.innerHTML = '<small class="text-muted">No current image</small>';
    }

    new bootstrap.Modal(document.getElementById('editModal')).show();
}
</script>

@endsection
