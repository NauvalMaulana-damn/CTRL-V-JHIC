@php
$author = "CTRL + V";
$title = "SMK PGRI 3 MALANG";
$desc = "Manajemen presensi online berbasis website secara mudah dan praktis.";
$image = asset('assets/skariga(300x300).jpg');
$keywords = "SMK PGRI 3 MALANG, SKARIGA, SMK PGRI, SMK PGRI MALANG, SMK PGRI 3, SMK, SMK 3 MALANG, PGRI, SMK MALANG, PGRI 3 MALANG, PGRI 3";
$lower_keywords = strtolower($keywords);
@endphp

<meta name="description" content="{{ $desc }}">
<meta name="author" content="{{ $author }}">
<meta name="keywords" content="{{ $keywords . ', ' . $lower_keywords }}">

<meta name="google-site-verification" content="">
<meta name="robots" content="index, follow">

<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- <meta name="theme-color" content=""> -->

<!-- <meta http-equiv="refresh" content="5; url=https://example.com"> -->

<meta property="og:title" content="{{ $title }}">
<meta property="og:description" content="{{ $desc }}">
<meta property="og:image" content="{{ $image }}">
<!-- <meta property="og:url" content="https://example.com"> -->

<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="{{ $title }}">
<meta name="twitter:description" content="{{ $desc }}">`
<meta name="twitter:image" content="{{ $image }}">
