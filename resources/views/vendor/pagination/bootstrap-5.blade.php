@if ($paginator->hasPages())
    <nav class="d-flex justify-items-center justify-content-between">
        <div class="d-flex justify-content-between flex-fill d-sm-none">
            <ul class="pagination">
                {{-- Previous Page Link --}}
                @if ($paginator->onFirstPage())
                    <li class="page-item" aria-disabled="true">
                        <span class="page-link bg-custom border-dark link-light">Anterior</span>
                    </li>
                @else
                    <li class="page-item">
                        <a class="page-link bg-custom border-dark link-light" href="{{ $paginator->previousPageUrl() }}" rel="prev">Anterior</a>
                    </li>
                @endif

                {{-- Next Page Link --}}
                @if ($paginator->hasMorePages())
                    <li class="page-item">
                        <a class="page-link bg-custom border-dark link-light" href="{{ $paginator->nextPageUrl() }}" rel="next">Próximo</a>
                    </li>
                @else
                    <li class="page-item" aria-disabled="true">
                        <span class="page-link bg-custom border-dark link-light">Próximo</span>
                    </li>
                @endif
            </ul>
        </div>

        <div class="d-none flex-sm-fill d-sm-flex align-items-sm-center justify-content-sm-between">
            <div>
                <p class="small text-muted">
                    {!! __('Showing') !!}
                    <span class="fw-semibold">{{ $paginator->firstItem() }}</span>
                    {!! __('to') !!}
                    <span class="fw-semibold">{{ $paginator->lastItem() }}</span>
                    {!! __('of') !!}
                    <span class="fw-semibold">{{ $paginator->total() }}</span>
                    {!! __('results') !!}
                </p>
            </div>

            <div>
                <ul class="pagination">
                    {{-- Previous Page Link --}}
                    @if ($paginator->onFirstPage())
                        <li class="page-item" aria-disabled="true" aria-label="@lang('pagination.previous')">
                            <span class="page-link bg-custom border-dark link-light" aria-hidden="true">Anterior</span>
                        </li>
                    @else
                        <li class="page-item">
                            <a class="page-link bg-custom border-dark link-light" href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')">Anterior</a>
                        </li>
                    @endif

                    {{-- Pagination Elements --}}
                    @foreach ($elements as $element)
                        {{-- "Three Dots" Separator --}}
                        @if (is_string($element))
                            <li class="page-item" aria-disabled="true"><span class="page-link bg-custom border-dark link-light">{{ $element }}</span></li>
                        @endif

                        {{-- Array Of Links --}}
                        @if (is_array($element))
                            @foreach ($element as $page => $url)
                                @if ($page == $paginator->currentPage())
                                    <li class="page-item active" aria-current="page"><span class="page-link bg-custom border-dark link-light">{{ $page }}</span></li>
                                @else
                                    <li class="page-item"><a class="page-link bg-custom border-dark link-light" href="{{ $url }}">{{ $page }}</a></li>
                                @endif
                            @endforeach
                        @endif
                    @endforeach

                    {{-- Next Page Link --}}
                    @if ($paginator->hasMorePages())
                        <li class="page-item">
                            <a class="page-link bg-custom border-dark link-light" href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')">Próximo</a>
                        </li>
                    @else
                        <li class="page-item" aria-disabled="true" aria-label="@lang('pagination.next')">
                            <span class="page-link bg-custom border-dark link-light" aria-hidden="true">Próximo</span>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>
@endif
