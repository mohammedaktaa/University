<?php

namespace App\Providers;

use Form;
use Illuminate\Support\ServiceProvider;

class FormComponentServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //boostrap form inputs:
        Form::component('bsText', 'components.form.bootstrap.text', ['contClass'=>'col_full','id','label'=>false,'class'=>'','required'=>'','name','errorMsg'=>'validation.custom.required','placeholder'=>'','type'=>'text','inputLang'=>'']);
        Form::component('bsTextArea', 'components.form.bootstrap.textarea', ['contClass'=>'col_full','id','label'=>false,'class'=>'','required'=>'','name','errorMsg'=>'validation.custom.required','rows'=>8,'cols'=>20,'placeholder'=>'','isTextEditor'=>false,'inputLang'=>'','value'=>null]);
        Form::component('bsAutocomplete', 'components.form.bootstrap.autocomplete', ['contClass'=>'col_full','id','label'=>false,'class'=>'','required'=>'','name','errorMsg'=>'validation.custom.required','url','multi','placeholder'=>'','inputLang'=>'','dataAttr'=>[],'param'=>'','letters'=>3,'style'=>'']);
        Form::component('bsImageUpload', 'components.form.bootstrap.image-upload', ['contClass'=>'col_full','id','label'=>false,'class'=>'','required'=>'false','name','errorMsg'=>'validation.custom.required','inputLang'=>'','fileUrl'=>'','fileName'=>'','type'=>'image','attr'=>'']);
        Form::component('bsDocUpload', 'components.form.bootstrap.doc-upload', ['contClass'=>'col_full','id','label'=>false,'class'=>'','required'=>'false','name','errorMsg'=>'validation.custom.required','inputLang'=>'','fileUrl'=>'','fileName'=>'']);
        Form::component('bsSelect', 'components.form.bootstrap.select', ['contClass'=>'col_full','id','label'=>false,'class'=>'','required'=>'','name','errorMsg'=>'validation.custom.required','placeholder'=>'','dataAttr','inputLang'=>'']);
        Form::component('bsArticle', 'components.form.bootstrap.article',['extraData'=>[],'extraTags'=>false,'extraCountry'=>false,'extraImage'=>false,'extraContClass'=>null]);
        Form::component('bsButton', 'components.form.bootstrap.button',['contClass'=>'col_full','id','label','class']);
        Form::component('bsLocation', 'components.form.bootstrap.location',['contClass'=>'col_full','required'=>false]);
        //theme form inputs:
        Form::component('thText', 'components.form.theme.text', ['contClass'=>'col_full','id','label'=>false,'class'=>'','required'=>'','name','errorMsg'=>'validation.custom.required','placeholder'=>'','type'=>'text','inputLang'=>'']);
        Form::component('thTextArea', 'components.form.theme.textarea', ['contClass'=>'col_full','id','label'=>false,'class'=>'','required'=>'','name','errorMsg'=>'validation.custom.required','rows'=>8,'cols'=>20,'placeholder'=>'','isTextEditor'=>false,'inputLang'=>'','value'=>null]);
        Form::component('thImageUpload', 'components.form.theme.image-upload', ['contClass'=>'col_full','id','label'=>false,'class'=>'','required'=>'','name','errorMsg'=>'validation.custom.required','inputLang'=>'','fileUrl'=>'','fileName'=>'','type'=>'image','attr'=>'']);
        Form::component('thDocUpload', 'components.form.bootstrap.doc-upload', ['contClass'=>'col_full','id','label'=>false,'class'=>'','required'=>'false','name','errorMsg'=>'validation.custom.required','inputLang'=>'','fileUrl'=>'','fileName'=>'']);
        Form::component('thSelect', 'components.form.theme.select', ['contClass'=>'col_full','id','label'=>false,'class'=>'','required'=>'','name','errorMsg'=>'validation.custom.required','placeholder'=>'','dataAttr','inputLang'=>'']);
        Form::component('thArticle', 'components.form.theme.article',['extraData'=>[],'extraTags'=>false,'extraCountry'=>false,'extraImage'=>false,'extraContClass'=>null]);
        Form::component('thButton', 'components.form.theme.button',['contClass'=>'col_full','id','label','class']);
        Form::component('thLocation', 'components.form.theme.location',['contClass'=>'col_full','required'=>false]);
        Form::component('thAutocomplete', 'components.form.theme.autocomplete', ['contClass'=>'col_full','id','label'=>false,'class'=>'','required'=>'','name','errorMsg'=>'validation.custom.required','url','multi','placeholder'=>'','inputLang'=>'','dataAttr'=>[],'param'=>'','letters'=>3,'styles'=>[]]);
        Form::component('thModal','components.form.theme.modal',['contClass'=>'col_full','id','title','types'=>[''],'ids'=>[''],'names'=>[''],'labels'=>[''],'class'=>'','errorMsg']);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
