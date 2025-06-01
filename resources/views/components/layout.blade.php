<!DOCTYPE html>
<html lang="en" data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="{{asset('asset/favicon-3.png')}}" type="image/x-icon">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Nomad Stock Manager</title>
    <script src="https://kit.fontawesome.com/57bd6dffc2.js" crossorigin="anonymous"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Limelight&display=swap');

    </style>
</head>
<body class=" bg-slate-100">
    <x-navbar/>

    <div class="p-5 min-h-screen">
        <div class="mt-[80px]"></div>
        {{$slot}}
    </div>

    <x-footer />


</body>
</html>