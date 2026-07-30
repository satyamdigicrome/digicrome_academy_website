@extends('admin_layout.app')

@section('title', 'Add project')

@section('content')



<div class="container py-5">
  <div class="row justify-content-center">
    <div class="col-md-6">
      <form action="{{ route('testimonials.store') }}" method="POST" enctype="multipart/form-data" class="p-4 border rounded shadow bg-light">
        @csrf
    
        <div class="mb-3">
            <label for="tagline" class="form-label">Tagline</label>
            <input type="text" id="tagline" name="tagline" class="form-control" required>
        </div>
    
        <div class="mb-3">
            <label for="review" class="form-label">Review</label>
            <textarea id="review" name="review" class="form-control" rows="4" required></textarea>
        </div>
    
        <div class="mb-3">
            <label for="rating" class="form-label">Rating (1 to 5)</label>
            <input type="number" id="rating" name="rating" min="1" max="5" class="form-control" required>
        </div>
    
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" id="name" name="name" class="form-control" required>
        </div>
    
        <div class="mb-3">
            <label for="profession" class="form-label">Profession</label>
            <input type="text" id="profession" name="profession" class="form-control" required>
        </div>
    
        <div class="mb-3">
            <label for="image" class="form-label">Image (optional)</label>
            <input type="file" id="image" name="image" accept="image/*" class="form-control">
        </div>
    
        <button type="submit" class="btn btn-success">Add Testimonial</button>
    </form>
    
    </div>
  </div>
</div>
<style>
    .rating {
      display: flex;
      flex-direction: row-reverse;
      justify-content: start;
    }
    .rating input {
      display: none;
    }

    .rating label {
      font-size: 30px;
      color: #ccc;
      cursor: pointer;
      transition: color 0.2s;
    }

    .rating input:checked ~ label,
    .rating label:hover,
    .rating label:hover ~ label {
      color: #ffd700;
    }
</style>

 <h2>User Testimonials Stories</h2>
 <table>
  <thead>
    <tr>
      <th>Image</th>
      <th>Name</th>
      <th>Profession</th>
      <th>Tagline</th>
      <th>Rating</th>
      <th>User ID</th>
      <th>Actions</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($testimonials as $testimonial)
    <tr>
      <td data-label="Image">
        @if($testimonial->image)
          <img src="{{ asset('storage/' . $testimonial->image) }}" alt="User Image" style="width:50px; height:50px; border-radius:50%;">
        @else
          <img src="https://via.placeholder.com/50" alt="No Image" style="border-radius:50%;">
        @endif
      </td>
      <td data-label="Name">{{ $testimonial->name }}</td>
      <td data-label="Profession">{{ $testimonial->profession }}</td>
      <td data-label="Tagline">{{ $testimonial->tagline }}</td>
      <td data-label="Rating">{{ $testimonial->rating }}/5</td>
      <td data-label="User ID">{{ $testimonial->user_id }}</td>
      <td class="actions" data-label="Actions">
        <form action="{{ route('testimonial.destroy', $testimonial->id) }}" method="POST">
          @csrf
          @method('DELETE')
          <button type="submit" class="btn btn-danger btn-sm delete-btn">Delete</button>
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