<div class="modal fade" id="modal-bill-pdf"data-url="{{url('files')}}" >
    <div class="modal-dialog" style="min-width: 75%">
        <div class="modal-content">
            {!!Form::open(['class'=>'ajax-form','method'=>'put']) !!}
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">@lang('app.close')</span></button>
                <h4 class="modal-title">@lang('admin::main.update_image')</h4>
            </div>
            <div class=" modal-body clearfix margin-sm">
                {!! Form::thAutocomplete('col_full','user_id','','',false,null,null,LocalizeUrl('admin/user-autocomplete'),false,trans('admin::main.choose_user'),'',[],null,0,'width:35%') !!}
                {!! Form::bsDocUpload('col_full','doc',false,'',true,null,null,'','','Mohammad') !!}
            </div>
            <div class="modal-footer">
                <button type="submit" class="button button-3d button-reveal button-reveal " ><i class="icon-plus"></i><span>@lang('app.save')</span></button>
                <button type="button" class="button button-3d button-white color button-reveal  " data-dismiss="modal"><i class="icon-close"></i><span> @lang('app.close')</span></button>
            </div>
            {!!Form::close() !!}
        </div>
    </div>
</div>

<script>

    function open_file_upload() {
        $('.wrapper').on('click','.upload-doc',function () {
            // alert('dasd')
            var $modal = $("#modal-bill-pdf ");
            $modal.modal('show');
            $('user_id').on('change',function () {
                var option=$(this).find('option:selected').val();
            _docUpload($modal,option);
            })
        })
    }

</script>
@section('styles')
    {{--{!! $CSS['select2'] !!}--}}
    {!! $CSS['datatable'] !!}
    {!! $CSS['timepicker'] !!}
    {!! $CSS['bs-filestyle'] !!}
@endsection
@section('scripts')
    {!! $JS['ckeditor'] !!}
    {!! $JS['datatable'] !!}
    {{--{!! $JS['select2'] !!}--}}
    {!! $JS['timepicker'] !!}
    {!! $JS['bs-filestyle'] !!}
    @endsection