@extends('admin_layout.app')

@section('page-title', 'Videos')

@section('content')

<div class="page-header">
    <div>
        <h1 class="page-title">Videos</h1>
        <p class="page-subtitle">Manage course video links and thumbnails</p>
    </div>
</div>

<div class="row g-4">
    {{-- Add Form --}}
    <div class="col-lg-4">
        <div class="cms-card">
            <div class="cms-card-header">
                <h5 class="cms-card-title"><i class="bi bi-plus-circle me-2"></i>Add Video</h5>
            </div>
            <div class="cms-card-body">
                <form action="{{ route('videos.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label fw-semibold">Video Name <span class="text-danger">*</span></label>
                        <input type="text" name="name" class="form-control" placeholder="e.g. Data Science Overview" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-semibold">Video Link (Vimeo/YouTube) <span class="text-danger">*</span></label>
                        <input type="text" name="video_link" class="form-control" placeholder="https://vimeo.com/..." required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-semibold">Thumbnail <small class="text-muted">(optional)</small></label>
                        <input type="file" name="image" accept="image/*" class="form-control">
                    </div>
                    <button type="submit" class="btn-cms-primary w-100">
                        <i class="bi bi-plus-circle me-1"></i> Add Video
                    </button>
                </form>
            </div>
        </div>
    </div>

    {{-- Videos Table --}}
    <div class="col-lg-8">
        <div class="cms-card">
            <div class="cms-card-header">
                <h5 class="cms-card-title"><i class="bi bi-camera-video me-2"></i>All Videos</h5>
                <span class="badge bg-primary">{{ $videos->count() }} total</span>
            </div>
            <div class="cms-card-body p-0">
                @if($videos->isEmpty())
                    <div class="empty-state">
                        <i class="bi bi-camera-video"></i>
                        <p>No videos yet. Add one to get started.</p>
                    </div>
                @else
                <div class="table-responsive">
                    <table class="cms-table">
                        <thead>
                            <tr>
                                <th>Thumbnail</th>
                                <th>Name</th>
                                <th>Link</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($videos as $video)
                            <tr>
                                <td>
                                    @if($video->image)
                                        <img src="{{ asset('storage/' . $video->image) }}" alt="Thumbnail"
                                             class="rounded" style="width:60px;height:40px;object-fit:cover;">
                                    @else
                                        <div class="rounded bg-dark d-flex align-items-center justify-content-center"
                                             style="width:60px;height:40px;color:#fff;">
                                            <i class="bi bi-play-fill"></i>
                                        </div>
                                    @endif
                                </td>
                                <td class="fw-semibold">{{ $video->name }}</td>
                                <td>
                                    <a href="{{ $video->video_link }}" target="_blank" class="text-primary">
                                        <i class="bi bi-box-arrow-up-right me-1"></i>View
                                    </a>
                                </td>
                                <td>
                                    <div class="action-group">
                                        <button class="btn-cms-edit"
                                            onclick="openEditModal({{ $video->id }}, {{ json_encode($video) }})">
                                            <i class="bi bi-pencil"></i>
                                        </button>
                                        <form action="{{ route('videos.destroy', $video->id) }}" method="POST"
                                              onsubmit="return confirm('Delete this video?')">
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
                <h5 class="modal-title"><i class="bi bi-pencil-square me-2"></i>Edit Video</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <form id="editForm" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label fw-semibold">Video Name</label>
                        <input type="text" name="name" id="edit_name" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-semibold">Video Link</label>
                        <input type="text" name="video_link" id="edit_video_link" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-semibold">Thumbnail <small class="text-muted">(leave blank to keep current)</small></label>
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
    document.getElementById('editForm').action = '/admin/videos/' + id;
    document.getElementById('edit_name').value = data.name || '';
    document.getElementById('edit_video_link').value = data.video_link || '';

    var imgDiv = document.getElementById('edit_current_image');
    if (data.image) {
        imgDiv.innerHTML = '<img src="/storage/' + data.image + '" class="rounded" style="width:80px;height:50px;object-fit:cover;" alt="Current">' +
                           '<small class="ms-2 text-muted">Current thumbnail</small>';
    } else {
        imgDiv.innerHTML = '<small class="text-muted">No current thumbnail</small>';
    }

    new bootstrap.Modal(document.getElementById('editModal')).show();
}
</script>

@endsection
