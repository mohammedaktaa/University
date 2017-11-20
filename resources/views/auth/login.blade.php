@extends('layouts.app1')
@section('title')
    {{trans('app.login')}}
    @endsection
@section('content')
    <div class="container">
        {{--<div class="row" >--}}
        <div class="col-md-6 col-md-offset-3">
            @include('auth.tabs-login')
            {{--</div>--}}
        </div>
    </div>
@endsection
@section('js')
    <script type="text/javascript" src="{{ asset('js/plugins.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/functions.js') }}"></script>
    @endsection