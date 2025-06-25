@extends('admin_layout.app')

@section('title', 'Add project')

@section('content')

<h1>Job Applications</h1>

@if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif

<table class="table table-bordered">
    <thead>
        <tr>
            <th>#</th>
            <th>Vacancy</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Cover Letter</th>
            <th>Resume</th>
            <th>Applied At</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($applications as $app)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $app->vacancy->title ?? 'N/A' }}</td>
            <td>{{ $app->name }}</td>
            <td>{{ $app->email }}</td>
            <td>{{ $app->phone }}</td>
            <td>{{ Str::limit($app->cover_letter, 50) }}</td>
            <td>
                @if($app->resume_path)
                    <a href="{{ asset('storage/' . $app->resume_path) }}" target="_blank">View Resume</a>
                @else
                    N/A
                @endif
            </td>
            <td>{{ $app->created_at->format('d-M-Y H:i') }}</td>
            <td>
                <form action="{{ route('application.delete', $app->id) }}" method="POST" onsubmit="return confirm('Are you sure to delete this application?');">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>


@endsection