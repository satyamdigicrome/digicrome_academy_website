@extends('admin_layout.app')

@section('title', 'Home Page')

@section('content')
<div class="container my-4">
    <!-- Header & Filters -->
        <div class="d-flex justify-content-between align-items-center mb-3 flex-wrap">

            <div class="d-flex flex-wrap gap-2">
                <select class="form-select form-select-sm" style="min-width: 150px;">
                    <option value="">Filter by Category</option>
                    <option value="programming">Programming</option>
                    <option value="design">Design</option>
                    <option value="marketing">Marketing</option>
                </select>
            </div>
            <a href="{{route('course.create')}}" class="btn-primary">Add New</a>

        </div>

    <!-- Table -->
    <div class="table-responsive">
        <table class="table table-bordered table-hover align-middle">
            <thead class="table-light">
                <tr>
                    <th>Course Name</th>
                    <th>Catagoury </th>
                    <th>SKU</th>
                    <th> Status</th>
                    <th>Add By</th>
                    <th style="width: 150px;">Edit</th>
                    <th style="width: 150px;">Actions</th>

                </tr>
            </thead>
            <tbody>
                @foreach($courses as $course)
                    <tr>
                        <td>{{ $course->name }}</td>
                        <td>{{ $course->collection->name ?? 'N/A' }}</td>
                        <td>{{ $course->sku }}</td>
                        <td>{{ $course->status == 1 ? 'Active' : 'Inactive' }}</td>
                        <td>{{ $course->user->name ?? 'N/A' }}</td>
                        <td>
                            <div class="d-flex gap-2">
                                
                                <a href="{{ route('courses.edit', $course->id) }}" class="btn-outline-dark">
                                    <i class="bi bi-pencil-square"></i> Edit
                                </a>
                            </div>
                        </td>
                        <td>
                            <form action="#" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn-outline-danger">
                                    <i class="bi bi-trash"></i> Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>


@endsection