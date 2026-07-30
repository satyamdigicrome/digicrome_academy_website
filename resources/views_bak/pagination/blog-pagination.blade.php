@if ($paginator->hasPages())
    <div class="paginations">
        <ul class="page-numbers">

            {{-- Previous --}}
            @if ($paginator->onFirstPage())
                <li><span class="page-numbers disabled">«</span></li>
            @else
                <li><a class="page-numbers" href="{{ $paginator->previousPageUrl() }}">«</a></li>
            @endif

            @php
                $current = $paginator->currentPage();
                $last = $paginator->lastPage();
            @endphp

            {{-- First Page --}}
            <li>
                @if ($current == 1)
                    <span class="page-numbers current">1</span>
                @else
                    <a class="page-numbers" href="{{ $paginator->url(1) }}">1</a>
                @endif
            </li>

            {{-- Left Dots --}}
            @if ($current > 3)
                <li><span class="page-numbers dots">...</span></li>
            @endif

            {{-- Middle Pages --}}
            @for ($i = max(2, $current - 1); $i <= min($last - 1, $current + 1); $i++)
                <li>
                    @if ($i == $current)
                        <span class="page-numbers current">{{ $i }}</span>
                    @else
                        <a class="page-numbers" href="{{ $paginator->url($i) }}">{{ $i }}</a>
                    @endif
                </li>
            @endfor

            {{-- Right Dots --}}
            @if ($current < $last - 2)
                <li><span class="page-numbers dots">...</span></li>
            @endif

            {{-- Last Page --}}
            @if ($last > 1)
                <li>
                    @if ($current == $last)
                        <span class="page-numbers current">{{ $last }}</span>
                    @else
                        <a class="page-numbers" href="{{ $paginator->url($last) }}">{{ $last }}</a>
                    @endif
                </li>
            @endif

            {{-- Next --}}
            @if ($paginator->hasMorePages())
                <li><a class="page-numbers" href="{{ $paginator->nextPageUrl() }}">»</a></li>
            @else
                <li><span class="page-numbers disabled">»</span></li>
            @endif

        </ul>
    </div>
@endif