<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{asset('images/icons/me.png')}}" sizes="16x16">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link rel="stylesheet" href="{{asset('css/app/animate.css')}}">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="{{asset('css/app/icomoon.css')}}">
    <link rel="stylesheet" href="{{asset('css/font-icons.css')}}">
    <link rel="stylesheet" href="{{asset('css/font-awesome.css')}}">
    <!-- Simple Line Icons -->
    <link rel="stylesheet" href="{{asset('css/app/simple-line-icons.css')}}">
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="{{asset('css/app/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/app/owl.theme.default.min.css')}}">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="{{asset('css/bootstrap-datepicker3.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/bootstrap-datetimepicker.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/app/style.css')}}">
    @if($dir=='rtl')
        <link rel="stylesheet" href="{{asset('css/style2-rtl.css')}}" type="text/css">
        <link rel="stylesheet" href="{{asset('css/bootstrap-rtl.css')}}" id="bscss" type="text/css">
        <link rel="stylesheet" href="{{asset('css/app-rtl.css')}}" id="maincss">
        <link rel="stylesheet" href="{{asset('css/tabs-rtl.css')}}" type="text/css">
        <link rel="stylesheet" href="{{asset('css/app/custom-rtl.css')}}">
    @else
        <link rel="stylesheet" href="{{asset('css/style2.css')}}" type="text/css">
        <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}" type="text/css">
        <link rel="stylesheet" href="{{asset('css/app.css')}}" type="text/css">
        <link rel="stylesheet" href="{{asset('css/tabs.css')}}" type="text/css">
        <link rel="stylesheet" href="{{asset('css/app/custom.css')}}">
    @endif
    <link rel="stylesheet" href="{{asset('css/app/blue.css')}}">
    <link rel="stylesheet" href="{{asset('css/select2.css')}}">
    <link rel="stylesheet" href="{{asset('css/select2-bootstrap.css')}}">
    {{--    <link rel="stylesheet" href="{{asset('css/fullcalendar.print.css')}}">--}}
    <link rel="stylesheet" href="{{asset('css/fullcalendar.css')}}">
    <link rel="stylesheet" href="{{asset('css/custom.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/loaders.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/loader.css')}}" type="text/css">
    <style>
        body {
            font-family: "Source Sans Pro", "JF Flat Regular" !important;
        }

    </style>
</head>
<body style="background-image:url('images/plum_blossom_517823.jpg');background-attachment: fixed;background-repeat: no-repeat" >
<div  id="wrappers">
    @include('layouts.header')
    @yield('content')
    @include('layouts.footer')
</div>
<!-- Scripts -->
<!-- jQuery -->
<script src="{{asset('js/app/jquery.min.js')}}"></script>
<script>
    var dir = "{{$dir}}";
    var update = "";
    var del = "@lang('app.delete')";
    var _csrf = '{{csrf_token()}}';
    var Lang = '{{$lang}}';
    var right = '{{$right}}';
    var left = '{{$left}}';
    var baseUrl = '{{localizeURL('').'/'}}';
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': _csrf,
        }
    });
</script>
<script src="{{asset('js/Moment.js')}}"></script>
<script src="{{asset('js/moment-with-locales.min.js')}}"></script>
<!-- jQuery Easing -->
<script src="{{asset('js/app/jquery.easing.1.3.js')}}"></script>
<!-- Bootstrap -->
<script src="{{asset('js/app/bootstrap.min.js')}}"></script>
<!-- Waypoints -->
<script src="{{asset('js/app/jquery.waypoints.min.js')}}"></script>
<!-- Owl Carousel -->
<script src="{{asset('js/app/owl.carousel.min.js')}}"></script>
<script src="{{asset('vendor/jquery.steps/build/jquery.steps.js')}}"></script>
<script src="{{asset('js/app/custom.js')}}"></script>
<script src="{{asset('js/vue.js')}}"></script>
<script src="{{asset('js/test.js')}}"></script>
{{--<script src="https://unpkg.com/vue@2.4.4/dist/vue.js"></script>--}}
<script src="{{asset('js/tabs.js')}}"></script>
<script src="{{asset('js/select2.full.js')}}"></script>
<script src="{{asset('js/app/main.js')}}"></script>

<script src="{{asset('js/bootstrap-datetimepicker.min.js')}}"></script>
<script src="{{asset('js/bootstrap-datepicker.min.js')}}"></script>
<script src="{{asset('js/bootstrap-notify.js')}}"></script>

<script type="text/javascript" src="{{ asset('js/plugins.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/fullcalendar.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/locale-all.js') }}"></script>

<!-- Footer Scripts
============================================= -->
<script type="text/javascript" src="{{ asset('js/functions.js') }}"></script>
<script type="text/javascript" src="{{asset('js/index.js')}}"></script>
</body>
</html>
