@if (Session::has('sweet_alert.alert'))
{{--@section('js')--}}
<script src="{{asset('js/sweetalert.min.js')}}"></script>
    <script>
        swal({!! Session::pull('sweet_alert.alert') !!});
    </script>
{{--@endsection--}}
@endif
