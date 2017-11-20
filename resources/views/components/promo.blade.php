@php
    $componentName="promo";
    $promo= \Modules\General\Http\Controllers\GeneralController::initComponent($componentName);
@endphp
@for($i=1;$i<=$promo->count();$i++)
    <div class="col_one_third @if($i%3==0) col_last @endif">
        <div class="feature-box fbox-plain">
            <div class="fbox-icon" data-animate="bounceIn">
                <a href="javascript:void(0)"><i class="{{$promo[$i-1]['icon']}}"></i></a>
            </div>
            <h3>{{$promo[$i-1]['title_'.$lang]}}</h3>
            <p>{{$promo[$i-1]['description_'.$lang]}}</p>
        </div>
    </div>
    @if($i%3==0)
        <div class="clear"></div>
    @endif
@endfor