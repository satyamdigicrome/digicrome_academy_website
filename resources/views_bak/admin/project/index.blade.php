@extends('admin_layout.app')

@section('page-title', 'Projects')

@section('content')

<div class="page-header">
    <div>
        <h1 class="page-title">Projects</h1>
        <p class="page-subtitle">Manage course projects and assignments</p>
    </div>
</div>

<div class="row g-4">
    {{-- Add Form --}}
    <div class="col-lg-4">
        <div class="cms-card">
            <div class="cms-card-header">
                <h5 class="cms-card-title"><i class="bi bi-plus-circle me-2"></i>Add Project</h5>
            </div>
            <div class="cms-card-body">
                <form action="{{ route('project.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label fw-semibold">Heading <span class="text-danger">*</span></label>
                        <input type="text" name="heading" class="form-control" placeholder="Project title" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-semibold">Paragraph <span class="text-danger">*</span></label>
                        <textarea name="paragraph" class="form-control summernote-editor" rows="4" placeholder="Project description..." required></textarea>
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
                    <button type="submit" class="btn-cms-primary w-100">
                        <i class="bi bi-plus-circle me-1"></i> Add Project
                    </button>
                </form>
            </div>
        </div>
    </div>

    {{-- Projects Table --}}
    <div class="col-lg-8">
        <div class="cms-card">
            <div class="cms-card-header">
                <h5 class="cms-card-title"><i class="bi bi-folder me-2"></i>All Projects</h5>
                <span class="badge bg-primary">{{ $project->count() }} total</span>
            </div>
            <div class="cms-card-body p-0">
                @if($project->isEmpty())
                    <div class="empty-state">
                        <i class="bi bi-folder"></i>
                        <p>No projects yet. Add one to get started.</p>
                    </div>
                @else
                <div class="table-responsive">
                    <table class="cms-table">
                        <thead>
                            <tr>
                                <th>Heading</th>
                                <th>Course</th>
                                <th>Preview</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($project as $proj)
                            <tr>
                                <td class="fw-semibold">{{ Str::limit($proj->heading, 40) }}</td>
                                <td>
                                    <span class="badge bg-info text-dark">{{ $proj->course->name ?? 'N/A' }}</span>
                                </td>
                                <td>
                                    <small class="text-muted">{{ Str::limit(strip_tags($proj->paragraph), 60) }}</small>
                                </td>
                                <td>
                                    <div class="action-group">
                                        <button class="btn-cms-edit"
                                            onclick="openEditModal({{ $proj->id }}, {{ json_encode($proj) }})">
                                            <i class="bi bi-pencil"></i>
                                        </button>
                                        <form action="{{ route('project.destroy', $proj) }}" method="POST"
                                              onsubmit="return confirm('Delete this project?')">
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
                <h5 class="modal-title"><i class="bi bi-pencil-square me-2"></i>Edit Project</h5>
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
                        <label class="form-label fw-semibold">Paragraph</label>
                        <textarea name="paragraph" id="edit_paragraph" class="form-control summernote-editor" rows="5" required></textarea>
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
    document.getElementById('editForm').action = '/admin/project/' + id;
    document.getElementById('edit_heading').value = data.heading || '';
    // document.getElementById('edit_paragraph').value = data.paragraph || '';

    var courseSelect = document.getElementById('edit_course_id');
    for (var i = 0; i < courseSelect.options.length; i++) {
        if (courseSelect.options[i].value == data.course_id) {
            courseSelect.selectedIndex = i;
            break;
        }
    }
    var $editor = $('#edit_paragraph');
    if ($editor.hasClass('note-editor') || $editor.next('.note-editor').length) {
        $editor.summernote('code', data.paragraph || '');
    } else {
        $editor.val(data.paragraph || '');
    }
    new bootstrap.Modal(document.getElementById('editModal')).show();
}
</script>

@endsection
