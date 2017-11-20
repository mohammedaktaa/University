@extends('layouts.app1')
@section('title')
    {{trans('app.register')}}
@endsection
@section('content')
        <div class="container">
            {{--<div class="row" >--}}
                <div class="col-md-8 col-md-offset-2">
                     @include('auth.tabs-register')
                {{--</div>--}}
            </div>
        </div>
@endsection
@section('js')
    <script src="{{asset('general/js/custom.js')}}"></script>
    @endsection
