<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="uza - Model Agency HTML5 Template">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title>Sarana Darma Wisata</title>

    <!-- Favicon -->
    <link rel="icon" href="{{URL::asset('assets/img/core-img/logo.png') }}">

    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="{{ URL::asset('assets/style.css') }}">

</head>

<body>
    @include('layouts.nav')

        @yield('content')

    @include('layouts.footer')

    <!-- jQuery js -->
    <script src="{{ URL::asset('assets/js/jquery.min.js') }}"></script>
    <!-- Popper js -->
    <script src="{{ URL::asset('assets/js/popper.min.js') }}"></script>
    <!-- Bootstrap js -->
    <script src="{{ URL::asset('assets/js/bootstrap.min.js') }}"></script>
    <!-- All js -->
    <script src="{{ URL::asset('assets/js/uza.bundle.js') }}"></script>
    <!-- Active js -->
    <script src="{{ URL::asset('assets/js/default-assets/active.js') }}"></script>

</body>

</html>