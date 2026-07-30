@extends('admin_layout.app')

@section('page-title', 'Testimonials')

@section('content')

<div class="page-header">
    <div>
        <h1 class="page-title">Testimonials</h1>
        <p class="page-subtitle">Manage customer testimonials</p>
    </div>
</div>

<div class="row g-4">
    {{-- Add Form --}}
    <div class="col-lg-4">
        <div class="cms-card">
            <div class="cms-card-header">
                <h5 class="cms-card-title"><i class="bi bi-plus-circle me-2"></i>Add Testimonial</h5>
            </div>
            <div class="cms-card-body">
                <form action="{{ route('testimonials.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label fw-semibold">Name <span class="text-danger">*</span></label>
                        <input type="text" name="name" class="form-control" placeholder="Customer name" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-semibold">Profession <span class="text-danger">*</span></label>
                        <input type="text" name="profession" class="form-control" placeholder="e.g. Software Engineer" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-semibold">Tagline <span class="text-danger">*</span></label>
                        <input type="text" name="tagline" class="form-control" placeholder="Short tagline" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-semibold">Review <span class="text-danger">*</span></label>
                        <textarea name="review" class="form-control" rows="4" placeholder="Customer review..." required></textarea>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-semibold">Rating (1–5) <span class="text-danger">*</span></label>
                        <input type="number" name="rating" class="form-control" min="1" max="5" placeholder="5" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-semibold">Photo <small class="text-muted">(optional)</small></label>
                        <input type="file" name="image" accept="image/*" class="form-control">
                    </div>
                    <button type="submit" class="btn-cms-primary w-100">
                        <i class="bi bi-plus-circle me-1"></i> Add Testimonial
                    </button>
                </form>
            </div>
        </div>
    </div>

    {{-- Testimonials Table --}}
    <div class="col-lg-8">
        <div class="cms-card">
            <div class="cms-card-header">
                <h5 class="cms-card-title"><i class="bi bi-chat-quote me-2"></i>All Testimonials</h5>
                <span class="badge bg-primary">{{ $testimonials->count() }} total</span>
            </div>
            <div class="cms-card-body p-0">
                @if($testimonials->isEmpty())
                    <div class="empty-state">
                        <i class="bi bi-chat-quote"></i>
                        <p>No testimonials yet. Add one to get started.</p>
                    </div>
                @else
                <div class="table-responsive">
                    <table class="cms-table">
                        <thead>
                            <tr>
                                <th>Photo</th>
                                <th>Name</th>
                                <th>Profession</th>
                                <th>Rating</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($testimonials as $testimonial)
                            <tr>
                                <td>
                                    @if($testimonial->image)
                                        <img src="{{ asset('storage/' . $testimonial->image) }}" alt="Photo"
                                             class="rounded-circle" style="width:40px;height:40px;object-fit:cover;">
                                    @else
                                        <div class="rounded-circle bg-secondary d-flex align-items-center justify-content-center"
                                             style="width:40px;height:40px;color:#fff;font-weight:bold;">
                                            {{ strtoupper(substr($testimonial->name, 0, 1)) }}
                                        </div>
                                    @endif
                                </td>
                                <td>
                                    <div class="fw-semibold">{{ $testimonial->name }}</div>
                                    <small class="text-muted">{{ Str::limit($testimonial->tagline, 40) }}</small>
                                </td>
                                <td>{{ $testimonial->profession }}</td>
                                <td>
                                    @for($i = 1; $i <= 5; $i++)
                                        <i class="bi bi-star{{ $i <= $testimonial->rating ? '-fill text-warning' : ' text-muted' }}" style="font-size:12px;"></i>
                                    @endfor
                                </td>
                                <td>
                                    <div class="action-group">
                                        <button class="btn-cms-edit"
                                            onclick="openEditModal({{ $testimonial->id }}, {{ json_encode($testimonial) }})">
                                            <i class="bi bi-pencil"></i>
                                        </button>
                                        <form action="{{ route('testimonial.destroy', $testimonial->id) }}" method="POST"
                                              onsubmit="return confirm('Delete this testimonial?')">
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
                <h5 class="modal-title"><i class="bi bi-pencil-square me-2"></i>Edit Testimonial</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <form id="editForm" method="POST" enctype="multipart/form-data">
                @csrf
                @method('POST')
                <div class="modal-body">
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label class="form-label fw-semibold">Name</label>
                            <input type="text" name="name" id="edit_name" class="form-control" required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label fw-semibold">Profession</label>
                            <input type="text" name="profession" id="edit_profession" class="form-control" required>
                        </div>
                        <div class="col-md-8">
                            <label class="form-label fw-semibold">Tagline</label>
                            <input type="text" name="tagline" id="edit_tagline" class="form-control" required>
                        </div>
                        <div class="col-md-4">
                            <label class="form-label fw-semibold">Rating (1–5)</label>
                            <input type="number" name="rating" id="edit_rating" class="form-control" min="1" max="5" required>
                        </div>
                        <div class="col-12">
                            <label class="form-label fw-semibold">Review</label>
                            <textarea name="review" id="edit_review" class="form-control" rows="4" required></textarea>
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
    document.getElementById('editForm').action = '/admin/testimonial/' + id;
    document.getElementById('edit_name').value = data.name || '';
    document.getElementById('edit_profession').value = data.profession || '';
    document.getElementById('edit_tagline').value = data.tagline || '';
    document.getElementById('edit_review').value = data.review || '';
    document.getElementById('edit_rating').value = data.rating || '';

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
