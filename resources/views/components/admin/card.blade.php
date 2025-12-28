@props(['title' => null, 'subtitle' => null, 'class' => ''])
<div {{ $attributes->merge(['class' => trim('card ' . $class)]) }}>
    @if($title)
        <div class="card-body">
            <h5 class="card-title">{{ $title }}</h5>
            @if($subtitle)
                <p class="text-muted">{{ $subtitle }}</p>
            @endif
            {{ $slot }}
        </div>
    @else
        {{ $slot }}
    @endif
</div>