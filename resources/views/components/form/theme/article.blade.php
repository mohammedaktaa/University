@php
    $extraData['country']=isset($extraData['country'])?$extraData['country']:[];
/*    $extraData['state']=isset($extraData['state'])?$extraData['state']:[];
    $extraData['city']=isset($extraData['city'])?$extraData['city']:[];*/
    $extraData['tags']=isset($extraData['tags'])?$extraData['tags']:[];
    $extraData['fileName']=isset($extraData['fileName'])?$extraData['fileName']:'';
    $extraData['fileUrl']=isset($extraData['fileUrl'])?$extraData['fileUrl']:'';
    /*if(!is_array($extraDate))
        $extraDate=['display'=>$extraDate,'required'=>false];
    if(!is_array($extraAddress))
        $extraAddress=['display'=>$extraAddress,'required'=>false];*/
    if(!is_array($extraTags))
        $extraTags=['display'=>$extraTags,'required'=>false];
    if(!is_array($extraCountry))
        $extraCountry=['display'=>$extraCountry,'required'=>false];
/*    if(!is_array($extraStateCity))
        $extraStateCity=['display'=>$extraStateCity,'required'=>false];*/
    if(!is_array($extraImage))
       $extraImage=['display'=>$extraImage,'required'=>false];
    if( is_null($extraContClass)){
        $extraContClass=[
            'title_en'=>'col_one_third',
            'title_ar'=>'col_one_third',
            'country_id'=>'col_one_third col_one_third',
            /*'date'=>'col_one_third',
            'address_en'=>'col_one_third',
            'address_ar'=>'col_one_third col_last',*/
            'tags'=>'col_one_third ',
            'state_id'=>'col_one_third ',
/*            'city_id'=>'col_one_third col_last',*/
        ];
    }
@endphp
{!!Form::hidden('article_id') !!}
{!!Form::thText($extraContClass['title_en'],'title_en','app.title','',true,null,null,null,'','en') !!}
{!!Form::thText($extraContClass['title_ar'],'title_ar','app.title','',true,null,null,null,'','ar') !!}
@if($extraCountry['display'])
    {!!Form::bsAutocomplete($extraContClass['country_id'],'country_id','app.country','',$extraCountry['required'],null,null,localizeURL('country-autocomplete'),false,'','',$extraData['country']) !!}
@endif
{{--@if($extraDate['display'])
    {!!Form::thText($extraContClass['date'],'date','app.date','',$extraDate['required'],null,null,null,'date') !!}
@endif--}}
{{--@if($extraAddress['display'])
    {!!Form::thText($extraContClass['address_en'],'address_en','profile.address','',$extraAddress['required'],null,null,null,'','en') !!}
    {!!Form::thText($extraContClass['address_ar'],'address_ar','profile.address','',$extraAddress['required'],null,null,null,'','ar') !!}
@endif--}}

@if($extraTags['display'])
    {!!Form::bsAutocomplete($extraContClass['tags'],'tags','app.tags','',$extraTags['required'],'tags[]',null,localizeURL('tags-autocomplete'),true,'','',$extraData['tags']) !!}
@endif
{{--@if($extraStateCity['display'])
    {!!Form::bsAutocomplete($extraContClass['state_id'],'state_id','app.state','',$extraStateCity['required'],null,null,localizeURL('state-autocomplete'),false,'','',$extraData['state'],'#country_id') !!}
    {!!Form::bsAutocomplete($extraContClass['city_id'],'city_id','app.city','',$extraStateCity['required'],null,null,localizeURL('city-autocomplete'),false,'','',$extraData['city'],'#state_id') !!}
@endif--}}
<div class="clear bottommargin-sm"></div>
<div class="tabs tabs-alt clearfix" id="">
    <ul class="tab-nav clearfix">
        <li><a href="#tab-en"><i class=""></i> @lang('app.content') @lang('app.en') *</a></li>
        <li><a href="#tab-ar"><i class=""></i> @lang('app.content') @lang('app.ar') *</a></li>
        @if($extraImage['display'])
            <li><a href="#tab-poster"><i class=""></i> @lang('app.poster') *</a></li>
        @endif
    </ul>
    <div class="tab-container noborder">
        <div class="tab-content clearfix" id="tab-en">
            {!!Form::thTextArea('col_full','content_en',false,'',true,null,null,100,null,'',true,'en') !!}
        </div>
        <div class="tab-content clearfix" id="tab-ar">
            {!!Form::thTextArea('col_full','content_ar',false,'',true,null,null,100,null,'',true,'ar') !!}
        </div>
        @if($extraImage['display'])
            <div class="tab-content clearfix" id="tab-poster">
                {!!Form::bsImageUpload('col_full','image',false,'',$extraImage['required'],null,null,null,$extraData['fileUrl'],$extraData['fileName']) !!}
            </div>
        @endif
    </div>

</div>
