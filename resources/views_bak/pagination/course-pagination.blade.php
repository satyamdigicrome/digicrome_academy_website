@if ($paginator->hasPages())
    <div class="course-pagination-wrapper">

        {{-- Left Side: Page Info --}}
        <div class="pagination-info">
            Page {{ $paginator->currentPage() }} of {{ $paginator->lastPage() }}
        </div>
        <ul class="pagination-list">
            @php
                $current = $paginator->currentPage();
                $last = $paginator->lastPage();
            @endphp
            @for ($i = 1; $i <= $last; $i++)
                @if (
                    $i == 1 ||
                    $i == $last ||
                    ($i >= $current - 1 && $i <= $current + 1)
                )
                    <li>
                        @if ($i == $current)
                            <span class="active">{{ $i }}</span>
                        @else
                            <a href="{{ $paginator->url($i) }}">{{ $i }}</a>
                        @endif
                    </li>
                @elseif ($i == 2 && $current > 3)
                    <li><span class="dots">...</span></li>
                @elseif ($i == $last - 1 && $current < $last - 2)
                    <li><span class="dots">...</span></li>
                @endif

            @endfor

            @if ($paginator->hasMorePages())
                <li>
                    <a class="next-btn" href="{{ $paginator->nextPageUrl() }}">›</a>
                </li>
            @endif
        </ul>
    </div>
@endif