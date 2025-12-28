@props(['items' => []])
<ul class="nav nav-pills mb-3">
    @foreach($items as $item)
        @php $isActive = request()->routeIs($item['route'] ?? ''); @endphp
        <li class="nav-item">
            <a class="nav-link {{ $isActive ? 'active' : '' }}" href="{{ $item['url'] ?? '#' }}">{{ $item['label'] }}</a>
        </li>
    @endforeach
</ul>