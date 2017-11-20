@php
    $componentName="counter";
    $counter= \Modules\General\Http\Controllers\GeneralController::initComponent($componentName);
@endphp
@for($i=0;$i<$counter->count();$i++)
    <div class="col-md-3 col-sm-6">
        <div class="feature-box fbox-outline fbox-dark fbox-effect clearfix">
            <div class="fbox-icon">
                <a href="javascript:void(0)"><i class="{{$counter[$i]['icon']}} i-alt"></i></a>
            </div>
            <div class="counter counter-small"><span data-from="0" data-to="{{$counter[$i]['count']}}" data-refresh-interval="200" data-speed="2500"></span>+</div>
            <h5 class="nomargin color">{{$counter[$i]['title_'.$lang]}}</h5>
            <div class="visible-xs visible-sm bottommargin"></div>
        </div>
    </div>
@endfor