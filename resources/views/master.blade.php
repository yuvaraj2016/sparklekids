<head>




<base href="{{URL::asset('/')}}" target="_top">

<title>Sparkle Kids</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta http-equiv="cache-control" content="no-cache" />
<meta http-equiv="Pragma" content="no-cache" />
<meta http-equiv="Expires" content="-1" />

<link href="{{{ URL::asset('https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900')}}}" rel="stylesheet">
<link href="{{{ URL::asset('https://fonts.googleapis.com/css?family=Fredericka+the+Great')}}}" rel="stylesheet">

<link rel="stylesheet" href="{{{ URL::asset('css/open-iconic-bootstrap.min.css')}}}">
<link rel="stylesheet" href="{{{ URL::asset('css/animate.css')}}}">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

<link rel="stylesheet" href="{{{ URL::asset('css/owl.carousel.min.css')}}}">
<link rel="stylesheet" href="{{{ URL::asset('css/owl.theme.default.min.css')}}}">
<link rel="stylesheet" href="{{{ URL::asset('css/magnific-popup.css')}}}">

<link rel="stylesheet" href="{{{ URL::asset('css/aos.css')}}}">

<link rel="stylesheet" href="{{{ URL::asset('css/ionicons.min.css')}}}">

<link rel="stylesheet" href="{{{ URL::asset('css/flaticon.css')}}}">
<link rel="stylesheet" href="{{{ URL::asset('css/icomoon.css')}}}">
<link rel="stylesheet" href="{{{ URL::asset('css/style.css')}}}">
<link rel="stylesheet" href="{{{ URL::asset('font-awesome/4.2.0/css/font-awesome.min.css')}}}" />
<script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" data-auto-replace-svg="nest"></script>



<!--<link rel="stylesheet" href="{{{ URL::asset('css/bootstrap.min.css')}}}" />
  <link rel="stylesheet" href="{{{ URL::asset('font-awesome/4.2.0/css/font-awesome.min.css')}}}" />
  <link rel="stylesheet" href="{{{ URL::asset('css/theme.min.css') }}}" class="theme-stylesheet" id="theme-style" />
  <link rel="stylesheet" href="{{{ URL::asset('fonts/fonts.googleapis.com.css')}}}" />
  <script type="text/javascript" src="{{{ URL::asset('js/jquery.2.1.1.min.js')}}}"></script>
  <script src="{{{ URL::asset('js/bootstrap.min.js')}}}"></script>
  <script src="{{{ URL::asset('js/theme.min.js')}}}"></script>-->
</head>
<body class="no-skin">
@include('header')
<div class="main-container" id="main-container">
  {{-- @include('sidebar') --}}
  <div class="main-content">
    <div class="main-content-inner">
      <div class="breadcrumbs" id="breadcrumbs">

      </div>
      @yield('content')
    </div>
  </div>
</div>
 @include('footer')

 <!--<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>
 -->

 <script src="js/jquery.min.js"></script>
 <script src="js/jquery-migrate-3.0.1.min.js"></script>
 <script src="js/popper.min.js"></script>
 <script src="js/bootstrap.min.js"></script>
 <script src="js/jquery.easing.1.3.js"></script>
 <script src="js/jquery.waypoints.min.js"></script>
 <script src="js/jquery.stellar.min.js"></script>
 <script src="js/owl.carousel.min.js"></script>
 <script src="js/jquery.magnific-popup.min.js"></script>
 <script src="js/aos.js"></script>
 <script src="js/jquery.animateNumber.min.js"></script>
 <script src="js/scrollax.min.js"></script>
 <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
 <script src="js/google-map.js"></script>
 <script src="js/main.js"></script>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.css" />
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.js"></script>
 <script>
        $('.portfolio-item').isotope({
         	itemSelector: '.item',
         	layoutMode: 'fitRows'
         });
         $('.portfolio-menu ul li').click(function(){
         	$('.portfolio-menu ul li').removeClass('active');
         	$(this).addClass('active');

         	var selector = $(this).attr('data-filter');
         	$('.portfolio-item').isotope({
         		filter:selector
         	});
         	return  false;
         });
         $(document).ready(function() {
         var popup_btn = $('.popup-btn');
         popup_btn.magnificPopup({
         type : 'image',
         gallery : {
         	enabled : true
         }
         });
         });
 </script>
</body>
