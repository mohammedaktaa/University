<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{asset('images/favicon.png')}}" sizes="24x24">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>
        UniMa
        |
        @yield('title')

    </title>
    <link rel="stylesheet" href="{{asset('css/font-awesome.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/font-icons.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('vendor/simple-line-icons/css/simple-line-icons.css')}}">
    <link rel="stylesheet" href="{{asset('css/animate.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('vendor/whirl/dist/whirl.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}" type="text/css">
    @if($dir=='rtl')
        <link rel="stylesheet" href="{{asset('css/bootstrap-rtl.css')}}" id="bscss" type="text/css">
        <link rel="stylesheet" href="{{asset('css/app-rtl.css')}}" id="maincss">
        <link rel="stylesheet" href="{{asset('css/custom-rtl.css')}}" type="text/css">
        {{--        <link rel="stylesheet" href="{{asset('css/styles-rtl.css')}}" type="text/css">--}}
    @else
        <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}" type="text/css">
        <link rel="stylesheet" href="{{asset('css/app.css')}}" type="text/css">
        <link rel="stylesheet" href="{{asset('css/custom.css')}}" type="text/css">
        {{--        <link rel="stylesheet" href="{{asset('css/styles.css')}}" type="text/css">--}}
    @endif
    <link rel="stylesheet" href="{{asset('css/theme-h.css')}}" id="theme">
    <link rel="stylesheet" href="{{asset("datatable/datatable-$dir.css")}} " type="text/css"/>
    @yield('styles')
    <link rel="stylesheet" href="{{asset('css/loaders.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/loader.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/bootstrap-slider.min.css')}}" type="text/css">
    <style>
        @font-face {
            font-family: "omar";
            src: url('../../../../../fonts/EUROCAPS.ttf');
        }

        @font-face {
            font-family: "arabic";
            src: url('../../../../../fonts/arabic.ttf');
        }
        @if($dir=='rtl')
         * {
            font-family: 'arabic';
        }

        body {
            font-family: 'arabic';
            text-transform: none !important;
        }

        @else
        * {
            font-family: 'omar';
        }

        body {
            font-family: 'omar';
            text-transform: none !important;
        }
        @endif
    </style>
</head>
<body class="">
<div class="loader">
    <div class="loader-inner ball-grid-pulse">
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
    </div>
</div>
<div class="wrapper">
    @include('admin::layouts.header')
    <section id="content" style="background-color: #f5f7fa">
        <div class="loaders" hidden>
            <div class="ball-pulse-sync">
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
        <div id="content-ajax" class="" style="min-height: 100vh">
            @yield('content')
        </div>
    </section>
    @yield('modal')
    @include('admin::layouts.footer')
</div>
<!-- =============== VENDOR SCRIPTS ===============-->
<script src="{{asset('js/jquery.js')}}"></script>
<script src="{{asset('vendor/modernizr/modernizr.custom.js')}}"></script>
<script src="{{asset('vendor/matchMedia/matchMedia.js')}}"></script>
<script src="{{asset('js/jquery.history.js?v=2')}}"></script>
<script src="{{asset('js/jquery.history.min.js')}}"></script>
<script src="{{asset('js/jquery.nestable.js')}}"></script>

<script src="{{asset('vendor/jQuery-Storage-API/jquery.storageapi.js')}}"></script>
{{--<script src="{{asset('vendor/jquery.easing/js/jquery.easing.js')}}"></script>--}}

<script>
    var success = "@lang('app.success')";
    var pickimage = "@lang('app.pick_image')";
    var pickdoc = "@lang('app.pick_doc')";
    var pick = "@lang('app.pick')";
    var del = "@lang('app.delete')";
    var dir = "{{$dir}}";
    var of = "@lang('app.of')";
    var _csrf = '{{csrf_token()}}';
    var lang = '{{$lang}}';
    var right = '{{$right}}';
    var left = '{{$left}}';
    var baseUrl = '{{localizeURL('').'/'}}';
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': _csrf
        }
    });
//    $('html').niceScroll({cursorborder:"",cursorcolor:"#FF2834",boxzoom:true});
</script>
<script src="{{asset('js/jquery.nicescroll.js')}}"></script>
<script src="{{asset('vendor/moment/min/moment-with-locales.min.js')}}"></script>
<script src="{{asset('vendor/screenfull/dist/screenfull.js')}}"></script>
<script type="text/javascript" src="{{url('js/notify.js')}}"></script>
<script type="text/javascript" src="{{url('vendor/datatable/js/jquery-request-types.js')}}"></script>
<script type="text/javascript" src="{{asset ('js/plugins.js')}}"></script>
<script type="text/javascript" src="{{asset('js/functions.js')}}"></script>
<script type="text/javascript" src="{{asset('js/index.js')}}"></script>
<script src="{{asset('js/custom.js')}}"></script>
<script src="{{asset('js/ajax-function.js')}}"></script>
{{--<script type="text/javascript" src=" {{asset('datatable/datatable.js') }}"></script>--}}
@yield('scripts')
<script src="{{asset('js/app.js')}}"></script>
<script src="{{asset('js/loaders.css.js')}}"></script>
<script src="{{asset('js/bootstrap-slider.min.js')}}"></script>


</body>
</html>
