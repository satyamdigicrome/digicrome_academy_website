<div class="row g-3">
    <div class="col-md-8">
        <label class="form-label fw-semibold">Heading <span class="text-danger">*</span></label>
        <input type="text" name="heading" class="form-control"
               value="{{ old('heading', $blog->heading ?? '') }}" placeholder="Blog title" required>
    </div>
    <div class="col-md-4">
        <label class="form-label fw-semibold">Status <span class="text-danger">*</span></label>
        <select name="status" class="form-select" required>
            <option value="draft"     {{ (old('status', $blog->status ?? '') == 'draft')     ? 'selected' : '' }}>Draft</option>
            <option value="published" {{ (old('status', $blog->status ?? '') == 'published') ? 'selected' : '' }}>Published</option>
            <option value="archived"  {{ (old('status', $blog->status ?? '') == 'archived')  ? 'selected' : '' }}>Archived</option>
        </select>
    </div>
    <div class="col-md-8">
        <label class="form-label fw-semibold">Tagline</label>
        <input type="text" name="tagline" class="form-control"
               value="{{ old('tagline', $blog->tagline ?? '') }}" placeholder="Short subtitle">
    </div>
    <div class="col-md-4">
        <label class="form-label fw-semibold">Slug <span class="text-danger">*</span></label>
        <input type="text" name="slug" class="form-control"
               value="{{ old('slug', $blog->slug ?? '') }}" placeholder="url-friendly-slug" required>
    </div>
</div>

<div class="mt-3 mb-3">
    <label class="form-label fw-semibold">Blog Content <span class="text-danger">*</span></label>
    <textarea class="form-control summernote-editor" id="blog_content" name="blog"
              rows="14" required>{{ old('blog', $blog->blog ?? '') }}</textarea>
</div>

<div class="row g-3 mt-1">
    <div class="col-md-6">
        <label class="form-label fw-semibold">Author Name <span class="text-danger">*</span></label>
        <input type="text" name="author_name" class="form-control"
               value="{{ old('author_name', $blog->author_name ?? '') }}" placeholder="Author full name" required>
    </div>
    <div class="col-md-6">
        <label class="form-label fw-semibold">Author Photo</label>
        <input type="file" name="author_image" class="form-control" accept="image/*">
        @if(!empty($blog->author_image))
            <div class="mt-1 d-flex align-items-center gap-2">
                <img src="{{ asset('storage/' . $blog->author_image) }}" class="rounded-circle"
                     style="width:32px;height:32px;object-fit:cover;" alt="Author">
                <small class="text-muted">Current photo</small>
            </div>
        @endif
    </div>
    <div class="col-md-6">
        <label class="form-label fw-semibold">Blog Cover Image</label>
        <input type="file" name="blog_image" class="form-control" accept="image/*">
        @if(!empty($blog->blog_image))
            <div class="mt-1">
                <img src="{{ asset('storage/' . $blog->blog_image) }}" class="rounded"
                     style="height:50px;max-width:120px;object-fit:cover;" alt="Cover">
                <small class="text-muted ms-2">Current cover</small>
            </div>
        @endif
    </div>
</div>

<div class="row g-3 mt-2">
    <div class="col-12">
        <p class="fw-semibold text-muted mb-2" style="font-size:13px;">
            <i class="bi bi-tags me-1"></i> SEO Meta Tags
        </p>
    </div>
    <div class="col-md-6">
        <label class="form-label fw-semibold">Meta Title</label>
        <input type="text" name="meta_title" class="form-control"
               value="{{ old('meta_title', $blog->meta_title ?? '') }}" placeholder="SEO title">
    </div>
    <div class="col-md-6">
        <label class="form-label fw-semibold">Meta Keywords</label>
        <input type="text" name="meta_keywords" class="form-control"
               value="{{ old('meta_keywords', $blog->meta_keywords ?? '') }}" placeholder="keyword1, keyword2">
    </div>
    <div class="col-12">
        <label class="form-label fw-semibold">Meta Description</label>
        <textarea name="meta_description" class="form-control" rows="2"
                  placeholder="Brief SEO description...">{{ old('meta_description', $blog->meta_description ?? '') }}</textarea>
    </div>
</div>
