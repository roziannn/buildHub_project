<!doctype html>
<html lang="zxx">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>aranoz</title>
    <link rel="icon" href="{{ asset('layout/asset/img/favicon.png') }}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('layout/asset/css/bootstrap.min.css') }}">
    <!-- animate CSS -->
    <link rel="stylesheet" href="{{ asset('layout/asset/css/animate.css') }}">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="{{ asset('layout/asset/css/owl.carousel.min.css') }}">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="{{ asset('layout/asset/css/all.css') }}">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="{{ asset('layout/asset/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('layout/asset/css/themify-icons.css') }}">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="{{ asset('layout/asset/css/magnific-popup.css') }}">
    <!-- swiper CSS -->
    <link rel="stylesheet" href="{{ asset('layout/asset/css/slick.css') }}">
    <!-- style CSS -->
    <link rel="stylesheet" href="{{ asset('layout/asset/css/style.css') }}">
</head>

<body>

    @include('user.layouts.navbar')


    @yield('contents')


    @include('user.layouts.footer')

    <!-- jquery plugins here-->
    <script src="{{ asset('layout/asset/js/jquery-1.12.1.min.js') }}"></script>
    <!-- popper js -->
    <script src="{{ asset('layout/asset/js/popper.min.js') }}"></script>
    <!-- bootstrap js -->
    <script src="{{ asset('layout/asset/js/bootstrap.min.js') }}"></script>
    <!-- easing js -->
    <script src="{{ asset('layout/asset/js/jquery.magnific-popup.js') }}"></script>
    <!-- swiper js -->
    <script src="{{ asset('layout/asset/js/swiper.min.js') }}"></script>
    <!-- swiper js -->
    <script src="{{ asset('layout/asset/js/masonry.pkgd.js') }}"></script>
    <!-- particles js -->
    <script src="{{ asset('layout/asset/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('layout/asset/js/jquery.nice-select.min.js') }}"></script>
    <!-- slick js -->
    <script src="{{ asset('layout/asset/js/slick.min.js') }}"></script>
    <script src="{{ asset('layout/asset/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('layout/asset/js/waypoints.min.js') }}"></script>
    <script src="{{ asset('layout/asset/js/contact.js') }}"></script>
    <script src="{{ asset('layout/asset/js/jquery.ajaxchimp.min.j') }}s"></script>
    <script src="{{ asset('layout/asset/js/jquery.form.js') }}"></script>
    <script src="{{ asset('layout/asset/js/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('layout/asset/js/mail-script.js') }}"></script>
    <!-- custom js -->
    <script src="{{ asset('layout/asset/js/custom.js') }}"></script>
</body>

</html>
