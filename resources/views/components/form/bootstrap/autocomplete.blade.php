@php $name=isset($name)?$name:$id;
$inputLang=isset($inputLang) && $inputLang?'app.'.$inputLang:'';
$placeholder=isset($placeholder)?trans($placeholder):'';
@endphp
<div class="{{$contClass}} form-group">
    @if($label!==false){!! Form::label($id,trans($label).' '.trans($inputLang).(($required)?' *':'')) !!}@endif
    <span class=" show-error-msg " id="error-{{$id}}"></span>
    {!!Form::label($id,$errors->has($name)?$errors->first($name):' ',['id'=>$id.'-error','class'=>'error f'.$right]) !!}
    {!!Form::select($name,$dataAttr,array_keys($dataAttr),['id'=>$id,'data-param'=>$param,'data-msg'=>trans((!$errorMsg)?'validation.custom.required':$errorMsg),'class'=>'form-control autocomplete '.$class.(($required===true)?' required':''),'data-letter'=>'3','data-remote'=>$url,$multi===true?'multiple':'','data-placeholder'=>$placeholder,'data-letter'=>$letters]) !!}
</div>