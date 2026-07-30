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
            <label for="link">Link:</label>
            <input type="url" name="link" class="form-control" required>
        </div>

        <div class="form-group mb-3">
            <label for="date">Date:</label>
            <input type="date" name="date" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">Add Article</button>
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
            @foreach($articles as $article)
            <tr>
                <td><img src="{{ asset('uploads/articles/' . $article->image) }}" width="100"></td>
                <td>{{ $article->heading }}</td>
                <td><a href="{{ $article->link }}" target="_blank">Visit</a></td>
                <td>{{ $article->date }}</td>
                <td>
                    <form action="{{ route('articaldelete', $article->id) }}" method="POST" onsubmit="return confirm('Are you sure?');">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
