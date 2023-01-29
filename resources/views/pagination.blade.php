@if ($paginator->hasPages())
  <nav role="navigation" aria-label="Pagination Navigation" class="d-flex align-items-center mt-3">
    {{-- Previous Page Link --}}
    @if ($paginator->onFirstPage())
      <button class="btn-info" disabled>
        {!! __('pagination.previous') !!}
      </button>
    @else
      <a href="{{ $paginator->previousPageUrl() }}" rel="prev" class="btn-info">
        {!! __('pagination.previous') !!}
      </a>
    @endif

    {{-- Next Page Link --}}
    @if ($paginator->hasMorePages())
      <a href="{{ $paginator->nextPageUrl() }}" rel="next" class="ms-2 btn-info">
        {!! __('pagination.next') !!}
      </a>
    @else
      <button class="ms-2 btn-info" disabled>
        {!! __('pagination.next') !!}
      </button>
    @endif
  </nav>
@endif
