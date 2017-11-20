<?php $name=isset($name)?$name:$id; ?>
<?php $inputLang=isset($inputLang) && $inputLang?'app.'.$inputLang:'';?>
<?php $placeholder=isset($placeholder)?trans($placeholder):'';?>
<div class="{{$contClass}}">
    @if($label!==false){!! Form::label($id,trans($label).' '.trans($inputLang).((isset($required))?' *':'')) !!}@endif
    <span class=" show-error-msg " id="error-{{$id}}"></span>
    {!! Form::label($id,$errors->has($name)?$errors->first($name):' ',['id'=>$id.'-error','class'=>'error f'.$right]) !!}
    {!!Form::select($name,$dataAttr,null,['id'=>$id,'data-msg'=>trans((!$errorMsg)?'validation.custom.required':$errorMsg),'class'=>'form-control '.$class.(($required===true)?' required':''),'placeholder'=>$placeholder]) !!}
</div>