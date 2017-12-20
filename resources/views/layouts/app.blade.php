<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<!-- <head> -->
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
         <title>{{ config('app.name', 'Laravel') }}</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">


     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body class="theme-red">
        @role('admin')
            @include('admin.layouts.headadmin')
            @include('admin.layouts.sidebar')
        @endrole
    <section class="content">
        <div class="container-fluid">
        @yield('content')
        </div>
    </section>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <!-- <script src="{{ asset('/js/admin.js') }}"></script> -->
    <script src="{{ asset('/js/demo.js') }}"></script>

</body>
</html>
