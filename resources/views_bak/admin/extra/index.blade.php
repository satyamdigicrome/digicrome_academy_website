@extends('admin_layout.app')

@section('page-title', 'Extra Benefits')

@section('content')

<div class="page-header">
    <div>
        <h1 class="page-title">Extra Benefits</h1>
        <p class="page-subtitle">Manage internship and soft skills content for courses</p>
    </div>
</div>

<div class="row g-4">
    {{-- Add Forms --}}
    <div class="col-lg-4">
        {{-- Part 1: Internship --}}
        <div class="cms-card mb-4">
            <div class="cms-card-header">
                <h5 class="cms-card-title"><i class="bi bi-building me-2"></i>Add Internship</h5>
            </div>
            <div class="cms-card-body">
                <form action="{{ route('extra.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label fw-semibold">Heading <span class="text-danger">*</span></label>
                        <input type="text" name="heading" class="form-control" placeholder="Internship benefit" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-semibold">Select Courses <span class="text-danger">*</span></label>
                        <select name="course_id[]" class="form-select" multiple required style="min-height:80px;">
                            @foreach($courses as $course)
                                <option value="{{ $course->id }}">{{ $course->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <input type="hidden" name="part" value="1">
                    <button type="submit" class="btn-cms-primary w-100">
                        <i class="bi bi-plus-circle me-1"></i> Add Internship
                    </button>
                </form>
            </div>
        </div>

        {{-- Part 2: Softskill --}}
        <div class="cms-card">
            <div class="cms-card-header">
                <h5 class="cms-card-title"><i class="bi bi-person-gear me-2"></i>Add Soft Skill</h5>
            </div>
            <div class="cms-card-body">
                <form action="{{ route('extra.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label fw-semibold">Heading <span class="text-danger">*</span></label>
                        <input type="text" name="heading" class="form-control" placeholder="Soft skill benefit" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-semibold">Select Courses <span class="text-danger">*</span></label>
                        <select name="course_id[]" class="form-select" multiple required style="min-height:80px;">
                            @foreach($courses as $course)
                                <option value="{{ $course->id }}">{{ $course->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <input type="hidden" name="part" value="2">
                    <button type="submit" class="btn-cms-primary w-100">
                        <i class="bi bi-plus-circle me-1"></i> Add Soft Skill
                    </button>
                </form>
            </div>
        </div>
    </div>

    {{-- Extras Table --}}
    <div class="col-lg-8">
        <div class="cms-card">
            <div class="cms-card-header">
                <h5 class="cms-card-title"><i class="bi bi-stars me-2"></i>All Extras</h5>
                <div class="d-flex align-items-center gap-2">
                    <form action="{{ route('extra.filter') }}" method="GET" class="d-flex gap-2">
                        <select name="course_id" class="form-select form-select-sm" style="width:140px;" onchange="this.form.submit()">
                            <option value="">All Courses</option>
                            @foreach($courses as $course)
                                <option value="{{ $course->id }}" {{ request('course_id') == $course->id ? 'selected' : '' }}>
                                    {{ $course->name }}
                                </option>
                            @endforeach
                        </select>
                        <select name="part" class="form-select form-select-sm" style="width:130px;" onchange="this.form.submit()">
                            <option value="">All Types</option>
                            <option value="1" {{ request('part') == '1' ? 'selected' : '' }}>Internship</option>
                            <option value="2" {{ request('part') == '2' ? 'selected' : '' }}>Soft Skill</option>
                        </select>
                    </form>
                    <span class="badge bg-primary">{{ $extras->count() }} total</span>
                </div>
            </div>
            <div class="cms-card-body p-0">
                @if($extras->isEmpty())
                    <div class="empty-state">
                        <i class="bi bi-stars"></i>
                        <p>No extras yet. Add one to get started.</p>
                    </div>
                @else
                <div class="table-responsive">
                    <table class="cms-table">
                        <thead>
                            <tr>
                                <th>Heading</th>
                                <th>Course</th>
                                <th>Type</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($extras as $extra)
                            <tr>
                                <td class="fw-semibold">{{ $extra->heading }}</td>
                                <td>
                                    <span class="badge bg-info text-dark">{{ $extra->course->name ?? 'N/A' }}</span>
                                </td>
                                <td>
                                    @if($extra->part == 1)
                                        <span class="badge bg-primary">Internship</span>
                                    @elseif($extra->part == 2)
                                        <span class="badge bg-success">Soft Skill</span>
                                    @else
                                        <span class="badge bg-secondary">Part {{ $extra->part }}</span>
                                    @endif
                                </td>
                                <td>
                                    <div class="action-group">
                                        <button class="btn-cms-edit"
                                            onclick="openEditModal({{ $extra->id }}, {{ json_encode($extra) }})">
                                            <i class="bi bi-pencil"></i>
                                        </button>
                                        <form action="{{ route('extra.destroys', $extra) }}" method="POST"
                                              onsubmit="return confirm('Delete this extra?')">
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
                <h5 class="modal-title"><i class="bi bi-pencil-square me-2"></i>Edit Extra</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <form id="editForm" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label fw-semibold">Heading</label>
                        <input type="text" name="heading" id="edit_heading" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-semibold">Type</label>
                        <select name="part" id="edit_part" class="form-select" required>
                            <option value="1">Internship</option>
                            <option value="2">Soft Skill</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-semibold">Course</label>
                        <select name="course_id" id="edit_course_id" class="form-select" required>
                            @foreach($courses as $course)
                                <option value="{{ $course->id }}">{{ $course->name }}</option>
                            @endforeach
                        </select>
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
    document.getElementById('editForm').action = '/admin/extras/' + id;
    document.getElementById('edit_heading').value = data.heading || '';

    var partSelect = document.getElementById('edit_part');
    for (var i = 0; i < partSelect.options.length; i++) {
        if (partSelect.options[i].value == Math.round(data.part)) {
            partSelect.selectedIndex = i;
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

    new bootstrap.Modal(document.getElementById('editModal')).show();
}
</script>

@endsection
