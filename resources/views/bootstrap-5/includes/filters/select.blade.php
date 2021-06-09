<label for="filter-{{ $key }}" class="mb-2">
    {{ $filter->name() }}
</label>

<select
    onclick="event.stopPropagation();"
    wire:model="filters.{{ $key }}"
    id="filter-{{ $key }}"
    @if($filter->multiple) multiple="multiple" @endif
>
    @foreach($filter->options() as $key => $value)
        <option value="{{ $key }}">{{ $value }}</option>
    @endforeach
</select>
