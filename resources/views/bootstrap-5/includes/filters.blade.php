@if ($filtersView || count($customFilters))
    <div class="row mb-2">
    @if ($filtersView)
        @include($filtersView)
    @elseif (count($customFilters))
        @foreach ($customFilters as $key => $filter)
            <div wire:key="filter-{{ $key }}" class="p-2 col-md-3">
                @if ($filter->isSelect())
                    <label for="filter-{{ $key }}" class="mb-2">
                        {{ $filter->name() }}
                    </label>

                    <select
                        onclick="event.stopPropagation();"
                        wire:model="filters.{{ $key }}"
                        id="filter-{{ $key }}"
                        class="form-select"
                    >
                        @foreach($filter->options() as $key => $value)
                            <option value="{{ $key }}">{{ $value }}</option>
                        @endforeach
                    </select>
                @elseif($filter->isTextbox())
                    <label for="filter-{{ $key }}" class="mb-2">
                        {{ $filter->name() }}
                    </label>
                    <input type="text" wire:key="filter-{{ $key }}" wire:model="filters.{{ $key }}" id="filter-{{ $key }}" class="form-control" >
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
