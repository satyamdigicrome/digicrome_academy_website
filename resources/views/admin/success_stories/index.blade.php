@extends('admin_layout.app')

@section('page-title', 'Success Stories')

@section('content')

<div class="page-header">
    <div>
        <h1 class="page-title">Success Stories</h1>
        <p class="page-subtitle">Showcase student placement achievements</p>
    </div>
</div>

<div class="row g-4">
    {{-- Add Form --}}
    <div class="col-lg-4">
        <div class="cms-card">
            <div class="cms-card-header">
                <h5 class="cms-card-title"><i class="bi bi-plus-circle me-2"></i>Add Success Story</h5>
            </div>
            <div class="cms-card-body">
                <form action="{{ route('success.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label fw-semibold">Student Name <span class="text-danger">*</span></label>
                        <input type="text" name="studentname" class="form-control" placeholder="Full name" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-semibold">Position <span class="text-danger">*</span></label>
                        <input type="text" name="position" class="form-control" placeholder="e.g. Software Developer" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-semibold">Company Name <span class="text-danger">*</span></label>
                        <input type="text" name="companyname" class="form-control" placeholder="Employer company" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-semibold">Story <span class="text-danger">*</span></label>
                        <textarea name="stoire" class="form-control" rows="4" placeholder="Student's success story..." required></textarea>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-semibold">Photo <span class="text-danger">*</span></label>
                        <input type="file" name="image" accept="image/*" class="form-control" required>
                    </div>
                    <button type="submit" class="btn-cms-primary w-100">
                        <i class="bi bi-plus-circle me-1"></i> Add Story
                    </button>
                </form>
            </div>
        </div>
    </div>

    {{-- Stories Table --}}
    <div class="col-lg-8">
        <div class="cms-card">
            <div class="cms-card-header">
                <h5 class="cms-card-title"><i class="bi bi-trophy me-2"></i>All Success Stories</h5>
                <span class="badge bg-success">{{ $stories->count() }} total</span>
            </div>
            <div class="cms-card-body p-0">
                @if($stories->isEmpty())
                    <div class="empty-state">
                        <i class="bi bi-trophy"></i>
                        <p>No success stories yet. Add one to get started.</p>
                    </div>
                @else
                <div class="table-responsive">
                    <table class="cms-table">
                        <thead>
                            <tr>
                                <th>Photo</th>
                                <th>Name</th>
                                <th>Position</th>
                                <th>Company</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($stories as $story)
                            <tr>
                                <td>
                                    @if($story->image)
                                        <img src="{{ asset('storage/' . $story->image) }}" alt="Photo"
                                             class="rounded-circle" style="width:40px;height:40px;object-fit:cover;">
                                    @else
                                        <div class="rounded-circle bg-success d-flex align-items-center justify-content-center"
                                             style="width:40px;height:40px;color:#fff;font-weight:bold;">
                                            {{ strtoupper(substr($story->studentname, 0, 1)) }}
                                        </div>
                                    @endif
                                </td>
                                <td class="fw-semibold">{{ $story->studentname }}</td>
                                <td>{{ $story->position }}</td>
                                <td>
                                    <span class="badge bg-light text-dark border">{{ $story->companyname }}</span>
                                </td>
                                <td>
                                    <div class="action-group">
                                        <button class="btn-cms-edit"
                                            onclick="openEditModal({{ $story->id }}, {{ json_encode($story) }})">
                                            <i class="bi bi-pencil"></i>
                                        </button>
                                        <form action="{{ route('success.destroy', $story->id) }}" method="POST"
                                              onsubmit="return confirm('Delete this story?')">
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
                <h5 class="modal-title"><i class="bi bi-pencil-square me-2"></i>Edit Success Story</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <form id="editForm" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label class="form-label fw-semibold">Student Name</label>
                            <input type="text" name="studentname" id="edit_studentname" class="form-control" required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label fw-semibold">Position</label>
                            <input type="text" name="position" id="edit_position" class="form-control" required>
                        </div>
                        <div class="col-12">
                            <label class="form-label fw-semibold">Company Name</label>
                            <input type="text" name="companyname" id="edit_companyname" class="form-control" required>
                        </div>
                        <div class="col-12">
                            <label class="form-label fw-semibold">Story</label>
                            <textarea name="stoire" id="edit_stoire" class="form-control" rows="4" required></textarea>
                        </div>
                        <div class="col-12">
                            <label class="form-label fw-semibold">Photo <small class="text-muted">(leave blank to keep current)</small></label>
                            <input type="file" name="image" accept="image/*" class="form-control">
                            <div id="edit_current_image" class="mt-2"></div>
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
    document.getElementById('editForm').action = '/admin/success-stories/' + id + '/update';
    document.getElementById('edit_studentname').value = data.studentname || '';
    document.getElementById('edit_position').value = data.position || '';
    document.getElementById('edit_companyname').value = data.companyname || '';
    document.getElementById('edit_stoire').value = data.stoire || '';

    var imgDiv = document.getElementById('edit_current_image');
    if (data.image) {
        imgDiv.innerHTML = '<img src="/storage/' + data.image + '" class="rounded-circle" style="width:60px;height:60px;object-fit:cover;" alt="Current">' +
                           '<small class="ms-2 text-muted">Current photo</small>';
    } else {
        imgDiv.innerHTML = '<small class="text-muted">No current photo</small>';
    }

    new bootstrap.Modal(document.getElementById('editModal')).show();
}
</script>

@endsection
