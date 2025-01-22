<!DOCTYPE html>
<html lang="en" class="dark">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Nepal Esports Association - NESA</title>
    <style>
        [x-cloak] {
            display: none !important;
        }

    </style>
    <link rel="stylesheet" href="css/style.css" />
    <link rel="shortcut icon" href="{{ asset('img/logo/dark-nesa.png') }}" type="image/x-icon">
    {{-- <link rel="stylesheet" href="/public/css/output.css" /> --}}

    <script src="https://kit.fontawesome.com/0a09f83869.js" crossorigin="anonymous"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

    <script src="js/script.js"></script>
    @stack('headScripts')
    @filamentStyles
    @vite(['resources/css/app.css'])
</head>
<body class="font-open-sans">
    <div class="relative px-10 md:px-20 xl:px-32 pb-5 min-w-screen w-full min-h-svh h-full text-white bg-background">
        <x-nav></x-nav>
        {{ $slot }}
        <x-footer></x-footer>
    </div>
    @filamentScripts
    @vite('resources/js/app.js')
</body>
@stack('scripts')
</html>
