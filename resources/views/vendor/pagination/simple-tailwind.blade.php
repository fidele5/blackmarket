@if ($paginator->hasPages())
    <nav class="pagination text-left hidden-xs-down">
        <div class="column">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <span class="btn btn-outline-info" aria-disabled="true">
                    <i class="icon-arrow-left"></i>
                </span>
            @else
                <a href="{{ $paginator->previousPageUrl() }}" rel="prev" class="btn btn-outline-info">
                    <i class="icon-arrow-left"></i>
                </a>
            @endif
        </div>
        <div class="column text-center">
            <ul class="pages">
                {{-- Pagination Elements --}}
                @foreach ($elements as $element)
                    {{-- "Three Dots" Separator --}}
                    @if (is_string($element))
                        <li><span>{{ $element }}</span></li>
                    @endif

                        {{-- Array Of Links --}}
                    @if (is_array($element))
                        @foreach ($element as $page => $url)
                            @if ($page == $paginator->currentPage())
                                <li class="active"><a class="#">{{ $page }}</a></li>
                            @else
                                <li><a href="{{ $url }}">{{ $page }}</a></li>
                            @endif
                        @endforeach
                    @endif
                @endforeach
            </ul>
        </div>
        <div class="column text-right hidden-xs-down">
            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <a href="{{ $paginator->nextPageUrl() }}" rel="next" class="btn btn-outline-info">
                    <i class="icon-arrow-right"></i>
                </a>
            @else
                <span class="btn btn-outline-info">
                    <i class="icon-arrow-right"></i>
                </span>
            @endif
        </div>
    </nav>
@endif
