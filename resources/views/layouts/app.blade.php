<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        
      <title>Agen | Bootstrap Agency Template</title>
      <meta name="csrf-token" content="{{ csrf_token() }}" />
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
       <style type="text/css">
           b{
            font-weight: 900 !important;
           }
           .slick-track a img{
            float: left;
            width:  100%;
            height: 100px;
            object-fit: contain;
           }
       </style>
        <livewire:styles /> 

    </head>
    <body class="antialiased">
        <livewire:navigation />
            {{ $slot }} 
        <livewire:footer />
        
        
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
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script src="{{asset('assets')}}/js/common.js"></script>


        <livewire:scripts />

        <script type="text/javascript" data-navigate-once>
            document.addEventListener('livewire:navigated', () => { 
                if (window.fathom) {
                    window.fathom.trackPageview()
                  }
            })
            
        </script>

        <script type="text/javascript">
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                beforeSend: function(xhr) {
                    $('form').find('button[type="submit"],input[type="submit"]').prop('disabled',true);
                },
                complete: function(xhr) {
                    $('form').find('button[type="submit"],input[type="submit"]').prop('disabled',false);
                },
            });
          $(function () {
          $('[data-toggle="tooltip"]').tooltip()
          $('#contact-form').on('submit',function(e){
            e.preventDefault();
            let formId = $(this).attr('id');
            // return false;
            var formData = new FormData(this);
            let res = ajaxForm(formData);
            console.log("res", res);
            if (res.success) {
                let request = {};
                request.success = true;
                $(this).trigger("reset");;
                Swal.fire({
                    title: "Thank You!",
                    text: res.msg,
                    icon: "success",
                    timer: 1500
                });
            } else {
                $('.err').remove();
                if (!res.success) {
                    let i = 1;
                    $.each(res.errors, function(index, item) {
                        let inputField = $('#' + index);
                        if (i == 1) {
                            inputField.focus();
                        }
                        inputField.after(
                            `<p class="text-danger text-start err mb-0 mt-1" >${item}</p>`);
                        i++;
                    });
                }
            }
          });
        })
          $(".popup").on("click", function() {
             
             var img=$(this).data('img');    
             $('#imagepreview').attr('src', img); // here asign the image to the modal when the user click the enlarge link
             $('#imagemodal').modal('show'); // imagemodal is the id attribute assigned to the bootstrap modal, then i use the show function
          });
        </script>
    </body>
</html>
