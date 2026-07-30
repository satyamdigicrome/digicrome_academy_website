@extends('admin_layout.app')

@section('page-title', 'What Sets Us Apart')

@section('content')

    <div class="page-header">
        <div>
            <h1 class="page-title">Manage Aparts</h1>
            <p class="page-subtitle">Manage differentiating factors for each course</p>
        </div>
    </div>

    <div class="row g-4">
        {{-- Add Form --}}
        <div class="col-lg-4">
            <div class="cms-card">
                <div class="cms-card-header">
                    <h5 class="cms-card-title"><i class="bi bi-plus-circle me-2"></i>Add Apart</h5>
                </div>
                <div class="cms-card-body">
                    <form action="{{ route('aparts.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label fw-semibold">Heading <span class="text-danger">*</span></label>
                            <input type="text" name="heading" class="form-control" placeholder="Main heading" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-semibold">Tagline <span class="text-danger">*</span></label>
                            <input type="text" name="tagline" class="form-control" placeholder="Short tagline" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-semibold">Paragraph <span class="text-danger">*</span></label>
                            <textarea name="paragraph" class="form-control summernote-editor" rows="4" placeholder="Description..." required></textarea>
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-semibold">Select Courses <span class="text-danger">*</span></label>
                            <select name="course_id[]" class="form-select" multiple required style="min-height:100px;">
                                @foreach ($courses as $course)
                                    <option value="{{ $course->id }}">{{ $course->name }}</option>
                                @endforeach
                            </select>
                            <small class="text-muted">Hold Ctrl/Cmd to select multiple</small>
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-semibold">Image <span class="text-danger">*</span></label>
                            <input type="file" name="image" accept="image/*" class="form-control" required>
                        </div>
                        <button type="submit" class="btn-cms-primary w-100">
                            <i class="bi bi-plus-circle me-1"></i> Add Apart
                        </button>
                    </form>
                </div>
            </div>
        </div>

        {{-- Aparts Table --}}
        <div class="col-lg-8">
            <div class="cms-card">
                <div class="cms-card-header">
                    <h5 class="cms-card-title"><i class="bi bi-stars me-2"></i>All Aparts</h5>
                    <span class="badge bg-primary">{{ $aparts->count() }} total</span>
                </div>
                <div class="cms-card-body p-0">
                    @if ($aparts->isEmpty())
                        <div class="empty-state">
                            <i class="bi bi-stars"></i>
                            <p>No apart entries yet. Add one to get started.</p>
                        </div>
                    @else
                        <div class="table-responsive">
                            <table class="cms-table">
                                <thead>
                                    <tr>
                                        <th>Image</th>
                                        <th>Heading</th>
                                        <th>Tagline</th>
                                        <th>Course</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($aparts as $apart)
                                        <tr>
                                            <td>
                                                <img src="{{ asset('storage/' . $apart->image) }}" alt="Image"
                                                    class="rounded" style="width:50px;height:40px;object-fit:cover;">
                                            </td>
                                            <td>
                                                <div class="fw-semibold">{{ $apart->heading }}</div>
                                                <small class="text-muted">{{ Str::limit(strip_tags($apart->paragraph), 40) }}</small>
                                            </td>
                                            <td>{{ Str::limit($apart->tagline, 30) }}</td>
                                            <td>
                                                <span
                                                    class="badge bg-info text-dark">{{ $apart->course->name ?? 'N/A' }}</span>
                                            </td>
                                            <td>
                                                <div class="action-group">
                                                    <button class="btn-cms-edit"
                                                        onclick="openEditModal({{ $apart->id }}, {{ json_encode($apart) }})">
                                                        <i class="bi bi-pencil"></i>
                                                    </button>
                                                    <form action="{{ route('aparts.destroy', $apart) }}" method="POST"
                                                        onsubmit="return confirm('Delete this entry?')">
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
                    <h5 class="modal-title"><i class="bi bi-pencil-square me-2"></i>Edit Apart</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <form id="editForm" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label class="form-label fw-semibold">Heading</label>
                                <input type="text" name="heading" id="edit_heading" class="form-control" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label fw-semibold">Tagline</label>
                                <input type="text" name="tagline" id="edit_tagline" class="form-control" required>
                            </div>
                            <div class="col-12">
                                <label class="form-label fw-semibold">Paragraph</label>
                                <textarea name="paragraph" id="edit_paragraph" class="form-control summernote-editor" rows="4" required></textarea>
                            </div>
                            <div class="col-12">
                                <label class="form-label fw-semibold">Course</label>
                                <select name="course_id" id="edit_course_id" class="form-select" required>
                                    @foreach ($courses as $course)
                                        <option value="{{ $course->id }}">{{ $course->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-12">
                                <label class="form-label fw-semibold">Image <small class="text-muted">(leave blank to keep
                                        current)</small></label>
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
            document.getElementById('editForm').action = '/admin/aparts/' + id;
            document.getElementById('edit_heading').value = data.heading || '';
            document.getElementById('edit_tagline').value = data.tagline || '';
            // document.getElementById('edit_paragraph').value = data.paragraph || '';

            var courseSelect = document.getElementById('edit_course_id');
            for (var i = 0; i < courseSelect.options.length; i++) {
                if (courseSelect.options[i].value == data.course_id) {
                    courseSelect.selectedIndex = i;
                    break;
                }
            }

            var imgDiv = document.getElementById('edit_current_image');
            if (data.image) {
                imgDiv.innerHTML = '<img src="/storage/' + data.image +
                    '" class="rounded" style="width:60px;height:45px;object-fit:cover;" alt="Current">' +
                    '<small class="ms-2 text-muted">Current image</small>';
            } else {
                imgDiv.innerHTML = '<small class="text-muted">No current image</small>';
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
