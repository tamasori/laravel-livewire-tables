<label for="filter-{{ $key }}" class="mb-2">
    {{ $filter->name() }}
</label>
<input
    wire:model="filters.{{ $key }}"
    wire:key="filter-{{ $key }}"
    id="filter-{{ $key }}"
    type="date"
    @if(isset($filter->options['min']) && strlen($filter->options['min'])) min="{{ $filter->options['min'] }}" @endif
    @if(isset($filter->options['max']) && strlen($filter->options['max'])) max="{{ $filter->options['max'] }}" @endif
    class="form-control"
/>
