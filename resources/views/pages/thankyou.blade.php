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
  gtag('event', 'conversion', {'send_to': 'AW-18024221657/yG9QCPC93qUcENmXz5JD'});
</script>
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window, document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '874727045237562');
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=874727045237562&ev=PageView&noscript=1"
/></noscript>
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-MLQN7DF5');</script>
<!-- End Google Tag Manager -->
<script>
  gtag('event', 'conversion', {'send_to': 'AW-18024221657/ReJbCPmmku0cENmXz5JD'});
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
  <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MLQN7DF5"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
@endsection