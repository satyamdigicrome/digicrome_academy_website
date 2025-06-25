@extends('admin_layout.app')

@section('title', 'Add project')

@section('content')
<div class="container mt-5">
    <h2>Post a New Vacancy</h2>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('vacancies.store') }}" method="POST">
        @csrf

        @include('admin.job.form', ['vacancy' => null])

        <button type="submit" class="btn btn-success mt-3">Create Vacancy</button>
    </form>
</div>
@endsection
