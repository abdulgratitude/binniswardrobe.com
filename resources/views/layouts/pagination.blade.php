@if ($paginator->hasPages())
    <div class="py-3 float-right">
        <nav aria-label="Page navigation ">
            <ul class="pagination">
                {{-- Previous Page Link --}}
                @if ($paginator->onFirstPage())
                    <li class="page-item disabled"><a class="page-link" href="javascript:void(0);">Previous</a></li>
                @else
                    <li class="page-item "><a class="page-link" href="{{ $paginator->previousPageUrl() }}">Previous</a></li>
                @endif


                {{-- Pagination Elements --}}
                @foreach ($elements as $element)
                    {{-- "Three Dots" Separator --}}
                    @if (is_string($element))
                        <li class="page-item disabled"><a class="page-link">{{ $element }}</a></li>
                    @endif

                    {{-- Array Of Links --}}
                    @if (is_array($element))
                        @foreach ($element as $page => $url)
                            @if ($page == $paginator->currentPage())
                                <li class="page-item active"><span class="page-link">{{ $page }}</span></li>
                            @else
                                <li class="page-item"><a class="page-link" href="{{ $url }}">{{ $page }}</a></li>
                            @endif
                        @endforeach
                    @endif
                @endforeach


                {{-- Next Page Link --}}
                @if ($paginator->hasMorePages())
                    <li class="page-item "><a class="page-link" href="{{ $paginator->nextPageUrl() }}">Next</a></li>
                @else
                    <li class="page-item disabled"><a class="page-link" href="javascript:void(0);">Next</a></li>
                @endif
            </ul>
        </nav>
    </div>
@endif





