@php
$assetBase = config('app.url');
if (request()->getHost() === 'smkpgri3mlg.web.id' || request()->getHost() === 'www.smkpgri3mlg.web.id') {
$assetBase = 'https://' . request()->getHost();
}
@endphp
