@extends('admin_layout.app')

@section('title', 'Add project')

@section('content')

<div class="container py-5">
  <div class="row justify-content-center">
    <div class="col-md-6">
      <form class="p-4 border rounded shadow bg-light" action="{{ route('success.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3 text-center">
            <label for="image" class="btn btn-primary w-100">Choose an image</label>
            <input type="file" id="image" name="image" accept="image/*" hidden required>
        </div>
    
        <div class="mb-3">
            <label for="studentname" class="form-label">Name:</label>
            <input type="text" id="studentname" name="studentname" class="form-control" required>
        </div>
    
        <div class="mb-3">
            <label for="position" class="form-label">Position:</label>
            <input type="text" id="position" name="position" class="form-control" required>
        </div>
    
        <div class="mb-3">
            <label for="companyname" class="form-label">Company name</label>
            <input type="text" id="companyname" name="companyname" class="form-control" required>
        </div>

        <div class="mb-3">
          <label for="stoire" class="form-label">Stories</label>
          <textarea id="stoire" name="stoire" class="form-control" rows="4" required></textarea>
      </div>
      
    
        <div class="d-grid">
            <button type="submit" class="btn btn-success">Add Your Success Story</button>
        </div>
    </form>
    
    </div>
  </div>
</div>
  <h2>User Success Stories</h2>
  <table class="table mt-4">
    <thead>
        <tr>
            <th>Image</th>
            <th>Name</th>
            <th>Position</th>
            <th>Package</th>
            <th>User ID</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($stories as $story)
        <tr>
            <td><img src="{{ asset('storage/' . $story->image) }}" width="50" alt="User Image"></td>
            <td>{{ $story->studentname }}</td>
            <td>{{ $story->position }}</td>
            <td>{{ $story->companyname }}</td>
            <td>{{ $story->userid }}</td>
            <td>
                <form action="{{ route('success.destroy', $story->id) }}" method="POST" onsubmit="return confirm('Are you sure to delete?')">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>


 <style>

    table {
      width: 100%;
      border-collapse: collapse;
      background-color: #fff;
      box-shadow: 0 0 10px rgba(0,0,0,0.05);
    }

    th, td {
      padding: 12px 15px;
      border: 1px solid #dee2e6;
      text-align: left;
    }

    th {
      background-color: #343a40;
      color: #fff;
    }

    img {
      width: 50px;
      height: 50px;
      object-fit: cover;
      border-radius: 50%;
    }

    .actions button {
      margin-right: 5px;
      padding: 5px 10px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }

    .edit-btn {
      background-color: #007bff;
      color: white;
    }

    .delete-btn {
      background-color: #dc3545;
      color: white;
    }

    @media (max-width: 768px) {
      table, thead, tbody, th, td, tr {
        display: block;
      }

      thead {
        display: none;
      }

      tr {
        margin-bottom: 15px;
      }

      td {
        text-align: right;
        position: relative;
        padding-left: 50%;
      }

      td::before {
        content: attr(data-label);
        position: absolute;
        left: 15px;
        width: 45%;
        padding-right: 10px;
        font-weight: bold;
        text-align: left;
      }
    }
  </style>


@endsection