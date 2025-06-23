@php
    $segments = Request::segments();
    $segmentCount = count($segments);
@endphp

@if ($segmentCount > 0)
<nav aria-label="breadcrumb" class="breadcrumb-container">
    <ol class="breadcrumb mb-0">
        <li class="breadcrumb-item"><a href="/">Home</a></li>

        @foreach ($segments as $index => $segment)
            @php
                $name = ucwords(str_replace('-', ' ', $segment));
                $path = implode('/', array_slice($segments, 0, $index + 1));
            @endphp

            @if ($index + 1 < $segmentCount)
                <li class="breadcrumb-item">
                    <a href="/{{ $path }}">{{ $name }}</a> {{-- ✅ RELATIVE URL --}}
                </li>
            @else
                <li class="breadcrumb-item active" aria-current="page">{{ $name }}</li>
            @endif
        @endforeach
    </ol>
</nav>
@endif
