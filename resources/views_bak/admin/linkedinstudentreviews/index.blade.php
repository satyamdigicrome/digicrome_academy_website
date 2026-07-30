@extends('admin_layout.app')

@section('page-title', 'Linkedin Student Reviews')

@section('content')

<div class="page-header">
    <div>
        <h1 class="page-title">Linkedin Student Reviews</h1>
        <p class="page-subtitle">Showcase student Linkedin achievements</p>
    </div>
</div>

<div class="row g-4">
    {{-- Add Form --}}
    <div class="col-lg-4">
        <div class="cms-card">
            <div class="cms-card-header">
                <h5 class="cms-card-title"><i class="bi bi-plus-circle me-2"></i>Add Linkedin Review</h5>
            </div>
            <div class="cms-card-body">
                <form action="{{ route('linkedin.student.reviews.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label fw-semibold">LinkedIn Embed URL<span class="text-danger">*</span></label>
                        <input type="text" name="iframe_link" class="form-control" placeholder="LinkedIn embed URL" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-semibold">LinkedIn Post URL<span class="text-danger">*</span></label>
                        <input type="text" name="post_link" class="form-control" placeholder="LinkedIn post URL" required>
                    </div>
                    <button type="submit" class="btn-cms-primary w-100">
                        <i class="bi bi-plus-circle me-1"></i> Save
                    </button>
                </form>
            </div>
        </div>
    </div>

    {{-- Stories Table --}}
    <div class="col-lg-8">
        <div class="cms-card">
            <div class="cms-card-header">
                <h5 class="cms-card-title"><i class="bi bi-trophy me-2"></i>All Linkedin Reviews</h5>
                <span class="badge bg-success">{{ $stories->count() }} total</span>
            </div>
            <div class="cms-card-body p-0">
                @if($stories->isEmpty())
                    <div class="empty-state">
                        <i class="bi bi-trophy"></i>
                        <p>No Linkedin Reviews yet. Add one to get started.</p>
                    </div>
                @else
                <div class="table-responsive">
                    <table class="cms-table">
                        <thead>
                            <tr>
                                <th>Embed URL</th>
                                <th>Post URL</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($stories as $story)
                            <tr>
                                <td class="fw-semibold"><a href="{{ $story->iframe_link }}" target="_blank">View Link</a></td>
                                <td><a href="{{ $story->post_link }}" target="_blank">View Post</a></td>
                                <td>
                                    <div class="action-group">
                                        <button class="btn-cms-edit"
                                            onclick="openEditModal({{ $story->id }}, {{ json_encode($story) }})">
                                            <i class="bi bi-pencil"></i>
                                        </button>
                                        <form action="{{ route('linkedin.student.reviews.destroy', $story->id) }}" method="POST"
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
                        <div class="col-12">
                            <label class="form-label fw-semibold">LinkedIn Embed URL</label>
                            <input type="text" name="iframe_link" id="edit_iframe_link" class="form-control" required>
                        </div>
                        <div class="col-12">
                            <label class="form-label fw-semibold">LinkedIn Post URL</label>
                            <textarea name="post_link" id="edit_post_link" class="form-control" rows="4" required></textarea>
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
    document.getElementById('editForm').action = '/admin/linkedin-student-reviews/' + id;
    document.getElementById('edit_iframe_link').value = data.iframe_link || '';
    document.getElementById('edit_post_link').value = data.post_link || '';
    new bootstrap.Modal(document.getElementById('editModal')).show();
}
</script>

@endsection
