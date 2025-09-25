<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'SMK PGRI 3 Malang - Success by Discipline' }}</title>
    <!-- Libraries -->
    @vite(['resources/css/app.css'])
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
</head>

<body class="bg-[#F8F8F8] m-0 p-0 overflow-x-hidden">
    <x-b2t></x-b2t>
    <x-header></x-header>
    {{ $slot }}
    <x-sidebar></x-sidebar>
    <x-footer></x-footer>
    @vite(['resources/ts/app.ts'])
</body>

</html>
