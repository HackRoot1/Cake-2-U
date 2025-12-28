@props(['id' => 'toggle', 'label' => '', 'checked' => false])
<div class="form-check form-switch">
    <input class="form-check-input" type="checkbox" role="switch" id="{{ $id }}" {{ $checked ? 'checked' : '' }}>
    @if($label)
        <label class="form-check-label" for="{{ $id }}">{{ $label }}</label>
    @endif
</div>