<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <x-meta></x-meta>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @props(['title'])
    <title>{{ $title ?? 'SMK PGRI 3 Malang - Success by Discipline' }}</title>

    <!-- Libraries -->
    @vite(['resources/css/app.css', 'resources/ts/app.ts'])
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <link rel="shortcut icon" href="{{ asset('assets/skariga300rbg.png') }}" type="image/x-icon">
</head>

<body class="bg-[#F8F8F8] m-0 p-0 overflow-x-hidden">
    <x-b2t></x-b2t>

    @props(['headerTransparent' => false])
    @if (!$headerTransparent)
        <x-header :transparent="$headerTransparent"></x-header>
    @else
        <x-header :transparent="$headerTransparent"></x-header>
    @endif

    {{ $slot }}
    <x-sidebar></x-sidebar>
    <x-footer></x-footer>

    <noscript>JavaScript anda sekarang sedang dimatikan<br>Mohon aktifkan JavaScript anda agar website ini dapat berjalan.</noscript>

    <script>
        window.appConfig = {
            primaryDomain: @json(env('VITE_PRIMARY_DOMAIN', 'smkpgri3mlg.jh-beon.cloud')),
            secondaryDomain: @json(env('VITE_SECONDARY_DOMAIN', 'smkpgri3mlg.web.id')),
            currentDomain: window.location.hostname,
            appUrl: @json(config('app.url')),
            isPrimaryDomain: function() {
                const primaryDomains = [
                    this.primaryDomain,
                    'www.' + this.primaryDomain
                ];
                return primaryDomains.includes(this.currentDomain);
            },
            redirectToPrimary: function() {
                if (!this.isPrimaryDomain()) {
                    window.location.href = 'https://' + this.primaryDomain + window.location.pathname + window.location.search;
                }
            }
        };
    </script>
</body>

</html>
