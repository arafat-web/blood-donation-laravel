<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title> @yield('title') </title>
    <link rel="shortcut icon" href="assets/images/fav.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Merriweather&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="assets/images/fav.jpg">
    <link rel="stylesheet" href="{{ asset('client') }}/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('client') }}/assets/css/fontawsom-all.min.css">
    <link rel="stylesheet" href="{{ asset('client') }}/assets/plugins/grid-gallery/css/grid-gallery.min.css">
    <link rel="stylesheet" href="{{ asset('client') }}/assets/css/counter.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('client') }}/assets/css/style.css" />
    <script src="{{ asset('client') }}/assets/js/jquery-3.2.1.min.js"></script>
</head>

<body>

    {{-- HEADER START --}}
    @include('client.include.header')
    @yield('content')
    @include('client.include.footer')


</body>
<script src="{{ asset('client') }}/assets/js/popper.min.js"></script>
<script src="{{ asset('client') }}/assets/js/bootstrap.min.js"></script>
<script src="{{ asset('client') }}/assets/plugins/grid-gallery/js/grid-gallery.min.js"></script>
<script src="{{ asset('client') }}/assets/plugins/scroll-fixed/jquery-scrolltofixed-min.js"></script>
<script src="{{ asset('client') }}/assets/plugins/counter/multi-animated-counter.js"></script>
<script src="{{ asset('client') }}/assets/js/script.js"></script>

</html>
