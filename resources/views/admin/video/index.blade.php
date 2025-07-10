@extends('admin_layout.app')

@section('title', 'Add project')

@section('content')
<div class="container">
    <h2>Upload Video</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <form action="{{ route('videos.store') }}" method="POST" enctype="multipart/form-data" class="mb-4">
        @csrf
        <div class="mb-3">
            <label>Video Link (Vimeo)</label>
            <input type="text" name="video_link" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Video Name</label>
            <input type="text" name="name" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Thumbnail Image</label>
            <input type="file" name="image" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Upload Video</button>
    </form>

    <h2>All Videos</h2>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>User</th>
                <th>Video Name</th>
                <th>Link</th>
                <th>Image</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($videos as $video)
                <tr>
                    <td>{{ $video->id }}</td>
                    <td>{{ $video->user->name ?? 'N/A' }}</td>
                    <td>{{ $video->name }}</td>
                    <td><a href="{{ $video->video_link }}" target="_blank">View</a></td>
                    <td>
                        @if($video->image)
                            <img src="{{ asset('storage/' . $video->image) }}" width="60">
                        @endif
                    </td>
                    <td>
                        <form action="{{ route('videos.destroy', $video->id) }}" method="POST" onsubmit="return confirm('Delete this video?')">
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