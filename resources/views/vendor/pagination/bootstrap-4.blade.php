@if ($paginator->hasPages())
    <nav>
        <ul class="pagination">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <li class="page-item disabled text-white" aria-disabled="true" aria-label="@lang('pagination.previous')">
                    <span class="page-link text-white" aria-hidden="true">&laquo;</span>
                </li>
            @else
                <li class="page-item text-white">
                    <a class="page-link text-white" href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')">&laquo;</a>
                </li>
            @endif

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <li class="page-item disabled" aria-disabled="true"><span class="page-link text-white">{{ $element }}</span></li>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li class="page-item active" aria-current="page"><span class="page-link text-white">{{ $page }}</span></li>
                        @else
                            <li class="page-item"><a class="page-link text-white" href="{{ $url }}">{{ $page }}</a></li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li class="page-item text-white">
                    <a class="page-link text-white" href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')">&raquo;</a>
                </li>
            @else
                <li class="page-item disabled text-white" aria-disabled="true" aria-label="@lang('pagination.next')">
                    <span class="page-link text-white" aria-hidden="true">&raquo;</span>
                </li>
            @endif
        </ul>
        
        <div class="pagination-summary text-white">
            <p class="text-white">Showing {{ $paginator->firstItem() }} to {{ $paginator->lastItem() }} of {{ $paginator->total() }} results</p>
        </div>
    </nav>
@endif
