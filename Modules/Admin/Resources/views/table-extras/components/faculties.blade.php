<div class="modal fade" id="modal-faculties">
    <div class="modal-dialog" style="min-width: 65%">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span
                            class="sr-only">@lang('app.close')</span></button>
                <h4 class="modal-title"><span class="name"></span></h4>
            </div>
            <div class=" modal-body clearfix margin-sm">
                @php $params=\Request::getQueryString() ? ('?' . \Request::getQueryString()) : ''; @endphp
                {!! datatable("faculties-universities-table",$params) !!}
            </div>
            <div class="modal-footer">
                <button type="button" class="button button-3d button-white color button-reveal  " data-dismiss="modal">
                    <i class="icon-close"></i><span> @lang('app.close')</span></button>
            </div>
        </div>
    </div>
</div>
<script>

    function open_faculties_modal($this) {
        var obj = _aut_datatable_getSelectedRow(_aut_datatable_getTableObjectApi('#differenation_universities'), $(($this).closest('tr')));
        $('.name').text(obj['differenation']['name_'+lang]);
       var key = "?university_id=" + obj['university']['university_id'];
        var modal = $("#modal-faculties div.datatable");
        var url = modal.data("url");
        modal.attr("data-url", url + key);
        aut_datatable_refresh('#modal-faculties', true);
        $('#modal-faculties').modal('show');
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