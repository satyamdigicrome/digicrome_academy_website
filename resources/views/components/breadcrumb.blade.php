@php
    $segments = Request::segments();
    $segmentCount = count($segments);
@endphp

@if ($segmentCount > 0)
<nav aria-label="breadcrumb" class="breadcrumb-container">
    <ol class="breadcrumb mb-0">
        <li style="color: #ddd" class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>

        @foreach ($segments as $index => $segment)
            @php
                $name = ucwords(str_replace('-', ' ', $segment));
                $path = implode('/', array_slice($segments, 0, $index + 1));
            @endphp

            @if ($index + 1 < $segmentCount)
                <li class="breadcrumb-item">
                    <a style="color: #fff" href="{{ '/' . $path }}">{{ $name }}</a>
                </li>
            @else
                <li style="color: #ddd" class="breadcrumb-item active" aria-current="page">{{ $name }}</li>
            @endif
        @endforeach
    </ol>
</nav>
@endif
