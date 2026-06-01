@props(['url' => '/', 'icon' => '', 'twcss' => ''])

<a href="{{ $url }}" class="{{ $twcss }}">
    @if ($icon)
        <i class="fa fa-{{ $icon }}"></i>
    @endif
    {{ $slot }}
</a>
