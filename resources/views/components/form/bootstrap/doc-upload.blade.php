@php
$name=isset($name)?$name:$id;
 if(isset($inputLang) && $inputLang){
    $class=$class." ".$inputLang;
    $inputLang='app.'.$inputLang;
} else $inputLang='';
@endphp
<div class="{{$contClass}}">
    @if($label!==false){!! Form::label($id,trans($label).' '.trans($inputLang)).((isset($required))?' *':'') !!}@endif
    <span class=" show-error-msg " id="error-{{$id}}-name"></span>
    {!! Form::label($id.'-name',$errors->has($name)?$errors->first($name):' ',['id'=>$id.'-name-error','class'=>$class.' error f'.$right]) !!}
     <input data-msg="@lang('validation.custom.select_doc')" id="{{$id}}-name" name="{{$name}}" value="{{$fileName}}" type="text"  class="doc-upload-name {{($required==true)?' required':''}} hide">
    <div class="clear"></div>
    <input  data-url="{{$fileUrl}}" id="{{$id}}" data-title="{{$fileName}}" name="doc" type="file"  class="doc-upload">
</div>
