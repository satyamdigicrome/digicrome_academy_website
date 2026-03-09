@extends('admin_layout.app')

@section('page-title', 'Placements')

@section('content')

<div class="page-header">
    <div>
        <h1 class="page-title">Placements</h1>
        <p class="page-subtitle">Manage student placement records</p>
    </div>
</div>

<div class="row g-4">
    {{-- Add Form --}}
    <div class="col-lg-4">
        <div class="cms-card">
            <div class="cms-card-header">
                <h5 class="cms-card-title"><i class="bi bi-plus-circle me-2"></i>Add Placement</h5>
            </div>
            <div class="cms-card-body">
                <form action="{{ route('placement.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label fw-semibold">Name <span class="text-danger">*</span></label>
                        <input type="text" name="name" class="form-control" placeholder="Student name" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-semibold">Position <span class="text-danger">*</span></label>
                        <input type="text" name="position" class="form-control" placeholder="e.g. Data Analyst" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-semibold">Package (LPA) <span class="text-danger">*</span></label>
                        <input type="number" name="package" class="form-control" placeholder="e.g. 8.5" step="0.01" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-semibold">Photo <span class="text-danger">*</span></label>
                        <input type="file" name="image" accept="image/*" class="form-control" required>
                    </div>
                    <button type="submit" class="btn-cms-primary w-100">
                        <i class="bi bi-plus-circle me-1"></i> Add Placement
                    </button>
                </form>
            </div>
        </div>
    </div>

    {{-- Placements Table --}}
    <div class="col-lg-8">
        <div class="cms-card">
            <div class="cms-card-header">
                <h5 class="cms-card-title"><i class="bi bi-person-check me-2"></i>All Placements</h5>
                <span class="badge bg-success">{{ $placements->count() }} placed</span>
            </div>
            <div class="cms-card-body p-0">
                @if($placements->isEmpty())
                    <div class="empty-state">
                        <i class="bi bi-person-check"></i>
                        <p>No placements yet. Add one to get started.</p>
                    </div>
                @else
                <div class="table-responsive">
                    <table class="cms-table">
                        <thead>
                            <tr>
                                <th>Photo</th>
                                <th>Name</th>
                                <th>Position</th>
                                <th>Package</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($placements as $placement)
                            <tr>
                                <td>
                                    @if($placement->image)
                                        <img src="{{ asset('storage/'.$placement->image) }}" alt="Photo"
                                             class="rounded-circle" style="width:40px;height:40px;object-fit:cover;">
                                    @else
                                        <div class="rounded-circle bg-success d-flex align-items-center justify-content-center"
                                             style="width:40px;height:40px;color:#fff;font-weight:bold;">
                                            {{ strtoupper(substr($placement->name, 0, 1)) }}
                                        </div>
                                    @endif
                                </td>
                                <td class="fw-semibold">{{ $placement->name }}</td>
                                <td>{{ $placement->position }}</td>
                                <td>
                                    <span class="badge bg-success">{{ $placement->package }} LPA</span>
                                </td>
                                <td>
                                    <div class="action-group">
                                        <button class="btn-cms-edit"
                                            onclick="openEditModal({{ $placement->id }}, {{ json_encode($placement) }})">
                                            <i class="bi bi-pencil"></i>
                                        </button>
                                        <form action="{{ route('placement.destroy', $placement->id) }}" method="POST"
                                              onsubmit="return confirm('Delete this placement?')">
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
                <h5 class="modal-title"><i class="bi bi-pencil-square me-2"></i>Edit Placement</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <form id="editForm" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label fw-semibold">Name</label>
                        <input type="text" name="name" id="edit_name" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-semibold">Position</label>
                        <input type="text" name="position" id="edit_position" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-semibold">Package (LPA)</label>
                        <input type="number" name="package" id="edit_package" class="form-control" step="0.01" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-semibold">Photo <small class="text-muted">(leave blank to keep current)</small></label>
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
    let url = "{{ route('admin.placement.update', ':id') }}";
    url = url.replace(':id', id);
    document.getElementById('editForm').action = url;
    document.getElementById('edit_name').value = data.name || '';
    document.getElementById('edit_position').value = data.position || '';
    document.getElementById('edit_package').value = data.package || '';

    var imgDiv = document.getElementById('edit_current_image');
    if (data.image) {
        imgDiv.innerHTML = '<img src="/storage/' + data.image + '" class="rounded-circle" style="width:40px;height:40px;object-fit:cover;" alt="Current">' +
                           '<small class="ms-2 text-muted">Current photo</small>';
    } else {
        imgDiv.innerHTML = '<small class="text-muted">No current photo</small>';
    }

    new bootstrap.Modal(document.getElementById('editModal')).show();
}
</script>

@endsection
