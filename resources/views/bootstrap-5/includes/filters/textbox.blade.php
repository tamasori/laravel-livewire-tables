<label for="filter-{{ $key }}" class="mb-2">
    {{ $filter->name() }}
</label>
<input type="text" wire:key="filter-{{ $key }}" wire:model="filters.{{ $key }}" id="filter-{{ $key }}" class="form-control" >
