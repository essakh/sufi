<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- Metas -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Essa Khan" />
     <!-- CSRF Token -->
<meta name="csrf-token" vale="{{ csrf_token() }}" content="{{ csrf_token() }}">

    <!-- Links -->
    <link rel="icon" type="image/png" href="#" />
    <!-- google fonts-->
    <link href="{{asset('https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800')}}" rel="stylesheet">
    <!-- Plugins CSS -->
    <link href="{{asset('css/plugin.css')}}" rel="stylesheet" />
    <!-- style CSS -->
    <link href="{{ url('/css/style.css') }}" rel="stylesheet" />
    <!-- Dashboard CSS -->
    <link href="{{asset('css/dashboard.css')}}" rel="stylesheet" />
    <!--color switcher css-->
    <link rel="stylesheet" href="{{asset('css/skin-aqua.css')}}" media="screen" id="style-colors" />
    <!-- Document Title -->
    <title>Authentic Sufism</title>


</head>

<body>
    <!--Page Wrapper starts-->
    <div class="page-wrapper fixed-footer">
        @include('inc.navbar')
        @include('inc.messages')
        @yield('content')
        <!-- Scroll to top starts-->
        <span class="scrolltotop"><i class="ion-arrow-up-c"></i></span>
        <!-- Scroll to top ends-->
    </div>
    <!--Page Wrapper ends-->
    <!--Footer Starts-->
    @include('inc.footer')
    <!--Footer ends-->


    <!--Scripts starts-->
    <!--plugin js-->
    <script src="{{asset('js/plugin.js')}}"></script>
    <!--google maps-->
    <script
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD_8C7p0Ws2gUu7wo0b6pK9Qu7LuzX2iWY&amp;libraries=places&amp;callback=initAutocomplete">
    </script>
    <!--Main js-->
    <script src="{{asset('js/main.js')}}"></script>
    <!--Scripts ends-->


    <script src="{{asset('//cdn.ckeditor.com/4.13.1/standard/ckeditor.js')}}"></script>
    <script>
        CKEDITOR.replace( 'article-ckeditor' );
    </script>
</body>
</html>
