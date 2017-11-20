@php
    $componentName="counter";
    $counter= \Modules\General\Http\Controllers\GeneralController::initComponent($componentName);
@endphp
@for($i=0;$i<$counter->count();$i++)
    <div class="col_one_fourth @if($i==$counter->count()-1) col_last @endif nobottommargin center bounceIn animated" data-animate="bounceIn">
        <i class="i-plain i-xlarge divcenter {{$counter[$i]['icon']}}"></i>
        <div class="counter counter-lined"><span data-from="0" data-to="{{$counter[$i]['count']}}" data-refresh-interval="50" data-speed="2000">{{$counter[$i]['count']}}</span>+</div>
        <h5>{{$counter[$i]['title_'.$lang]}}</h5>
    </div>
@endfor

