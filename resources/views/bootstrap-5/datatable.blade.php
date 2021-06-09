<div class="card card-body shadow-sm table-wrapper table-responsive">
    <div
        @if (is_numeric($refresh))
            wire:poll.{{ $refresh }}ms
        @elseif(is_string($refresh))
            @if ($refresh === '.keep-alive' || $refresh === 'keep-alive')
                wire:poll.keep-alive
            @elseif($refresh === '.visible' || $refresh === 'visible')
                wire:poll.visible
            @else
                wire:poll="{{ $refresh }}"
            @endif
        @endif
        class="container-fluid p-0"
    >
        @include('livewire-tables::bootstrap-5.includes.offline')
        @include('livewire-tables::bootstrap-5.includes.sorting-pills')
{{--        @include('livewire-tables::bootstrap-5.includes.filter-pills')--}}
        @if ($showFilterDropdown)
            <hr>
            @include('livewire-tables::bootstrap-5.includes.filters')
            <hr>
        @endif
        <div class="d-md-flex justify-content-between mb-3">

            <div class="d-md-flex">
                @include('livewire-tables::bootstrap-5.includes.search')
            </div>

            <div class="d-md-flex">
                @include('livewire-tables::bootstrap-5.includes.bulk-actions')
                @include('livewire-tables::bootstrap-5.includes.per-page')
            </div>
        </div>

        @include('livewire-tables::bootstrap-5.includes.table')
        <div class="card-footer px-3 border-0 d-flex flex-column flex-lg-row align-items-center justify-content-between">
            @include('livewire-tables::bootstrap-5.includes.pagination')
        </div>
    </div>

    @isset($modalsView)
        @include($modalsView)
    @endisset
</div>
