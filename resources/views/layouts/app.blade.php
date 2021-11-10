<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <meta name="viewport" content="width=device-width, initial-scale=1"> <!-- Ensures optimal rendering on mobile devices. -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge" /> <!-- Optimal Internet Explorer compatibility -->


    <meta content="" name="description">
    <meta content="" name="keywords">

{{--    <!-- Favicons -->--}}
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

{{--    <!-- Google Fonts -->--}}
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

{{--    <!-- Vendor CSS Files -->--}}
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">

{{--    <!-- Template Main CSS File -->--}}
    <link href="assets/css/style.css" rel="stylesheet">
    <title>Axel</title>

    @include('sweetalert::alert')
    @livewireStyles
</head>
<body>

{{--<!-- ======= Top Bar ======= -->--}}
<section id="topbar" class="d-none d-lg-block">
    <div class="container d-flex justify-content-between">
        <div class="contact-info">
            <i class="icofont-envelope"></i><a href="mailto:contact@example.com">axel@example.com</a>
            <i class="icofont-phone"></i> +234 098 987 564
        </div>
        <div class="social-links">
            <a href="#" class="twitter"><i class="icofont-twitter"></i></a>
            <a href="#" class="facebook"><i class="icofont-facebook"></i></a>
            <a href="#" class="instagram"><i class="icofont-instagram"></i></a>
            <a href="#" class="skype"><i class="icofont-skype"></i></a>
            <a href="#" class="linkedin"><i class="icofont-linkedin"></i></a>
        </div>
    </div>
</section>

<livewire:navigation />
{{ $slot }}
{{--<!-- ======= Footer ======= -->--}}
<livewire:footer />
{{--<!-- Vendor JS Files -->--}}
<script src="assets/vendor/jquery/jquery.min.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>
<script src="assets/vendor/jquery-sticky/jquery.sticky.js"></script>
<script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
<script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
<script src="assets/vendor/counterup/counterup.min.js"></script>
<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="assets/vendor/venobox/venobox.min.js"></script>
<script src="https://www.paypal.com/sdk/js?client-id=test"></script>
<script>paypal.Buttons().render('body');</script>

<script
    src="https://www.paypal.com/sdk/js?client-id=AWrBLGIrK1OstDSPx8k7YMb9YqrkddYy7ppaGHQYUn1D1YaxrKS3tK4RMnG_KhEwbTdO2GWTPzse_BK1">
</script>

<script>
    paypal.Buttons().render('#paypal-button-container');
    // This function displays Smart Payment Buttons on your web page.
</script>
{{--<!-- Template Main JS File -->--}}
<script src="assets/js/main.js"></script>
{{--<script type="text/javascript" src="{{ mix('js/app.js', 'vendor/canvas') }}"></script>--}}
@livewireScripts
</body>
</html>
