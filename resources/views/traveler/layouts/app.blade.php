<!doctype html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	@yield('head')

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('traveler/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('traveler/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="{{asset('jquery filtered image gallery/css/style.css') }}" />
    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('traveler/css/style.css') }}" rel="stylesheet">
    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
    var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
    s1.async=true;
    s1.src='https://embed.tawk.to/6656cafe981b6c5647760534/1hv1ght9d';
    s1.charset='UTF-8';
    s1.setAttribute('crossorigin','*');
    s0.parentNode.insertBefore(s1,s0);
    })();
    </script>
    <!--End of Tawk.to Script-->
	@yield('style')
</head>
<body>
	@include('traveler/inc/alert')
	@include('traveler/inc/modals')
	@include('traveler/inc/nav')
    @yield('content')
	@include('traveler/inc/footer')
	<!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="fa fa-angle-double-up"></i></a>
	<!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('traveler/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('traveler/lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('traveler/lib/tempusdominus/js/moment.min.js') }}"></script>
    <script src="{{ asset('traveler/lib/tempusdominus/js/moment-timezone.min.js') }}"></script>
    <script src="{{ asset('traveler/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js') }}"></script>

    <!-- Contact Javascript File -->
    <script src="{{ asset('traveler/mail/jqBootstrapValidation.min.js') }}"></script>
    <script src="{{ asset('traveler/mail/contact.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{asset('jquery filtered image gallery/js/filter-tags.js')}}"></script>
    <script src="{{ asset('traveler/js/main.js') }}"></script>
	@yield('script')
</body>
</html>
