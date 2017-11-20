<div class="modal fade" id="modal-marks">
    <div class="modal-dialog" style="min-width: 75%">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span
                            class="sr-only">@lang('app.close')</span></button>
                <h4 class="modal-title">@lang('admin::menu.marks')<span class="name"></span></h4>
            </div>
            <div class=" modal-body clearfix margin-sm">
                @php $params=\Request::getQueryString() ? ('?' . \Request::getQueryString()) : ''; @endphp
                {!! datatable("courses-users-table",$params) !!}
            </div>
            <div class="modal-footer">
                <button type="button" class="button button-3d button-white color button-reveal  " data-dismiss="modal">
                    <i class="icon-close"></i><span> @lang('app.close')</span></button>
            </div>
        </div>
    </div>
</div>
{{--<div id="modal-marks" tabindex="-1" role="dialog" aria-labelledby="myModalLabelLarge" aria-hidden="true" class="modal fade" style="display: none;">--}}
    {{--<div class="modal-dialog modal-lg">--}}
        {{--<div class="modal-content">--}}
            {{--<div class="modal-header">--}}
                {{--<button type="button" data-dismiss="modal" aria-label="Close" class="close">--}}
                    {{--<span aria-hidden="true">×</span>--}}
                {{--</button>--}}
                {{--<h4 id="myModalLabelLarge" class="modal-title">@lang('admin::menu.marks')</h4>--}}
            {{--</div>--}}
            {{--<div class="modal-body">--}}
                {{--@php $params=\Request::getQueryString() ? ('?' . \Request::getQueryString()) : ''; @endphp--}}
                {{--{!! datatable("courses-users-table",$params) !!}</div>--}}
            {{--<div class="modal-footer">--}}
                {{--<button type="button" class="button button-3d button-white color button-reveal  " data-dismiss="modal">--}}
                    {{--<i class="icon-close"></i><span> @lang('app.close')</span></button>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}

<script>

    function open_marks_modal($this) {
        var key = "?course=" + $($this).data("key");
        var obj = _aut_datatable_getSelectedRow(_aut_datatable_getTableObjectApi('#{{$table}}'), $(($this).closest('tr')));
//        console.log(obj['name_'+lang]);
        $('.name').text(" "+of+" "+obj['name_'+lang]);
        var modal = $("#modal-marks div.datatable");
        var url = modal.data("url");
        modal.attr("data-url", url + key);
        aut_datatable_refresh('#modal-marks', true);
        $('#modal-marks').modal('show');
        modal.attr('data-parent', $($this).data("key"));
    }


</script>
@section('styles')
    {!! $CSS['select2'] !!}
    {!! $CSS['datatable'] !!}
    {!! $CSS['timepicker'] !!}
    {!! $CSS['bs-filestyle'] !!}
@endsection
@section('scripts')
    {!! $JS['ckeditor'] !!}
    {!! $JS['datatable'] !!}
    {!! $JS['select2'] !!}
    {!! $JS['timepicker'] !!}
    {!! $JS['bs-filestyle'] !!}
@endsection