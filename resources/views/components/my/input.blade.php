@props([
    'label',
    'name',
    'type',
    'defaultValue' => '',
])

<div>
    <label>{{ $label }}</label>
    <input type="{{ $type }}" name="{{ $name }}" value="{{ $errors->any() ? old($name) : $defaultValue }}" />
    @error($name)
        {{ $message }}
    @enderror
</div><br>
