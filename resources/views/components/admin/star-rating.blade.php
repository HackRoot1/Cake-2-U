@props(['rating' => 0, 'max' => 5])
@php
    $rating = (int) $rating;
@endphp
<div class="star-rating" title="{{ $rating }}/{{ $max }}">
    @for ($i = 1; $i <= $max; $i++)
        @if ($i <= $rating)
            <span class="text-warning">★</span>
        @else
            <span class="text-muted">☆</span>
        @endif
    @endfor
</div>
