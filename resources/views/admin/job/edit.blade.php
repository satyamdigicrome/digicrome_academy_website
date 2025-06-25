@extends('admin_layout.app')

@section('title', 'Add project')

@section('content')
<div class="container mt-5">
    <h2>Edit Vacancy</h2>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('vacancies.update', $vacancy->id) }}" method="POST">
        @csrf

        @include('admin.job.form', ['vacancy' => $vacancy])

        <button type="submit" class="btn btn-primary mt-3">Update Vacancy</button>
    </form>
</div>
@endsection
