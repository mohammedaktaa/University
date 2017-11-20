<div class="modal fade" id="modal-subjects">
    <div class="modal-dialog" style="min-width: 75%">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span
                            class="sr-only">@lang('app.close')</span></button>
                <h4 class="modal-title">@lang('admin::menu.marks')<span class="name"></span></h4>
            </div>
            <div class=" modal-body clearfix margin-sm">
                @php $params=\Request::getQueryString() ? ('?' . \Request::getQueryString()) : ''; @endphp
                {!! datatable("subjects-table",$params) !!}
            </div>
            <div class="modal-footer">
                <button type="button" class="button button-3d button-white color button-reveal  " data-dismiss="modal">
                    <i class="icon-close"></i><span> @lang('app.close')</span></button>
            </div>
        </div>
    </div>
</div>
<script>

    function open_acceptance_modal($this) {
       var key = "?user=" + $($this).data("key");
        var obj = _aut_datatable_getSelectedRow(_aut_datatable_getTableObjectApi('#{{$table}}'), $(($this).closest('tr')));
//        console.log(obj);
        $('.name').text(" For "+obj.name);
        var modal = $("#modal-subjects div.datatable");
        var url = modal.data("url");
        modal.attr("data-url", url + key);
        aut_datatable_refresh('#modal-subjects', true);
        $('#modal-subjects').modal('show');
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