@extends('admin_layout.app')

@section('title', 'Add project')

@section('content')



<div class="container py-5">
  <div class="row justify-content-center">
    <div class="col-md-6">
      <form class="p-4 border rounded shadow bg-light">
        <div class="mb-3 text-center">
          <label for="imageInput" class="btn btn-primary w-100">Choose an image</label>
          <input type="file" id="imageInput" accept="image/*" hidden>
        </div>

        <div class="mb-3">
          <label for="name" class="form-label">Name:</label>
          <input type="text" id="name" name="name" class="form-control" required>
        </div>
        <div class="mb-3">
          <label for="position" class="form-label">Position:</label>
          <input type="text" id="position" name="position" class="form-control" required>
        </div>
         <div class="mb-3">
          <label for="email" class="form-label">Review Paragraph:</label>
          <input type="text" id="review paragraph" name="review paragraph" class="form-control" required>
        </div>
        <div class="mb-3">
          <label for="email" class="form-label">Sub Title:</label>
          <input type="text" id="subtitle" name="subtitle" class="form-control" required>
        </div>
         <label>Your Rating</label>
       <div class="rating">
      <input type="radio" id="star5" name="rating" value="5" required><label for="star5">★</label>
      <input type="radio" id="star4" name="rating" value="4"><label for="star4">★</label>
      <input type="radio" id="star3" name="rating" value="3"><label for="star3">★</label>
      <input type="radio" id="star2" name="rating" value="2"><label for="star2">★</label>
      <input type="radio" id="star1" name="rating" value="1"><label for="star1">★</label>
    </div>
        <div class="d-grid">
          <button type="submit" class="btn btn-success">Submit your testimonial</button>
        </div>
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
        <th>Position</th>
        <th>Package</th>
        <th>User ID</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td data-label="Image"><img src="https://via.placeholder.com/50" alt="User Image"></td>
        <td data-label="Name">Jane Doe</td>
        <td data-label="Position">Software Engineer</td>
        <td data-label="Package">$90,000</td>
        <td data-label="User ID">U12345</td>
        <td class="actions" data-label="Actions">
      
          <button class="delete-btn">Delete</button>
        </td>
      </tr>
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