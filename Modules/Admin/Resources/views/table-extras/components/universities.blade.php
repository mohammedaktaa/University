<div class="modal fade" id="modal-universities">
    <div class="modal-dialog" style="min-width: 75%">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span
                            class="sr-only">@lang('app.close')</span></button>
            </div>
            <div class=" modal-body clearfix margin-sm">
                @php $params=\Request::getQueryString() ? ('?' . \Request::getQueryString()) : ''; @endphp
                {!! datatable("differenation-universities-table",$params) !!}
            </div>
            <div class="modal-footer">
                <button type="button" class="button button-3d button-white color button-reveal  " data-dismiss="modal">
                    <i class="icon-close"></i><span> @lang('app.close')</span></button>
            </div>
        </div>
    </div>
</div>
<script>

    function open_universities_modal($this) {
       var key = "?differentiation_id=" + $($this).data("key");
        var obj = _aut_datatable_getSelectedRow(_aut_datatable_getTableObjectApi('#public_differentiation'), $(($this).closest('tr')));
//        console.log(obj);
//        $('.name').text(" For "+obj.name);
        var modal = $("#modal-universities div.datatable");
        var url = modal.data("url");
        modal.attr("data-url", url + key);
        aut_datatable_refresh('#modal-universities', true);
        $('#modal-universities').modal('show');
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