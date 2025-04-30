@extends('admin_layout.app')

@section('title', 'Home Page')

@section('content')
<div class="container mt-5">
    <h2>Add New Course</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('course.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="name">Course Name</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="slug">Slug</label>
                    <input type="text" class="form-control" id="slug" name="slug" required>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="sku">SKU</label>
                    <input type="text" class="form-control" id="sku" name="sku" required>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="tag_line">Tag Line</label>
                    <input type="text" class="form-control" id="tag_line" name="tag_line" required>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="course_free">Corporate</label>
                    <select class="form-control" id="course_free" name="corporate" required>
                        <option value="1">Yes</option>
                        <option value="0">No</option>
                    </select>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="course_free">Is Course Free?</label>
                    <select class="form-control" id="course_free" name="course_free" required>
                        <option value="1">Yes</option>
                        <option value="0">No</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="course_upcoming">Is Course Upcoming?</label>
                    <select class="form-control" id="course_upcoming" name="course_upcoming" required>
                        <option value="1">Yes</option>
                        <option value="0">No</option>
                    </select>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="course_online_payment">Online Payment Available?</label>
                    <select class="form-control" id="course_online_payment" name="course_online_payment" required>
                        <option value="1">Yes</option>
                        <option value="0">No</option>
                    </select>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="course_duration">Course Duration</label>
                    <input type="text" class="form-control" id="course_duration" name="course_duration" required>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="price">Price</label>
                    <input type="number" class="form-control" id="price" name="price" required>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="dubai_price">Dubai Price</label>
                    <input type="number" class="form-control" id="dubai_price" name="dubai_price" required>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="us_price">US Price</label>
                    <input type="number" class="form-control" id="us_price" name="us_price" required>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="discount">Discount</label>
                    <input type="number" class="form-control" id="discount" name="discount" required>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="meta_title">Meta Title</label>
                    <input type="text" class="form-control" id="meta_title" name="meta_title" required>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="meta_keywords">Meta Keywords</label>
                    <input type="text" class="form-control" id="meta_keywords" name="meta_keywords" required>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="meta_description">Meta Description</label>
                    <input type="text" class="form-control" id="meta_description" name="meta_description" required>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="has_faq">Has FAQ?</label>
                    <select class="form-control" id="has_faqs" name="has_faqs" required>
                        <option value="1">Yes</option>
                        <option value="0">No</option>
                    </select>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="status">Status</label>
                    <select class="form-control" id="status" name="status" required>
                        <option value="1">Active</option>
                        <option value="0">Inactive</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="collection_id">Collection</label>
                    <select class="form-control" id="collection_id" name="collection_id" required>
                        @foreach($collections as $collection)
                            <option value="{{ $collection->id }}">{{ $collection->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="course_image">Course Image</label>
                    <input type="file" class="form-control" id="course_image" name="course_image" accept="image/*" required>
                </div>
            </div>
        </div>

        <!-- Full-width description field -->
        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" id="description" name="description" required></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Add Course</button>
        <a href="{{ route('admin.manage_courses') }}" class="btn btn-secondary">Cancel</a>
    </form>
    <script>
        // Initialize CKEditor for the description field
        CKEDITOR.replace('description');
    </script>
</div>
@endsection