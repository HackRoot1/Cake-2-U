@props(['label' => null, 'type' => 'text', 'name' => null, 'value' => null, 'help' => null])
<div class="mb-3">
    @if($label)
        <label class="form-label">{{ $label }}</label>
    @endif
    <input type="{{ $type }}" name="{{ $name }}" value="{{ $value }}" {{ $attributes->merge(['class' => 'form-control']) }}>
    @if($help)
        <div class="form-text">{{ $help }}</div>
    @endif
</div>