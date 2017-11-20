@extends('layouts.app1')
@section('content')
    <div class="wrapper" style="margin-top: 200px !important;">
        <label>
            <textarea class="text-editor form-control" cols="5" rows="5"></textarea>
        </label>
    </div>
    @endsection
@section('js')
    <script type="text/javascript" src="{{asset('ckeditor/ckeditor.js')}}"></script>
    <script type="text/javascript" src="{{asset('ckeditor/adapters/jquery.js')}}"></script>
    @endsection