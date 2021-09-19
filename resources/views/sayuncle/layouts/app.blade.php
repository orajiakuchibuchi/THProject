<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('../sayUncle/images/favicon.jpg') }}">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('../sayUncle/css/rtop.videoPlayer.1.0.1.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('../sayUncle/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('../sayUncle/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('../sayUncle/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('../sayUncle/css/custom.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('../sayUncle/css/loading.css') }}">

    @yield('style')
    @yield('head-script')
    
    <!-- Scripts -->

            <!-- Facebook Pixel Code -->
            <script>
            !function(f,b,e,v,n,t,s)
            {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
            n.callMethod.apply(n,arguments):n.queue.push(arguments)};
            if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
            n.queue=[];t=b.createElement(e);t.async=!0;
            t.src=v;s=b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t,s)}(window,document,'script',
            'https://connect.facebook.net/en_US/fbevents.js');
             fbq('init', '407484197203398'); 
            fbq('track', 'PageView');
            </script>
            <noscript>
             <img height="1" width="1" 
            src="https://www.facebook.com/tr?id=407484197203398&ev=PageView
            &noscript=1"/>
            </noscript>
            <!-- End Facebook Pixel Code -->

</head>
<body>
    <div class="loading">Loading&#8230;</div>
    @include('sayuncle.includes.header')
    
    @yield('content')
    
    @include('sayUncle.includes.footer')

<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.js"></script>
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src="{{ asset('../sayUncle/js/owl.carousel.min.js')}}"></script>

    <script src="{{ asset('../sayUncle/js/jquery.syotimer.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('../sayUncle/js/rtop.videoPlayer.1.0.1.js')}}"></script>
    
    <script src="{{ asset('../sayUncle/js/script.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>
    <script  src="{{ asset('../sayUncle/js/toastr-functions.js') }}"></script>
    <script src="/public/sayUncle/js/jquery.syotimer.min.js"></script>

    <script type="text/javascript">
        $('#simple_timer').syotimer({
            year: 2020,
            month: 11,
            day: 9,
            hour: 20,
            minute: 30
        });
    </script>
    
    <script type="text/javascript">
        $(document).ready(function(){
            $( "a.scrollLink" ).click(function( event ) {
                event.preventDefault();
                $("html, body").animate({ scrollTop: $($(this).attr("href")).offset().top }, 500);
            });
            
             $( "button.scrollLink" ).click(function( event ) {
                event.preventDefault();
                $("html, body").animate({ scrollTop: $($(this).attr("href")).offset().top }, 500);
            });
        });
        
    </script>



    @yield('script')
</body>
</html>
