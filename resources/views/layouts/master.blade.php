<!doctype html>
<html class="no-js" lang="{{app()->getLocale()}}">

<head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimal-ui">
    <title> Creative | Lambda</title>
    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    {{--<link rel='stylesheet' id='open-sans-css' href='//fonts.googleapis.com/css?family=Open+Sans%3A300italic%2C400italic%2C600italic%2C300%2C400%2C600&#038;subset=latin%2Clatin-ext&#038;ver=4.1.1' type='text/css' media='all' />--}}
    {{--<link href="//fonts.googleapis.com/css?family=Roboto:300,300italic,400,400italic,700%7CRoboto+Slab:100,300,400,700&amp;subset=latin,latin" rel="stylesheet" type="text/css">--}}

    <link rel="stylesheet" href="{{asset('general/css/extras.min.css')}}">
    <link rel="stylesheet" href="{{asset('general/css/bootstrap.min.css')}}">
   @if($dir=='rtl')
    <link rel="stylesheet" href="{{asset('general/css/bootstrap-rtl.css')}}">
       @endif
    <link rel="stylesheet" href="{{asset('css/bootstrap-datetimepicker.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('general/css/theme.min.css')}}">
    <link rel="stylesheet" href="{{asset('general/css/creative.min.css')}}">
    <link rel="stylesheet" href="{{asset('general/css/custom.css')}}">
    <link rel="stylesheet" href="{{asset('css/font-icons.css')}}">
    <link rel="stylesheet" href="{{asset('css/font-awesome.css')}}">
    @if($dir=='rtl')
{{--        <link rel="stylesheet" href="{{asset('css/style2-rtl.css')}}" type="text/css">--}}
{{--        <link rel="stylesheet" href="{{asset('css/bootstrap-rtl.css')}}" id="bscss" type="text/css">--}}
{{--        <link rel="stylesheet" href="{{asset('css/app-rtl.css')}}" id="maincss">--}}
        <link rel="stylesheet" href="{{asset('css/tabs-rtl.css')}}" type="text/css">
{{--        <link rel="stylesheet" href="{{asset('css/app/custom-rtl.css')}}">--}}
    @else
{{--        <link rel="stylesheet" href="{{asset('css/style2.css')}}" type="text/css">--}}
{{--        <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}" type="text/css">--}}
{{--        <link rel="stylesheet" href="{{asset('css/app.css')}}" type="text/css">--}}
        <link rel="stylesheet" href="{{asset('css/tabs.css')}}" type="text/css">
{{--        <link rel="stylesheet" href="{{asset('css/app/custom.css')}}">--}}
    @endif
    <link rel="stylesheet" href="{{asset('css/select2.css')}}">
    <link rel="stylesheet" href="{{asset('css/select2-bootstrap.css')}}">
</head>
<body class="transparent-header pace-on pace-dot">
@include('layouts.header1')
<div id="content" role="main">
    @yield('content')
    @include('layouts.footer1')
</div>
<a class="go-top go-top-circle" href="javascript:void(0)" style="bottom: -44px; opacity: 0;"> <i
            class="fa fa-angle-up"></i> </a>
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
{{--<script type="text/javascript">--}}
    {{--var oxyThemeData = {--}}
        {{--navbarHeight: 100,--}}
        {{--navbarScrolled: 60,--}}
        {{--navbarScrolledPoint: 20,--}}
        {{--menuClose: 'off',--}}
        {{--scrollFinishedMessage: 'No more items to load.',--}}
        {{--hoverMenu:--}}
            {{--{--}}
                {{--hoverActive: false,--}}
                {{--hoverDelay: 1,--}}
                {{--hoverFadeDelay: 200--}}
            {{--},--}}
        {{--siteLoader: 'on'--}}
    {{--};--}}
{{--</script>--}}
<script src="{{asset('js/app/bootstrap.min.js')}}"></script>
<script src="{{asset('js/Moment.js')}}"></script>
<script src="{{asset('js/moment-with-locales.min.js')}}"></script>
<script src="{{asset('js/select2.full.js')}}"></script>
<script src="{{asset('js/bootstrap-datetimepicker.min.js')}}"></script>
<script src="{{asset('js/bootstrap-datepicker.min.js')}}"></script>
<script src="{{asset('general/js/custom.js')}}"></script>
<script src="{{asset('general/js/theme.min.js')}}"></script>
</body>
</html>