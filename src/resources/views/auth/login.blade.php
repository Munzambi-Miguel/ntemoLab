<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{ config('app.name') }}</title>

    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"
          integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog=="
          crossorigin="anonymous"/>

    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <link rel="shortcut icon" href="{{ asset('dist/img/AdminLTELogo.png') }}">
    <style>
        .bg-cover {
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>
    @livewireStyles

</head>
<body class="hold-transition login-page jumbotron bg-cover" style="background-image: linear-gradient(to bottom, rgba(255,255,255,0.6) 0%,rgba(255,255,255,0.9) 100%), url({{asset('dist/img/fundo-padrao.jpg')}})">

@livewire('auth.login')
<!-- /.login-box -->

<script src="{{ mix('js/app.js') }}" defer></script>
@livewireScripts
</body>
</html>
