<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{ config('app.name') }}</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"
          integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog=="
          crossorigin="anonymous"/>


    <link rel="stylesheet" href="{{asset('plugins/boo')}}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="{{asset('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">

    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('dist/css/adminlte.min.css')}}">

    <link rel="shortcut icon" href="{{ asset('dist/img/AdminLTELogo.png') }}">
    <link rel="stylesheet" href="{{asset('plugins/select2/css/select2.min.css')}}">
    <link rel="stylesheet" href="{{asset('plugins/toastr/toastr.min.css')}}">
    @livewireStyles
    @yield('third_party_stylesheets')

    @stack('page_css')
    <style>
        .active-link {
            background-color: rgba(226, 241, 253, 0.15) !important;
        }
    </style>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

    @livewire('layouts.top-nav-bar')

    @livewire('layouts.side-bar')

<!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <section class="content">
            @yield('content')
        </section>
    </div>

    <!-- Main Footer -->
    <footer class="main-footer">
        <div class="float-right d-none d-sm-block">
            <b>Versão</b> 1.0.0
        </div>
        <strong>Copyright &copy; 2021 <a href="#">Kinsari Sistemas de Informação</a>.</strong>
    </footer>
</div>

<script src="{{ mix('js/app.js') }}"></script>
@include('sweetalert::alert')
<script src="{{asset('plugins/select2/js/select2.full.js')}}"></script>
<script src="{{asset('plugins/select2/js/i18n/pt.js')}}"></script>
<script src="{{asset('plugins/toastr/toastr.min.js')}}"></script>
@livewireScripts
@yield('third_party_scripts')

@stack('page_scripts')
@stack('scripts')
</body>
</html>
