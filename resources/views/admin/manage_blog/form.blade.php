<div class="mb-3">
    <label>Author Name</label>
    <input type="text" name="author_name" class="form-control" value="{{ old('author_name', $blog->author_name ?? '') }}" required>
</div>

<div class="mb-3">
    <label>Heading</label>
    <input type="text" name="heading" class="form-control" value="{{ old('heading', $blog->heading ?? '') }}" required>
</div>

<div class="mb-3">
    <label>Tagline</label>
    <input type="text" name="tagline" class="form-control" value="{{ old('tagline', $blog->tagline ?? '') }}">
</div>

<div class="mb-3">
    <label>Blog Content</label>
    <textarea class="form-control" id="content" name="blog" required>{{ old('blog', $blog->blog ?? '') }}</textarea>
</div>

<div class="mb-3">
    <label>Slug</label>
    <input type="text" name="slug" class="form-control" value="{{ old('slug', $blog->slug ?? '') }}" required>
</div>

<div class="mb-3">
    <label>Meta Title</label>
    <input type="text" name="meta_title" class="form-control" value="{{ old('meta_title', $blog->meta_title ?? '') }}">
</div>

<div class="mb-3">
    <label>Meta Description</label>
    <textarea name="meta_description" class="form-control">{{ old('meta_description', $blog->meta_description ?? '') }}</textarea>
</div>

<div class="mb-3">
    <label>Meta Keywords</label>
    <textarea name="meta_keywords" class="form-control">{{ old('meta_keywords', $blog->meta_keywords ?? '') }}</textarea>
</div>

<div class="mb-3">
    <label>Author Image</label>
    <input type="file" name="author_image" class="form-control">
</div>

<div class="mb-3">
    <label>Blog Image</label>
    <input type="file" name="blog_image" class="form-control">
</div>

<div class="mb-3">
    <label>Status</label>
    <select name="status" class="form-control">
        <option value="draft" {{ (old('status', $blog->status ?? '') == 'draft') ? 'selected' : '' }}>Draft</option>
        <option value="published" {{ (old('status', $blog->status ?? '') == 'published') ? 'selected' : '' }}>Published</option>
        <option value="archived" {{ (old('status', $blog->status ?? '') == 'archived') ? 'selected' : '' }}>Archived</option>
    </select>
</div>

