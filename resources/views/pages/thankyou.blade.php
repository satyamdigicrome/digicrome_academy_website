@extends('layouts.app')

@section('title',  'Digicrome')
@php
    // Set flags to hide header and footer
    $hideHeader = true;
    $hideFooter = true;
@endphp
@push('styles')
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-18024221657"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'AW-18024221657');
</script>
<script>
  gtag('event', 'conversion', {'send_to': 'AW-18024221657/7tH2CL7qxJAcENmXz5JD'});
</script>
@endpush

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
  
    {{-- <div class="d-flex flex-wrap justify-content-center gap-3">
      <a href="https://www.digicrome.com" class="btn btn-primary px-4">Go to Homepage</a>
    </div> --}}
  
  </div>
  
@endsection