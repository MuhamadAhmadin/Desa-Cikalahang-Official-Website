@if ($paginator->hasPages())
    <div class="greennature-pagination">



        @foreach ($elements as $element)

            @if (is_string($element))
                <li class="disabled"><span>{{ $element }}</span></li>
            @endif


            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <span aria-current='page' class='page-numbers current'>{{ $page }}</span>
                    @else
                        <a class='page-numbers' href='{{ $url }}'>{{ $page }}</a>
                    @endif
                @endforeach
            @endif
        @endforeach



        @if ($paginator->hasMorePages())
            <a class="next page-numbers" href="{{ $paginator->nextPageUrl() }}">Next &rsaquo;</a></div>
        @else
            <li class="next page-numbers"><span>Next →</span></li>
        @endif
    </ul>
@endif

{{-- <div class="greennature-pagination">
    <span aria-current='page' class='page-numbers current'>1</span>
    <a class='page-numbers' href='page/2/index.html'>2</a>
    <a class="next page-numbers" href="page/2/index.html">Next &rsaquo;</a></div> --}}
