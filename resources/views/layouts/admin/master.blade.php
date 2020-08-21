<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title') {{ config('app.name', ' || Lara Blog Vue')  }}</title>

    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

</head>
<body class="hold-transition sidebar-mini">

@if(Auth::user()->status == 'active')

    <div class="wrapper" id="app">

        @includeIf('admin.components.header')

        @includeIf('admin.components.left-sidebar')

            <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <router-view></router-view>
        </div>
        <!-- /.content-wrapper -->

        @includeIf('admin.components.footer')

    </div>
    <!-- ./wrapper -->

@endif


    <!-- REQUIRED SCRIPTS -->
    <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
