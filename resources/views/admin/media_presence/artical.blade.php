@extends('admin_layout.app')

@section('title', 'Manage Placements')

@section('content')
    <div class="container mt-4">
        <h3>Add New Article</h3>
        <form action="{{ route('articalstore') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group mb-3">
                <label for="image">Image:</label>
                <input type="file" name="image" class="form-control" required>
            </div>

            <div class="form-group mb-3">
                <label for="heading">Heading:</label>
                <input type="text" name="heading" class="form-control" required>
            </div>

            <div class="form-group mb-3">
                <label for="description">Description:</label>
                <textarea type="text" name="description" class="form-control" required></textarea>
            </div>

            <div class="form-group mb-3">
                <label for="link">Link:</label>
                <input type="url" name="link" class="form-control" required>
            </div>

            <div class="form-group mb-3">
                <label for="date">Date:</label>
                <input type="date" name="date" class="form-control" required>
            </div>

            <button type="submit" class="btn-cms-primary">Add Article</button>
        </form>

        <hr>

        <h3 class="mt-4">All Articles</h3>
        <table class="table table-bordered mt-2">
            <thead>
                <tr>
                    <th>Image</th>
                    <th>Heading</th>
                    <th>Link</th>
                    <th>Date</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($articles as $article)
                    <tr>
                        <td><img src="{{ asset('uploads/articles/' . $article->image) }}" width="100"></td>
                        <td>{{ $article->heading }}</td>
                        <td><a href="{{ $article->link }}" target="_blank">Visit</a></td>
                        <td>{{ $article->date }}</td>
                        <td>
                            <div style="display:flex;gap:8px;align-items:center">
                                <button type="button" class="btn-cms-edit btn-edit-article"
                                    data-action="{{ route('articalupdate', $article->id) }}"
                                    data-image-url="{{ asset('uploads/articles/' . $article->image) }}"
                                    data-heading="{{ $article->heading }}" data-description="{{ $article->description }}"
                                    data-link="{{ $article->link }}" data-date="{{ $article->date }}"
                                    data-bs-toggle="modal" data-bs-target="#editArticleModal">
                                    Edit
                                </button>

                                <form action="{{ route('articaldelete', $article->id) }}" method="POST"
                                    onsubmit="return confirm('Are you sure?');">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn-cms-delete">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- Edit Article Modal -->
    <div class="modal" id="editArticleModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Article</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">&times;</button>
                </div>
                <form id="editArticleForm" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="modal-body">
                        <div class="form-group mb-3">
                            <label>Current Image:</label>
                            <div>
                                <img id="currentImage" src="" width="150"
                                    style="display:block;margin-bottom:8px">
                            </div>
                        </div>

                        <div class="form-group mb-3">
                            <label for="image">Change Image (optional):</label>
                            <input type="file" name="image" id="editImageInput" class="form-control">
                            <div style="margin-top:8px;">
                                <img id="previewImage" src="" width="150" style="display:none">
                            </div>
                        </div>

                        <div class="form-group mb-3">
                            <label for="heading">Heading:</label>
                            <input type="text" name="heading" class="form-control" required>
                        </div>

                        <div class="form-group mb-3">
                            <label for="description">Description:</label>
                            <textarea name="description" class="form-control" required></textarea>
                        </div>

                        <div class="form-group mb-3">
                            <label for="link">Link:</label>
                            <input type="url" name="link" class="form-control" required>
                        </div>

                        <div class="form-group mb-3">
                            <label for="date">Date:</label>
                            <input type="date" name="date" class="form-control" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn-cms-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn-cms-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Populate modal when edit buttons are clicked
            document.querySelectorAll('.btn-edit-article').forEach(function(btn) {
                btn.addEventListener('click', function() {
                    var action = this.getAttribute('data-action');
                    var imageUrl = this.getAttribute('data-image-url');
                    var heading = this.getAttribute('data-heading') || '';
                    var description = this.getAttribute('data-description') || '';
                    var link = this.getAttribute('data-link') || '';
                    var date = this.getAttribute('data-date') || '';

                    var modal = document.getElementById('editArticleModal');
                    var form = modal.querySelector('form');
                    form.action = action;
                    modal.querySelector('input[name="heading"]').value = heading;
                    modal.querySelector('textarea[name="description"]').value = description;
                    modal.querySelector('input[name="link"]').value = link;
                    modal.querySelector('input[name="date"]').value = date;
                    var currentImg = modal.querySelector('#currentImage');
                    currentImg.src = imageUrl || '';
                    // hide preview image when opening
                    var preview = modal.querySelector('#previewImage');
                    preview.style.display = 'none';
                    preview.src = '';
                    // reset file input
                    var fileIn = modal.querySelector('#editImageInput');
                    if (fileIn) fileIn.value = '';
                });
            });

            // Image preview for file input
            var editImageInput = document.getElementById('editImageInput');
            if (editImageInput) {
                editImageInput.addEventListener('change', function(e) {
                    var file = this.files && this.files[0];
                    var preview = document.getElementById('previewImage');
                    if (file) {
                        var reader = new FileReader();
                        reader.onload = function(evt) {
                            preview.src = evt.target.result;
                            preview.style.display = 'block';
                        }
                        reader.readAsDataURL(file);
                    } else {
                        preview.src = '';
                        preview.style.display = 'none';
                    }
                });
            }
        });
    </script>
@endsection
