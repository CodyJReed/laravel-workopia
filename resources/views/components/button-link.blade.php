@props(['url' => '/', 'icon' => '', 'twcss' => '', 'block' => false])

<a href="{{ $url }}" class="{{ $twcss }} {{$block ? 'block' : ''}}">
    @if ($icon)
        <i class="fa fa-{{ $icon }}"></i>
    @endif
    {{ $slot }}
</a>
