@extends('layouts.app')

@section('title',  'Digicrome')


@section('content')


<div class="container text-center">
        <h1>Thank You!</h1>
        <p>Your form has been submitted successfully.</p>
    </div>

    @if(session('brochure'))
        <script>
            // Automatically trigger file download
            window.onload = function () {
                const link = document.createElement('a');
                link.href = "{{ session('brochure') }}";
                link.download = ''; // Let browser handle file name
                document.body.appendChild(link);
                link.click();
                document.body.removeChild(link);
            }
        </script>
    @endif
@endsection