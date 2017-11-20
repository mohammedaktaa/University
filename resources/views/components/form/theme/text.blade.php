<?php $name=isset($name)?$name:$id;?>
<?php if(isset($inputLang) && $inputLang){
    $class=$class." ".$inputLang;
    $inputLang='app.'.$inputLang;
}
?><?php $placeholder=isset($placeholder)?trans($placeholder):'';?>
<?php $type=isset($type) && $type?$type:'text';?>
<div class="{{$contClass}}">
    @if($label!==false){!! Form::label($id,trans($label).' '.trans($inputLang).((isset($required)&&$required)?' *':'')) !!}@endif
    <span class=" show-error-msg " id="error-{{$id}}"></span>
    {!! Form::label($id,$errors->has($name)?$errors->first($name):' ',['id'=>$id.'-error','class'=>'error f'.$right]) !!}
    {!! Form::input($type,$name,null,['id'=>$id,'data-msg'=>trans((!$errorMsg)?'validation.custom.required':$errorMsg),'class'=>'sm-form-control '.$class .(($required===true)?' required':''),'placeholder'=>$placeholder]) !!}
</div>