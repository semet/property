<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    @vite('resources/css/app.css')
</head>

<body class="selection:bg-brand-50/10">
    {{-- Header --}}
    <x-partials.header />

    {{ $slot }}

    {{-- scroll top --}}
    <x-partials.scroll-top />
    {{-- Footer --}}
    <x-partials.footer />
    @routes
    @vite('resources/js/app.js')
</body>

</html>
