@php
    $class=isset($isTextEditor)&&$isTextEditor?$class.' text-editor ':$class;
    $name=isset($name)?$name:$id;
    if(isset($inputLang) && $inputLang){
        $class=$class." ".$inputLang;
        $inputLang='app.'.$inputLang;
    }
    $rows=isset($rows)?$rows:6;
    $cols=isset($cols)?$cols:6;
    $placeholder=isset($placeholder)?trans($placeholder):'';
@endphp
<div class="{{$contClass}}">
    @if($label!==false){!! Form::label($id,trans($label).' '.trans($inputLang).((isset($required))?' *':'')) !!}@endif
    <span class=" show-error-msg " id="error-{{$id}}"></span>
    {!! Form::label($id,$errors->has($name)?$errors->first($name):' ',['id'=>$id.'-error','class'=>'error f'.$right]) !!}
    <div class="clear"></div>
    {!! Form::textarea($name,$value,['id'=>$id,'data-msg'=>trans((!$errorMsg)?'validation.custom.required':$errorMsg),'class'=>'sm-form-control '.$class.(($required===true)?' required':''),'rows'=>$rows  ,'cols'=>$cols,'placeholder'=>$placeholder,'style'=>'resize: vertical;']) !!}
</div>