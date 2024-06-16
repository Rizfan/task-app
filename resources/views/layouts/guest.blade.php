<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="apple-touch-icon" sizes="76x76" href=".{{ asset('./assets/img/apple-icon.png')}}" />
    <link rel="icon" type="image/png" href="{{ asset('../assets/img/favicon.png')}}" />

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <!-- Nucleo Icons -->
    <link href="{{ asset('../assets/css/nucleo-icons.css')}}" rel="stylesheet" />
    <link href="{{ asset('../assets/css/nucleo-svg.css" rel="stylesheet')}}" />
    <!-- Main Styling -->
    <link href="{{ asset('../assets/css/argon-dashboard-tailwind.css?v=1.0.1')}}" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Styles -->
    @livewireStyles
</head>

<body>
    <div class="font-sans text-gray-900 dark:text-gray-100 antialiased">
        {{ $slot }}
    </div>

    @livewireScripts


    <script>
        //darkmode check
        if (localStorage.theme === 'dark') {
            document.documentElement.classList.add('dark')
        } else {
            document.documentElement.classList.remove('dark')
        }
    </script>
</body>

</html>