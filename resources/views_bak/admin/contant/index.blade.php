@extends('admin_layout.app')

@section('page-title', 'Content Manager')

@section('content')

<div class="page-header">
    <div>
        <h1 class="page-title">Content Manager</h1>
        <p class="page-subtitle">Manage Terms, Policy, and Disclaimer pages</p>
    </div>
</div>

<div class="row g-4">
    {{-- Add Form --}}
    <div class="col-lg-4">
        <div class="cms-card">
            <div class="cms-card-header">
                <h5 class="cms-card-title"><i class="bi bi-plus-circle me-2"></i>Add Content</h5>
            </div>
            <div class="cms-card-body">
                <form action="{{ route('admin.extra.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label fw-semibold">Content Type <span class="text-danger">*</span></label>
                        <select name="content_type" class="form-select" required>
                            <option value="">— Select Type —</option>
                            <option value="Terms">Terms & Conditions</option>
                            <option value="Polocy">Privacy Policy</option>
                            <option value="Disclaimer">Disclaimer</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-semibold">Content <span class="text-danger">*</span></label>
                        <textarea name="content" id="content_editor" class="form-control summernote-editor" rows="8" required></textarea>
                    </div>
                    <button type="submit" class="btn-cms-primary w-100" style="width:100%;justify-content:center;">
                        <i class="bi bi-plus-circle me-1"></i> Save Content
                    </button>
                </form>
            </div>
        </div>
    </div>

    {{-- Content Table --}}
    <div class="col-lg-8">
        <div class="cms-card">
            <div class="cms-card-header">
                <h5 class="cms-card-title"><i class="bi bi-file-text me-2"></i>All Content</h5>
                <span class="badge bg-primary">{{ $contents->count() }} total</span>
            </div>
            <div class="cms-card-body p-0">
                @if($contents->isEmpty())
                    <div class="empty-state">
                        <i class="bi bi-file-text"></i>
                        <p>No content yet. Add one to get started.</p>
                    </div>
                @else
                <div class="table-responsive">
                    <table class="cms-table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Content Type</th>
                                <th>Preview</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($contents as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>
                                    @php
                                        $typeColors = ['Terms' => 'primary', 'Polocy' => 'success', 'Disclaimer' => 'warning'];
                                        $color = $typeColors[$item->content_type] ?? 'secondary';
                                    @endphp
                                    <span class="badge bg-{{ $color }}">{{ $item->content_type }}</span>
                                </td>
                                <td>
                                    <small class="text-muted">{{ Str::limit(strip_tags($item->content), 60) }}</small>
                                </td>
                                <td>
                                    <div class="action-group">
                                        <button class="btn-cms-edit"
                                            onclick="openEditModal({{ $item->id }}, {{ json_encode($item) }})">
                                            <i class="bi bi-pencil"></i>
                                        </button>
                                        <form action="{{ route('admin.extra.destroy', $item->id) }}" method="POST"
                                              onsubmit="return confirm('Delete this content?')">
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
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><i class="bi bi-pencil-square me-2"></i>Edit Content</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <form id="editForm" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label fw-semibold">Content Type</label>
                        <select name="content_type" id="edit_content_type" class="form-select" required>
                            <option value="Terms">Terms & Conditions</option>
                            <option value="Polocy">Privacy Policy</option>
                            <option value="Disclaimer">Disclaimer</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-semibold">Content</label>
                        <textarea name="content" id="edit_content" class="form-control summernote-editor" rows="12" required></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn-cms-delete" data-bs-dismiss="modal">Cancel</button>
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
    document.getElementById('editForm').action = '/admin/contant/' + id;

    var typeSelect = document.getElementById('edit_content_type');
    for (var i = 0; i < typeSelect.options.length; i++) {
        if (typeSelect.options[i].value === data.content_type) {
            typeSelect.selectedIndex = i;
            break;
        }
    }

    // Set content in Summernote editor
    var $editor = $('#edit_content');
    if ($editor.hasClass('note-editor') || $editor.next('.note-editor').length) {
        $editor.summernote('code', data.content || '');
    } else {
        $editor.val(data.content || '');
    }

    new bootstrap.Modal(document.getElementById('editModal')).show();
}
</script>

@endsection
