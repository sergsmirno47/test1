@props([
'label',
'name',
'options',
'text' => '',
'selected' => '',
])


<div>
    <label>{{ $label }}</label>
    <select name="{{ $name }}" required>
        @foreach(json_decode(html_entity_decode($options)) as $option)
            <option value="{{ $option->id }}" {{ ($option->id == $selected ? ' selected ' : '') }}>
                {{ $option->$text }}
            </option>
        @endforeach
    </select>
    @error($name)
    {{ $message }}
    @enderror
</div><br>
