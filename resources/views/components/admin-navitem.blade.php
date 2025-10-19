@props(['href', 'logo', 'name', 'route'])

@php
$assetBase = config('app.url');
if (request()->getHost() === 'smkpgri3mlg.web.id' || request()->getHost() === 'www.smkpgri3mlg.web.id') {
$assetBase = 'https://' . request()->getHost();
}
@endphp

<a href="{{ $href }}"
    class="{{ request()->is($route) ? 'bg-blue-100' : '' }} text-blue-600 hover:bg-blue-200 flex items-center space-x-3 px-3 py-3 rounded-lg transition-colors">
    <i class="{{ $logo }}"></i>
    <span>{{ $name }}</span>
</a>
