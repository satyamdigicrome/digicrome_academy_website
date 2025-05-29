@extends('admin_layout.app')

@section('title', 'Add FAQs')

@section('content')
<div class="container mt-4">
    <h3>Add Multiple FAQs</h3>

    <form method="POST" action="{{ route('faqs.store') }}">
        @csrf

        <div class="mb-3">
            <label for="course_id" class="form-label">Select Course</label>
            <select name="course_id" class="form-select" required>
                @foreach ($courses as $course)
                    <option value="{{ $course->id }}">{{ $course->name }}</option>
                @endforeach
            </select>
        </div>

        <div id="faq-container">
            <div class="faq-item row mb-3">
                <div class="col-md-5">
                    <input type="text" name="faqs[0][question]" class="form-control" placeholder="Question" required>
                </div>
                <div class="col-md-5">
                    <textarea name="faqs[0][answer]" class="form-control" placeholder="Answer" required></textarea>
                </div>
                <div class="col-md-2">
                    <button type="button" class="btn btn-danger remove-faq">Remove</button>
                </div>
            </div>
        </div>

        <button type="button" class="btn btn-secondary mb-3" id="add-faq">+ Add More FAQ</button>
        <br>
        <button type="submit" class="btn btn-primary">Save FAQs</button>
    </form>
</div>
<!-- FAQ List Table -->
<form method="GET" class="mb-4">
    <div class="row">
        <div class="col-md-4">
            <select name="filter_course_id" class="form-select" onchange="this.form.submit()">
                <option value="">-- Filter by Course --</option>
                @foreach($courses as $course)
                    <option value="{{ $course->id }}" {{ request('filter_course_id') == $course->id ? 'selected' : '' }}>
                        {{ $course->name }}
                    </option>
                @endforeach
            </select>
        </div>
    </div>
</form>
<h4 class="mb-3">FAQ List</h4>
<table class="table table-bordered table-hover">
    <thead class="table-light">
        <tr>
            <th>#</th>
            <th>Course</th>
            <th>Question</th>
            <th>Answer</th>
            <th>Created By</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($faqs as $index => $faq)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $faq->course->name ?? 'N/A' }}</td>
                <td>{{ $faq->question }}</td>
                <td>{{ $faq->answer }}</td>
                <td>{{ $faq->user->name ?? 'Unknown' }}</td>
                <td>
                    <form action="{{ route('faqs.destroy', $faq->id) }}" method="POST" onsubmit="return confirm('Delete this FAQ?')">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-sm btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @empty
            <tr><td colspan="6" class="text-center">No FAQs found.</td></tr>
        @endforelse
    </tbody>
</table>

<script>
    let index = 1;
    document.getElementById('add-faq').addEventListener('click', function () {
        const container = document.getElementById('faq-container');
        const faqItem = document.createElement('div');
        faqItem.classList.add('row', 'mb-3', 'faq-item');
        faqItem.innerHTML = `
            <div class="col-md-5">
                <input type="text" name="faqs[${index}][question]" class="form-control" placeholder="Question" required>
            </div>
            <div class="col-md-5">
                <textarea name="faqs[${index}][answer]" class="form-control" placeholder="Answer" required></textarea>
            </div>
            <div class="col-md-2">
                <button type="button" class="btn btn-danger remove-faq">Remove</button>
            </div>
        `;
        container.appendChild(faqItem);
        index++;
    });

    document.addEventListener('click', function (e) {
        if (e.target.classList.contains('remove-faq')) {
            e.target.closest('.faq-item').remove();
        }
    });
</script>
@endsection
