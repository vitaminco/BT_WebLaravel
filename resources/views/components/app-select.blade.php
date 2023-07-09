@php
    $label = $attributes['label'] ?? '';
    $name = $attributes['name'] ?? '';
    $value = $attributes['value'] ?? '';
    //giữ lại giá trị cũ khi lõi
    $old_value = old($name);
    $value = empty($old_value) ? $value : $old_value;
@endphp
<div class="mt-3">
    <label class="form-label" for="">{{ $label }}</label>

    <select class="form-select" name="{{ $name }}" id="{{ $name }}">
        <option value="">-- Chọn một giá trị --</option>
        @foreach ($data as $item)
            @if ($selected != null && $item->$valueMember == $selected)
                <option value="{{ $item->$valueMember }}" selected>{{ $item->$displayMember }}</option>
            @endif
            <option value="{{ $item->$valueMember }}">{{ $item->$displayMember }}</option>
        @endforeach
    </select>

    @error($name)
        <small class="text-danger font-italic">{{ $message }}</small>
    @enderror
</div>
