<aside class="aside">
    <!-- START Sidebar (left)-->
    <div class="aside-inner">
        <nav data-sidebar-anyclick-close="" class="sidebar">
            <!-- START sidebar nav-->
            <ul class="nav {{$dir=='rtl'?'margin-ri':''}}">
                <!-- START user info-->
                <li class="has-user-block">
                    <div id="user-block" class="collapse">

                        <div class="user-block-status text-center">
                            <img src="{{asset('img/dummy.png')}}" alt="Avatar" width="75px" height="75px" style="width: 80px;height: 80px;"
                                 class="img-thumbnail img-circle">
                            <div class="circle circle-success circle-lg" style="margin: 11% 15%;"></div>
                            <!-- Name and Job-->
                            <div class="user-block-info" style="display:grid;">
                                <span class="user-block-name">{{Auth::user()->name}}</span>
                                <span class="user-block-role">{{Auth::user()->user_type['name_'.$lang]}}</span>
                            </div>
                        </div>
                    </div>
                </li>

                {{--------Dynamic Header----}}

                @foreach($menuItems as $menuItem)
                    @if($menuItem->is_root=='Y' && is_null($menuItem->parent))
                        <li class=" ">
                            <a href="#{{$menuItem['name_en']}}" title="{{$menuItem['name_'.$lang]}}"
                               data-toggle="collapse" class="collapsed" aria-expanded="false">
                                <em class="{{$menuItem->classes}}"></em>
                                <span data-localize="sidebar.nav.extra.{{$menuItem['name_en']}}">{{$menuItem['name_'.$lang]}}</span>
                            </a>
                            <ul id="{{$menuItem['name_en']}}" class="nav sidebar-subnav collapse "
                                data-name="{{$menuItem['name_'.$lang]}}"
                                aria-expanded="false" style="height: 0px;">
                                <li class="sidebar-subnav-header">{{$menuItem['name_'.$lang]}}</li>
                                @foreach($menuItem->children as $child)
                                    <li class="{{$child->is_root=='Y'?'':'ajax'}}"
                                        style="background-color: rgba(58,63,81,0.52);border-{{$dir=='rtl'?'right':'left'}}:3px solid #FF544F !important;">
                                        <a href="{{$child->is_root=='Y'?"#$child->name_en":route('admin-table',['table'=>$child->target])}}"
                                           title="{{$menuItem->name_en}}"
                                           {{--data-toggle="collapse"--}}
                                           class="@if(URL::current()==route('admin-table',['table'=>$child->target])){{ 'current' }}@endif  collapsed"
                                           data-title="{{$child['name_'.$lang]}}"
                                           aria-expanded="false" style="margin-{{$dir=='rtl'?'right':'left'}}:15px;">
                                            <em class="{{$child->classes}}"></em>
                                            <span>{{$child['name_'.$lang]}}</span>
                                        </a>
                                        @if($child->children->count()&& $child->parent->count())
                                            <ul id="{{$child->name_en}}" class="nav sidebar-subnav collapse"
                                                data-name="{{$child['name_'.$lang]}}"
                                                aria-expanded="false"
                                                style="height: 0px;">
                                                @foreach($child->children as $item)
                                                    <li class="{{$child->is_root=='Y'?'':'ajax'}}"
                                                        style="background-color: rgba(58,63,81,0.52);border-{{$dir=='rtl'?'right':'left'}}:3px solid #FF544F !important;">
                                                        <a href="{{$item->is_root=='Y'?"#$item->name_en" :route('admin-table',['table'=>$item->target])}}"
                                                           title="{{$item->name_en}}"
                                                           {{--data-toggle="collapse" --}}
                                                           style="margin-{{$dir=='rtl'?'right':'left'}}:15px;"
                                                           class="@if(URL::current()==route('admin-table',['table'=>$item->target])){{ 'current' }}@endif  collapsed"
                                                           data-title="{{$item['name_'.$lang]}}"
                                                           aria-expanded="false">
                                                            <em class="{{$item->classes}}"></em>
                                                            <span>{{$item['name_'.$lang]}}</span>
                                                        </a>
                                                        @if($item->children->count()&& $item->parent->count())
                                                            <ul id="{{$item->name_en}}"
                                                                class="nav sidebar-subnav collapse"
                                                                data-name="{{$child['name_'.$lang]}}"
                                                                aria-expanded="false"
                                                                style="height: 0px;">
                                                                @foreach($item->children as $value)
                                                                    <li class="{{$value->is_root=='Y'?'':'ajax'}}"
                                                                        style="background-color: rgba(58,63,81,0.52);border-{{$dir=='rtl'?'right':'left'}}:3px solid #FF544F;">
                                                                        <a href="{{route('admin-table',['table'=>$value->target])}}"
                                                                           title="{{$value->name_en}}"
                                                                           {{--data-toggle="collapse" --}}
                                                                           style="margin-{{$dir=='rtl'?'right':'left'}}:15px;"
                                                                           class="@if(URL::current()==route('admin-table',['table'=>$value->target])){{ 'current' }}@endif  collapsed"
                                                                           data-title="{{$value['name_'.$lang]}}"
                                                                           aria-expanded="false">
                                                                            <em class="{{$value->classes}}"></em>
                                                                            <span>{{$value['name_'.$lang]}}</span>
                                                                        </a>

                                                                    </li>
                                                                @endforeach
                                                            </ul>
                                                        @endif
                                                    </li>
                                                @endforeach
                                            </ul>
                                        @endif
                                    </li>
                                @endforeach
                            </ul>
                        </li>
                    @elseif($menuItem->is_root=='Y' && $menuItem->parent->count())



                    @endif
                @endforeach
                {{---end Dynamic Header--}}

            </ul>
            <!-- END sidebar nav-->
        </nav>
    </div>
    <!-- END Sidebar (left)-->
</aside>