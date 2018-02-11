<div class="container" style="/*border-bottom: 1px solid rgba(5,5,11,0.32);*/">
    <!-- START Language list-->
    <div class="row">
        <div class="pull-right margin-le-to" >
            <div class="btn-group">
                <button type="button" data-toggle="dropdown"
                        class="btn btn-default">{{trans('admin::main.'.App::getLocale())}}</button>
                <ul role="menu" class="dropdown-menu dropdown-menu-right animated fadeInUpShort">
                    @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                        <li class="">
                            <span class=""></span><a class="local" style="margin-left: 5px" rel="alternate"
                                                     hreflang="{{$localeCode}}"
                                                     href="{{LaravelLocalization::getLocalizedURL($localeCode) }}">
                                <img src="{{asset('images/'.$localeCode.'.png')}}">
                                <b>{{ $properties['native'] }}</b>
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
        <!-- END Language list-->
        <div class="pull-left" style="margin-top:10px">
            <h4 class="text-default" style="margin-{{$dir=='rtl'?'right':'left'}}: 20px">{{trans('app.admin_panel')}}</h4>
            <ul class="bread" style="margin-{{$dir=='rtl'?'right':'left'}}: 20px">
                <li>
                    <i class="fa fa-home"></i>
                    <a href="{{route('admin-home')}}">{{trans('app.home')}}</a>
                    {{--<i class="fa fa-angle-right"></i>--}}
                </li>
                {{--@for($i = 0; $i <= count(Request::segments()); $i++)--}}
                {{--@if($i==1)--}}
                {{--@continue--}}
                {{--@else--}}
                {{--<li>--}}
                {{--<a href="">{{Request::segment($i)}}</a>--}}
                {{--</li>--}}
                {{--@endif--}}
                {{--@endfor--}}
            </ul>
        </div>
    </div>
</div>
<br>