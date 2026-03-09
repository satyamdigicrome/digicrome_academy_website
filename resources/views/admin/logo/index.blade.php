@extends('admin_layout.app')

@section('page-title', 'Logos')

@section('content')

<div class="page-header">
    <div>
        <h1 class="page-title">Logos</h1>
        <p class="page-subtitle">Manage partner, certification, and company logos</p>
    </div>
</div>

<div class="row g-4">
    {{-- Add Form --}}
    <div class="col-lg-4">
        <div class="cms-card">
            <div class="cms-card-header">
                <h5 class="cms-card-title"><i class="bi bi-plus-circle me-2"></i>Add Logo</h5>
            </div>
            <div class="cms-card-body">
                <form action="{{ route('logos.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label fw-semibold">Name <span class="text-danger">*</span></label>
                        <input type="text" name="name" class="form-control" placeholder="Organisation name" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-semibold">Type <span class="text-danger">*</span></label>
                        <select name="type" id="add_type" class="form-select" required>
                            <option value="">— Select Type —</option>
                            <option value="association">Association</option>
                            <option value="certification_partner">Certification Partner</option>
                            <option value="awords">Awards</option>
                            <option value="companies">Companies</option>
                            <option value="tools">Tools</option>
                            <option value="gallery">Gallery</option>
                            <option value="certificate">Certificate</option>
                        </select>
                    </div>
                    <div class="mb-3" id="add_course_selector" style="display:none;">
                        <label class="form-label fw-semibold">Course</label>
                        <select name="course_id" id="add_course_id" class="form-select">
                            <option value="">— Select Course —</option>
                            @foreach($courses as $course)
                                <option value="{{ $course->id }}">{{ $course->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-semibold">Country <span class="text-danger">*</span></label>
                        <input type="text" name="country" class="form-control" placeholder="e.g. India" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-semibold">Logo Image <span class="text-danger">*</span></label>
                        <input type="file" name="image" accept="image/jpeg,image/png,image/webp,image/jpg,image/gif" class="form-control" required>
                    </div>
                    <button type="submit" class="btn-cms-primary w-100">
                        <i class="bi bi-plus-circle me-1"></i> Add Logo
                    </button>
                </form>
            </div>
        </div>
    </div>

    {{-- Logos Table --}}
    <div class="col-lg-8">
        <div class="cms-card">
            <div class="cms-card-header">
                <h5 class="cms-card-title"><i class="bi bi-image me-2"></i>All Logos</h5>
                <span class="badge bg-primary">{{ $logos->count() }} total</span>
            </div>
            <div class="cms-card-body p-0">
                @if($logos->isEmpty())
                    <div class="empty-state">
                        <i class="bi bi-image"></i>
                        <p>No logos yet. Add one to get started.</p>
                    </div>
                @else
                <div class="table-responsive">
                    <table class="cms-table">
                        <thead>
                            <tr>
                                <th>Logo</th>
                                <th>Name</th>
                                <th>Type</th>
                                <th>Country</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($logos as $logo)
                            <tr>
                                <td>
                                    <img src="{{ asset('storage/' . $logo->image) }}" alt="Logo"
                                         class="rounded" style="height:35px;max-width:80px;object-fit:contain;">
                                </td>
                                <td class="fw-semibold">{{ $logo->name }}</td>
                                <td>
                                    <span class="badge bg-secondary">{{ $logo->type }}</span>
                                </td>
                                <td>{{ $logo->country }}</td>
                                <td>
                                    <div class="action-group">
                                        <button class="btn-cms-edit"
                                            onclick="openEditModal({{ $logo->id }}, {{ json_encode($logo) }})">
                                            <i class="bi bi-pencil"></i>
                                        </button>
                                        <form action="{{ route('logos.destroy', $logo->id) }}" method="POST"
                                              onsubmit="return confirm('Delete this logo?')">
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
                <h5 class="modal-title"><i class="bi bi-pencil-square me-2"></i>Edit Logo</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <form id="editForm" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label class="form-label fw-semibold">Name</label>
                            <input type="text" name="name" id="edit_name" class="form-control" required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label fw-semibold">Country</label>
                            <input type="text" name="country" id="edit_country" class="form-control" required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label fw-semibold">Type</label>
                            <select name="type" id="edit_type" class="form-select" required>
                                <option value="association">Association</option>
                                <option value="certification_partner">Certification Partner</option>
                                <option value="awords">Awards</option>
                                <option value="companies">Companies</option>
                                <option value="tools">Tools</option>
                                <option value="gallery">Gallery</option>
                                <option value="certificate">Certificate</option>
                            </select>
                        </div>
                        <div class="col-md-6" id="edit_course_selector">
                            <label class="form-label fw-semibold">Course <small class="text-muted">(optional)</small></label>
                            <select name="course_id" id="edit_course_id" class="form-select">
                                <option value="">— None —</option>
                                @foreach($courses as $course)
                                    <option value="{{ $course->id }}">{{ $course->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-12">
                            <label class="form-label fw-semibold">Logo Image <small class="text-muted">(leave blank to keep current)</small></label>
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
// Show/hide course selector based on type for add form
document.addEventListener('DOMContentLoaded', function () {
    document.getElementById('add_type').addEventListener('change', function () {
        var show = this.value === 'tools' || this.value === 'certificate';
        var selector = document.getElementById('add_course_selector');
        selector.style.display = show ? 'block' : 'none';
        if (!show) document.getElementById('add_course_id').value = '';
    });
});

function openEditModal(id, data) {
    document.getElementById('editForm').action = '/admin/logos/' + id;
    document.getElementById('edit_name').value = data.name || '';
    document.getElementById('edit_country').value = data.country || '';

    var typeSelect = document.getElementById('edit_type');
    for (var i = 0; i < typeSelect.options.length; i++) {
        if (typeSelect.options[i].value === data.type) {
            typeSelect.selectedIndex = i;
            break;
        }
    }

    var courseSelect = document.getElementById('edit_course_id');
    for (var j = 0; j < courseSelect.options.length; j++) {
        if (courseSelect.options[j].value == data.course_id) {
            courseSelect.selectedIndex = j;
            break;
        }
    }

    var imgDiv = document.getElementById('edit_current_image');
    if (data.image) {
        imgDiv.innerHTML = '<img src="/storage/' + data.image + '" style="height:40px;max-width:100px;object-fit:contain;" alt="Current" class="rounded">' +
                           '<small class="ms-2 text-muted">Current logo</small>';
    } else {
        imgDiv.innerHTML = '<small class="text-muted">No current image</small>';
    }

    new bootstrap.Modal(document.getElementById('editModal')).show();
}
</script>

@endsection
