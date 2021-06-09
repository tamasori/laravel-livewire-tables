@if ($filtersView || count($customFilters))
    <div class="row mb-2">
    @if ($filtersView)
        @include($filtersView)
    @elseif (count($customFilters))
        @foreach ($customFilters as $key => $filter)
            <div wire:key="filter-{{ $key }}" class="p-2 col-md-3">
                @if ($filter->isSelect())
                    @include('livewire-tables::bootstrap-5.includes.filters.select')
                @elseif($filter->isTextbox())
                    @include('livewire-tables::bootstrap-5.includes.filters.textbox')
                @endif
            </div>
        @endforeach
            @if (count($this->getFiltersWithoutSearch()))
                <div class="dropdown-divider"></div>

                <a
                    href="#"
                    wire:click.prevent="resetFilters"
                    class="btn btn-warning w-20"
                >
                    @lang('Clear')
                </a>
            @endif
    @endif

    </div>
@endif
