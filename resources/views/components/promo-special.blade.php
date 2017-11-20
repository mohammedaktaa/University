@php
    $componentName="promo";
    $promos= \Modules\General\Http\Controllers\GeneralController::initComponent($componentName);
@endphp
@foreach($promos as $key=>$promo )
    <div class="col-md-4 dark col-padding ohidden" style="background-color:{{$promo->special_color}};">
        <div data-animate="fadeInLeft">
            <a href="#"><h3 class="uppercase" style="font-weight: 600;">{{$promo['title_'.$lang]}}</h3></a>
            <p style="line-height: 1.8;">{{$promo['description_'.$lang]}}</p>
        </div>
        <i class="{{$promo->icon}} bgicon"></i>
    </div>
@endforeach