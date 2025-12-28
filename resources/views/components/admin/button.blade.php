@props(['variant' => 'primary', 'size' => 'md'])
@php
    $base = 'btn';
    $variantClass = $variant === 'primary' ? 'btn-primary' : ($variant === 'secondary' ? 'btn-secondary' : ($variant === 'success' ? 'btn-success' : ($variant === 'danger' ? 'btn-danger' : 'btn-outline-secondary')));
    $sizeClass = $size === 'sm' ? 'btn-sm' : ($size === 'lg' ? 'btn-lg' : '');
@endphp
<button {{ $attributes->merge(['class' => trim("$base $variantClass $sizeClass")]) }}>{{ $slot }}</button>