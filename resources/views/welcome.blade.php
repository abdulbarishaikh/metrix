<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        
      <title>Agen | Bootstrap Agency Template</title>

      <!-- mobile responsive meta -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
      
      <!-- theme meta -->
      <meta name="theme-name" content="agen" />
      
      <!-- ** Plugins Needed for the Project ** -->
      <!-- Bootstrap -->
      <link rel="stylesheet" href="{{asset('assets')}}/plugins/bootstrap/bootstrap.min.css">
      <!-- slick slider -->
      <link rel="stylesheet" href="{{asset('assets')}}/plugins/slick/slick.css">
      <!-- themefy-icon -->
      <link rel="stylesheet" href="{{asset('assets')}}/plugins/themify-icons/themify-icons.css">
      <!-- venobox css -->
      <link rel="stylesheet" href="{{asset('assets')}}/plugins/venobox/venobox.css">
      <!-- card slider -->
      <link rel="stylesheet" href="{{asset('assets')}}/plugins/card-slider/css/style.css">

      <!-- Main Stylesheet -->
      <link href="{{asset('assets')}}/css/style.css" rel="stylesheet">
      
      <!--Favicon-->
      <link rel="shortcut icon" href="{{asset('assets')}}/images/favicon.ico" type="image/x-icon">
      <link rel="icon" href="{{asset('assets')}}/images/favicon.ico" type="image/x-icon">
        <livewire:styles /> 

    </head>
    <body class="antialiased">
        <livewire:navigation />
        <livewire:main /> 
        <livewire:footer />
        
        <livewire:scripts />
       <!-- jQuery -->
        <script src="{{asset('assets')}}/plugins/jQuery/jquery.min.js"></script>
        <!-- Bootstrap JS -->
        <script src="{{asset('assets')}}/plugins/bootstrap/bootstrap.min.js"></script>
        <!-- slick slider -->
        <script src="{{asset('assets')}}/plugins/slick/slick.min.js"></script>
        <!-- venobox -->
        <script src="{{asset('assets')}}/plugins/venobox/venobox.min.js"></script>
        <!-- shuffle -->
        <script src="{{asset('assets')}}/plugins/shuffle/shuffle.min.js"></script>
        <!-- apear js -->
        <script src="{{asset('assets')}}/plugins/counto/apear.js"></script>
        <!-- counter -->
        <script src="{{asset('assets')}}/plugins/counto/counTo.js"></script>
        <!-- card slider -->
        <script src="{{asset('assets')}}/plugins/card-slider/js/card-slider-min.js"></script>
        <!-- google map -->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU&libraries=places"></script>
        <script src="{{asset('assets')}}/plugins/google-map/gmap.js"></script> 

        <!-- Main Script -->
        <script src="{{asset('assets')}}/js/script.js"></script>
    </body>
</html>
