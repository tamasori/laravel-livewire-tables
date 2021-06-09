@if ($showPagination)
    @if ($paginationEnabled && $rows->lastPage() > 1)
        <div class="">
            {{ $rows->links() }}
        </div>

        <div class="fw-normal small mt-4 mt-lg-0">
            @lang('Showing')
            <strong>{{ $rows->count() ? $rows->firstItem() : 0 }}</strong>
            @lang('to')
            <strong>{{ $rows->count() ? $rows->lastItem() : 0 }}</strong>
            @lang('of')
            <strong>{{ $rows->total() }}</strong>
            @lang('results')
        </div>
    @else
        <div class="fw-normal small mt-4 mt-lg-0">
            @lang('Showing')
            <strong>{{ $rows->count() }}</strong>
            @lang('results')
        </div>
    @endif
@endif
