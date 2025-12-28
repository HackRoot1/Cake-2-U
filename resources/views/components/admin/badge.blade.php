@props(['type' => 'secondary'])
@php
    if ($type === 'success') {
        $classes = 'badge bg-success';
    } elseif ($type === 'warning') {
        $classes = 'badge bg-warning text-dark';
    } elseif ($type === 'danger') {
        $classes = 'badge bg-danger';
    } elseif ($type === 'info') {
        $classes = 'badge bg-info text-dark';
    } else {
        $classes = 'badge bg-secondary';
    }
@endphp

<span {{ $attributes->merge(['class' => $classes]) }}>{{ $slot }}</span>
