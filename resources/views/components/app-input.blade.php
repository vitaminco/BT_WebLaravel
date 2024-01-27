@php
    $label = $attributes['label'] ?? '';
    $name = $attributes['name'] ?? '';
    $value = $attributes['value'] ?? '';
    $type = $attributes['type'] ?? 'text';
    //giữ lại giá trị cũ khi lõi
    $old_value = old($name);
    $value = empty($old_value) ? $value : $old_value;
@endphp
<div class="mt-3">

    <label class="form-label" for="">{{ $label }}</label>
    <input type="{{ $type }}" class="form-control" name="{{ $name }}" id="{{ $name }}"
        value="{{ $value }}" placeholder="{{ $label }}" />

    @error($name)
        <small class="text-danger font-italic">{{ $message }}</small>
    @enderror
</div>
