<!DOCTYPE html>
<html lang="en" data-theme="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="{{ asset('asset/favicon-3.png') }}" type="image/x-icon">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Nomad Stock Manager</title>
    <script src="https://kit.fontawesome.com/57bd6dffc2.js" crossorigin="anonymous"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Limelight&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,100..900;1,100..900&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Savate:ital,wght@0,200..900;1,200..900&display=swap');
    </style>
</head>

<body class=" bg-slate-50">
    @include('sweetalert2::index')
    <x-navbar />

    <div class="{{ Route::currentRouteName() == 'stock.index' ? '' : 'p-5' }} min-h-screen">
        {{-- @if (Route::currentRouteName() != 'stock.index')
        <div class="mt-[70px]"></div>            
        @endif --}}
        {{ $slot }}
    </div>

    <x-footer />


</body>

</html>
