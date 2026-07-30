@extends('admin_layout.app')

@section('title', 'Add project')

@section('content')
<div class="container">
    <h2 class="mb-4">All Vacancies</h2>
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <a href="{{ route('vacancies.create') }}" class="btn-cms-primary mb-3">Post New Vacancy</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Title</th>
                <th>Company</th>
                <th>Location</th>
                <th>Type</th>
                <th>Salary</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        @foreach($vacancies as $vacancy)
            <tr>
                <td>{{ $vacancy->title }}</td>
                <td>{{ $vacancy->company_name }}</td>
                <td>{{ $vacancy->location }}</td>
                <td>{{ $vacancy->type }}</td>
                <td>{{ $vacancy->salary }}</td>
                <td>
                    <a href="{{ route('vacancies.edit', $vacancy->id) }}" class="btn-cms-edit">Edit</a>
                    <form action="{{ route('vacancies.destroy', $vacancy->id) }}" method="POST" style="display:inline-block">
                        @csrf @method('DELETE')
                        <button class="btn-cms-delete" onclick="return confirm('Are you sure?')">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
@endsection
                   