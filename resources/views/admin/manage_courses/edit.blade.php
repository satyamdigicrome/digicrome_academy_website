@extends('admin_layout.app')

@section('title', 'Home Page')

@section('content')

<h1>Edit Course</h1>

@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
<form action="{{ route('courses.update', $course->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <div class="row">
        <div class="col-md-4">
            <div class="form-group">
                <label for="name">Course Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $course->name }}" required>
            </div>
        </div>

        <div class="col-md-4">
            <div class="form-group">
                <label for="slug">Slug</label>
                <input type="text" class="form-control" id="slug" name="slug" value="{{ $course->slug }}" required>
            </div>
        </div>

        <div class="col-md-4">
            <div class="form-group">
                <label for="sku">SKU</label>
                <input type="text" class="form-control" id="sku" name="sku" value="{{ $course->sku }}" required>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4">
            <div class="form-group">
                <label for="tag_line">Tag Line</label>
                <input type="text" class="form-control" id="tag_line" name="tag_line" value="{{ $course->tag_line }}">
            </div>
        </div>

        <div class="col-md-4">
            <div class="form-group">
                <label for="corporate">Corporate</label>
                <select class="form-control" id="corporate" name="corporate">
                    <option value="1" {{ $course->corporate == 1 ? 'selected' : '' }}>Yes</option>
                    <option value="0" {{ $course->corporate == 0 ? 'selected' : '' }}>No</option>
                </select>
            </div>
        </div>

        <div class="col-md-4">
            <div class="form-group">
                <label for="status">Status</label>
                <select class="form-control" id="status" name="status">
                    <option value="1" {{ $course->status ? 'selected' : '' }}>Active</option>
                    <option value="0" {{ !$course->status ? 'selected' : '' }}>Inactive</option>
                </select>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4">
            <div class="form-group">
                <label for="course_free">Is Course Free?</label>
                <select class="form-control" id="course_free" name="course_free">
                    <option value="1" {{ $course->course_free ? 'selected' : '' }}>Yes</option>
                    <option value="0" {{ !$course->course_free ? 'selected' : '' }}>No</option>
                </select>
            </div>
        </div>

        <div class="col-md-4">
            <div class="form-group">
                <label for="course_upcoming">Is Course Upcoming?</label>
                <select class="form-control" id="course_upcoming" name="course_upcoming">
                    <option value="1" {{ $course->course_upcoming ? 'selected' : '' }}>Yes</option>
                    <option value="0" {{ !$course->course_upcoming ? 'selected' : '' }}>No</option>
                </select>
            </div>
        </div>

        <div class="col-md-4">
            <div class="form-group">
                <label for="course_online_payment">Online Payment Available?</label>
                <select class="form-control" id="course_online_payment" name="course_online_payment">
                    <option value="1" {{ $course->course_online_payment ? 'selected' : '' }}>Yes</option>
                    <option value="0" {{ !$course->course_online_payment ? 'selected' : '' }}>No</option>
                </select>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4">
            <div class="form-group">
                <label for="course_duration">Course Duration</label>
                <input type="text" class="form-control" id="course_duration" name="course_duration" value="{{ $course->course_duration }}">
            </div>
        </div>

        <div class="col-md-4">
            <div class="form-group">
                <label for="price">Course Price</label>
                <input type="number" class="form-control" id="price" name="price" value="{{ $course->price }}" step="0.01">
            </div>
        </div>

            <div class="col-md-4">
                <div class="form-group">
                    <label for="dubai_price">Dubai Price</label>
                    <input type="number" class="form-control" id="dubai_price" name="dubai_price" value="{{ $course->dubai_price }}" step="0.01">
                </div>
            </div>
        </div>
    
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="us_price">US Price</label>
                    <input type="number" class="form-control" id="us_price" name="us_price" value="{{ $course->us_price }}" step="0.01">
                </div>
            </div>
    
            <div class="col-md-4">
                <div class="form-group">
                    <label for="discount">Discount</label>
                    <input type="number" class="form-control" id="discount" name="discount" value="{{ $course->discount }}" step="0.01">
                </div>
            </div>
    
            <div class="col-md-4">
                <div class="form-group">
                    <label for="meta_title">Meta Title</label>
                    <input type="text" class="form-control" id="meta_title" name="meta_title" value="{{ $course->meta_title }}">
                </div>
            </div>
        </div>
    
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="meta_keywords">Meta Keywords</label>
                    <input type="text" class="form-control" id="meta_keywords" name="meta_keywords" value="{{ $course->meta_keywords }}">
                </div>
            </div>
    
            <div class="col-md-4">
                <div class="form-group">
                    <label for="meta_description">Meta Description</label>
                    <textarea class="form-control" id="meta_description" name="meta_description">{{ $course->meta_description }}</textarea>
                </div>
            </div>
    
            <div class="col-md-4">
                <div class="form-group">
                    <label for="has_faq">Has FAQ?</label>
                    <select class="form-control" id="has_faq" name="has_faqs">
                        <option value="1" {{ $course->has_faqs ? 'selected' : '' }}>Yes</option>
                        <option value="0" {{ !$course->has_faqs ? 'selected' : '' }}>No</option>
                    </select>
                </div>
            </div>
        </div>
    
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="status">Status</label>
                    <select class="form-control" id="status" name="status">
                        <option value="1" {{ $course->status ? 'selected' : '' }}>Active</option>
                        <option value="0" {{ !$course->status ? 'selected' : '' }}>Inactive</option>
                    </select>
                </div>
            </div>
    
            <div class="col-md-4">
                <div class="form-group">
                    <label for="image">Course Image</label>
                    <input type="file" class="form-control" id="image" name="image">
                    <small class="form-text text-muted">Leave blank to keep the current image.</small>
                </div>
            </div>
    
            <div class="col-md-4">
                <!-- Empty column for spacing -->
            </div>
        </div>
        <div class="row">
            <div class="form-group col-12">
                <label for="description">Course Description</label>
                <textarea class="form-control" id="description" name="description" required>{{ $course->description }}</textarea>
            </div>
        </div>
        
        <!-- Include CKEditor CDN -->
       
        
       
        
        
    
        <button type="submit" class="btn btn-primary">Update Course</button>
    </form>
     <!-- Initialize CKEditor -->
     <script>
        ClassicEditor
            .create(document.querySelector('#description'))
            .then(editor => {
                // Sync content to the textarea on change
                editor.model.document.on('change:data', () => {
                    document.querySelector('#description').value = editor.getData();
                });
            })
            .catch(error => {
                console.error('CKEditor error:', error);
            });
    </script>


@endsection