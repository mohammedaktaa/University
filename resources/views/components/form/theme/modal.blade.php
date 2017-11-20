<div class="modal fade" id="modal-{{$id}}">
    <div class="modal-dialog" style="min-width: 75%">
        <div class="modal-content">
            {!!Form::open(['class'=>'ajax-form','method'=>'put']) !!}
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">@lang('app.close')</span></button>
                <h4 class="modal-title">@lang("admin::menu.$title")</h4>
            </div>
            <div class=" modal-body clearfix margin-sm">
                @for($i=0;$i<count($types);$i++)
                    @if($types[$i]=="thText")
                        {!! Form::label($ids[$i],$errors->has($names[$i])?$errors->first($names[$i]):' ',['id'=>$ids[$i].'-error','class'=>'error ']) !!}
                        {!! Form::input('text',$names[$i],null,['id'=>$ids[$i],'data-msg'=>trans((!$errorMsg)?'validation.custom.required':$errorMsg),'class'=>'col-md-5 sm-form-control required ','placeholder'=>$labels[$i]]) !!}
                        </br>
                        @endif
{{--                    {!! Form::input($types[$i],$names[$i],trans("app.$labels[$i]")) !!}--}}
                    @endfor
                {{--{!! Form::thText('col_half','name_en',trans('app.full_name').' '.trans('app._en'),'en',true) !!}--}}
                {{--{!! Form::thText('col_half col_last','name_ar',trans('app.full_name').' '.trans('app._ar'),'ar',true) !!}--}}
                {{--{!! Form::thAutocomplete('col_half','user_id',trans('app.customer'),'',false,null,null,localizeURL('user-autocomplete'),false,'','',[],null,80) !!}--}}
                {{--{!! Form::thAutocomplete('col_half','service.service_type.user_id',trans('app.type'),'',false,null,null,localizeURL('admin/service-type-autocomplete'),false,'','',[],null,0) !!}--}}
            </div>
            <div class="modal-footer">
                <button type="submit" class="button button-3d button-reveal button-reveal " ><i class="icon-plus"></i><span>@lang('app.save')</span></button>
                <button type="button" class="button button-3d button-white color button-reveal  " data-dismiss="modal"><i class="icon-close"></i><span> @lang('app.close')</span></button>
            </div>
            {!!Form::close() !!}
        </div>
    </div>
</div>