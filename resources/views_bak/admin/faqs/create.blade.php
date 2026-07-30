@extends('admin_layout.app')

@section('page-title', 'FAQs')

@section('content')

<div class="page-header">
    <div>
        <h1 class="page-title">FAQs</h1>
        <p class="page-subtitle">Manage frequently asked questions for each course</p>
    </div>
</div>

<div class="row g-4">
    {{-- Add Form --}}
    <div class="col-lg-5">
        <div class="cms-card">
            <div class="cms-card-header">
                <h5 class="cms-card-title"><i class="bi bi-plus-circle me-2"></i>Add FAQs</h5>
            </div>
            <div class="cms-card-body">
                <form method="POST" action="{{ route('faqs.store') }}">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label fw-semibold">Course <span class="text-danger">*</span></label>
                        <select name="course_id" class="form-select" required>
                            <option value="">— Select Course —</option>
                            @foreach($courses as $course)
                                <option value="{{ $course->id }}">{{ $course->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div id="faq-container">
                        <div class="faq-item border rounded p-3 mb-3 bg-light">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <span class="fw-semibold text-muted small">FAQ #1</span>
                            </div>
                            <div class="mb-2">
                                <input type="text" name="faqs[0][question]" class="form-control" placeholder="Question" required>
                            </div>
                            <textarea name="faqs[0][answer]" class="form-control" rows="3" placeholder="Answer" required></textarea>
                        </div>
                    </div>

                    <button type="button" class="btn-cms-secondary" style="width:100%;justify-content:center;margin-bottom:12px;" id="add-faq">
                        <i class="bi bi-plus me-1"></i> Add Another FAQ
                    </button>

                    <button type="submit" class="btn-cms-primary w-100">
                        <i class="bi bi-check-circle me-1"></i> Save FAQs
                    </button>
                </form>
            </div>
        </div>
    </div>

    {{-- FAQs Table --}}
    <div class="col-lg-7">
        <div class="cms-card">
            <div class="cms-card-header">
                <h5 class="cms-card-title"><i class="bi bi-question-circle me-2"></i>All FAQs</h5>
                <div class="d-flex align-items-center gap-2">
                    <form method="GET" class="d-flex">
                        <select name="filter_course_id" class="form-select form-select-sm" style="width:160px;" onchange="this.form.submit()">
                            <option value="">All Courses</option>
                            @foreach($courses as $course)
                                <option value="{{ $course->id }}" {{ request('filter_course_id') == $course->id ? 'selected' : '' }}>
                                    {{ $course->name }}
                                </option>
                            @endforeach
                        </select>
                    </form>
                    <span class="badge bg-primary">{{ $faqs->count() }} total</span>
                </div>
            </div>
            <div class="cms-card-body p-0">
                @if($faqs->isEmpty())
                    <div class="empty-state">
                        <i class="bi bi-question-circle"></i>
                        <p>No FAQs yet. Add some to get started.</p>
                    </div>
                @else
                <div class="table-responsive">
                    <table class="cms-table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Course</th>
                                <th>Question</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($faqs as $index => $faq)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>
                                    <span class="badge bg-info text-dark">{{ $faq->course->name ?? 'N/A' }}</span>
                                </td>
                                <td>
                                    <div class="fw-semibold" style="max-width:200px;">{{ Str::limit($faq->question, 60) }}</div>
                                    <small class="text-muted">{{ Str::limit($faq->answer, 60) }}</small>
                                </td>
                                <td>
                                    <div class="action-group">
                                        <button class="btn-cms-edit"
                                            onclick="openEditModal({{ $faq->id }}, {{ json_encode($faq) }})">
                                            <i class="bi bi-pencil"></i>
                                        </button>
                                        <form action="{{ route('faqs.destroy', $faq->id) }}" method="POST"
                                              onsubmit="return confirm('Delete this FAQ?')">
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
                <h5 class="modal-title"><i class="bi bi-pencil-square me-2"></i>Edit FAQ</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <form id="editForm" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label fw-semibold">Course</label>
                        <select name="course_id" id="edit_course_id" class="form-select" required>
                            @foreach($courses as $course)
                                <option value="{{ $course->id }}">{{ $course->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-semibold">Question</label>
                        <input type="text" name="question" id="edit_question" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-semibold">Answer</label>
                        <textarea name="answer" id="edit_answer" class="form-control" rows="5" required></textarea>
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
let faqIndex = 1;
document.getElementById('add-faq').addEventListener('click', function () {
    const container = document.getElementById('faq-container');
    const item = document.createElement('div');
    item.classList.add('faq-item', 'border', 'rounded', 'p-3', 'mb-3', 'bg-light');
    item.innerHTML = `
        <div class="d-flex justify-content-between align-items-center mb-2">
            <span class="fw-semibold text-muted small">FAQ #${faqIndex + 1}</span>
            <button type="button" class="btn-cms-delete remove-faq">
                <i class="bi bi-x"></i> Remove
            </button>
        </div>
        <div class="mb-2">
            <input type="text" name="faqs[${faqIndex}][question]" class="form-control" placeholder="Question" required>
        </div>
        <textarea name="faqs[${faqIndex}][answer]" class="form-control" rows="3" placeholder="Answer" required></textarea>
    `;
    container.appendChild(item);
    faqIndex++;
});

document.addEventListener('click', function (e) {
    if (e.target.closest('.remove-faq')) {
        e.target.closest('.faq-item').remove();
    }
});

function openEditModal(id, data) {
    document.getElementById('editForm').action = '/admin/faqs/' + id;
    document.getElementById('edit_question').value = data.question || '';
    document.getElementById('edit_answer').value = data.answer || '';

    var courseSelect = document.getElementById('edit_course_id');
    for (var i = 0; i < courseSelect.options.length; i++) {
        if (courseSelect.options[i].value == data.course_id) {
            courseSelect.selectedIndex = i;
            break;
        }
    }

    new bootstrap.Modal(document.getElementById('editModal')).show();
}
</script>

@endsection
