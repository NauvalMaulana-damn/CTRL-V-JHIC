@props(['type', 'filterType', 'nameType', 'bgColor'])

@php
$assetBase = config('app.url');
if (request()->getHost() === 'smkpgri3mlg.web.id' || request()->getHost() === 'www.smkpgri3mlg.web.id') {
$assetBase = 'https://' . request()->getHost();
}
@endphp

<button
    class="filter-btn {{ $type === $filterType ? $bgColor . ' text-white' : 'bg-gray-200 hover:bg-gray-300 text-gray-700' }} px-4 py-2 rounded-lg text-sm font-medium transition-colors"
    data-type="{{ $filterType }}">
    {{ $nameType }}
</button>
