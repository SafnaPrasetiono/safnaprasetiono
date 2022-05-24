<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="{{ asset('/dist/app/css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('/dist/icons/css/all.css') }}">
    <link rel="stylesheet" href="{{ asset('/dist/style/css/auth.css') }}">
    <link rel="stylesheet" href="{{ asset('/dist/style/css/index.css') }}">

    @yield('head')
</head>

<body>

    <div class="auth-pages">
        @yield('pages')
    </div>

    <script src="{{ asset('/dist/style/js/jquery.js') }}"></script>
    <script src="{{ asset('/dist/style/js/popper.js') }}"></script>
    <script src="{{ asset('/dist/app/js/app.js') }}"></script>
    <script src="{{ asset('/dist/style/js/index.js') }}"></script>
    @yield('script')
</body>

</html>