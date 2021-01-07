<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@600&display=swap" rel="stylesheet">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="{{ asset('./css/materialize.min.css') }}">

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{ asset('./css/app.css') }}">
    <!-- <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script> -->

    <!-- Floating -->
    <script type="text/javascript" src="{{ asset('frontend/assets/floating-whatsapp/jquery-3.3.1.min.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('frontend/assets/floating-whatsapp/floating-wpp.css') }}">
    <script type="text/javascript" src="{{ asset('frontend/assets/floating-whatsapp/floating-wpp.js') }}"></script>

    <!-- Stepper -->
    <!-- CSS -->
    <link rel="stylesheet" href="https://unpkg.com/materialize-stepper@3.1.0/dist/css/mstepper.min.css">
    <!-- JS -->
    <script src="https://unpkg.com/materialize-stepper@3.1.0/dist/js/mstepper.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
</head>

<body>
    <div style="z-index: 10000;" id="myButton"></div>

    @yield('content')

    <script src="{{ asset('./js/custome.js') }}"></script>
    <!-- Compiled and minified JavaScript -->
    <script src="{{ asset('./js/materialize.min.js') }}"></script>

</body>

</html>
