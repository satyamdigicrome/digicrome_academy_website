@extends('layouts.app')

@section('title',  'Digicrome')


@section('content')
@include('components.lead-form-popup')

<div class="d-flex flex-column justify-content-center align-items-center min-vh-100 bg-light text-center px-3">

    <i class="bi bi-check-circle-fill text-success display-1 mb-3"></i>
  
    <h1 class="fw-bold mb-3">Thank You!</h1>
  
    <p class="text-secondary fs-5 mb-2">
      Your submission has been received successfully.
    </p>
  
    <p class="text-muted mb-4">
      Our team will get in touch with you shortly. In the meantime, feel free to explore more about Digicrome.
    </p>
  
    <div class="d-flex flex-wrap justify-content-center gap-3">
      <a href="https://www.digicrome.com" class="btn btn-primary px-4">Go to Homepage</a>
    </div>
  
  </div>
  
@endsection