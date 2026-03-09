@extends('admin_layout.app')

@section('page-title', 'Meta Tags')

@section('content')

<div class="page-header">
    <div>
        <h1 class="page-title">Meta Tags</h1>
        <p class="page-subtitle">Manage SEO meta tags for each page</p>
    </div>
</div>

<div class="row g-4">
    {{-- Add Form --}}
    <div class="col-lg-4">
        <div class="cms-card">
            <div class="cms-card-header">
                <h5 class="cms-card-title"><i class="bi bi-plus-circle me-2"></i>Add Meta Tag</h5>
            </div>
            <div class="cms-card-body">
                <form action="{{ route('meta.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label fw-semibold">Page <span class="text-danger">*</span></label>
                        <select name="page_name" class="form-select" required>
                            <option value="">— Select Page —</option>
                            @foreach($pages as $page)
                                <option value="{{ $page }}">{{ $page }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-semibold">Meta Title</label>
                        <input type="text" name="title" class="form-control" placeholder="Page title for SEO">
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-semibold">Meta Keywords</label>
                        <input type="text" name="keywords" class="form-control" placeholder="keyword1, keyword2, ...">
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-semibold">Meta Description</label>
                        <textarea name="description" class="form-control" rows="3" placeholder="Brief page description..."></textarea>
                    </div>
                    <button type="submit" class="btn-cms-primary w-100">
                        <i class="bi bi-plus-circle me-1"></i> Save Meta Tag
                    </button>
                </form>
            </div>
        </div>
    </div>

    {{-- Meta Tags Table --}}
    <div class="col-lg-8">
        <div class="cms-card">
            <div class="cms-card-header">
                <h5 class="cms-card-title"><i class="bi bi-tags me-2"></i>All Meta Tags</h5>
                <span class="badge bg-primary">{{ $metaTags->count() }} total</span>
            </div>
            <div class="cms-card-body p-0">
                @if($metaTags->isEmpty())
                    <div class="empty-state">
                        <i class="bi bi-tags"></i>
                        <p>No meta tags yet. Add one to get started.</p>
                    </div>
                @else
                <div class="table-responsive">
                    <table class="cms-table">
                        <thead>
                            <tr>
                                <th>Page</th>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($metaTags as $meta)
                            <tr>
                                <td>
                                    <span class="badge bg-secondary">{{ $meta->page_name }}</span>
                                </td>
                                <td>{{ Str::limit($meta->title, 40) ?? '—' }}</td>
                                <td>
                                    <small class="text-muted">{{ Str::limit($meta->description, 60) ?? '—' }}</small>
                                </td>
                                <td>
                                    <div class="action-group">
                                        <button class="btn-cms-edit"
                                            onclick="openEditModal({{ $meta->id }}, {{ json_encode($meta) }})">
                                            <i class="bi bi-pencil"></i>
                                        </button>
                                        <form action="{{ route('meta.delete', $meta->id) }}" method="POST"
                                              onsubmit="return confirm('Delete this meta tag?')">
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
                <h5 class="modal-title"><i class="bi bi-pencil-square me-2"></i>Edit Meta Tag</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <form id="editForm" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="row g-3">
                        <div class="col-12">
                            <label class="form-label fw-semibold">Page</label>
                            <select name="page_name" id="edit_page_name" class="form-select" required>
                                <option value="">— Select Page —</option>
                                @foreach($pages as $page)
                                    <option value="{{ $page }}">{{ $page }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-12">
                            <label class="form-label fw-semibold">Meta Title</label>
                            <input type="text" name="title" id="edit_title" class="form-control">
                        </div>
                        <div class="col-12">
                            <label class="form-label fw-semibold">Meta Keywords</label>
                            <input type="text" name="keywords" id="edit_keywords" class="form-control">
                        </div>
                        <div class="col-12">
                            <label class="form-label fw-semibold">Meta Description</label>
                            <textarea name="description" id="edit_description" class="form-control" rows="3"></textarea>
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
    document.getElementById('editForm').action = '/admin/meta/' + id;
    document.getElementById('edit_title').value = data.title || '';
    document.getElementById('edit_keywords').value = data.keywords || '';
    document.getElementById('edit_description').value = data.description || '';

    var pageSelect = document.getElementById('edit_page_name');
    for (var i = 0; i < pageSelect.options.length; i++) {
        if (pageSelect.options[i].value === data.page_name) {
            pageSelect.selectedIndex = i;
            break;
        }
    }

    new bootstrap.Modal(document.getElementById('editModal')).show();
}
</script>

@endsection
