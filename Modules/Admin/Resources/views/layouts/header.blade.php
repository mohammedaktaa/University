<header class="topnavbar-wrapper">
    <!-- START Top Navbar-->
    <nav role="navigation" class="navbar topnavbar">
        <!-- START navbar header-->
        <div class="navbar-header">
            <a href="#" class="navbar-brand">
                <div class="brand-logo">
                    <img src="{{url('img/logo.png')}}" alt="App Logo" class="img-responsive">
                </div>
                <div class="brand-logo-collapsed">
                    <img src="{{url('img/logo.png')}}" alt="App Logo" class="img-responsive">
                </div>
            </a>
        </div>
        <!-- END navbar header-->
        <!-- START Nav wrapper-->
        <div class="nav-wrapper">
            <!-- START Left navbar-->
            <ul class="nav navbar-nav">
                <li>
                    <!-- Button used to collapse the left sidebar. Only visible on tablet and desktops-->
                    <a id="side-open" href="#" data-trigger-resize="" data-toggle-state="aside-collapsed"
                       class="hidden-xs">
                        <em class="fa fa-navicon"></em>
                    </a>
                    <!-- Button to show/hide the sidebar on mobile. Visible on mobile only.-->
                    <a href="#" data-toggle-state="aside-toggled" data-no-persist="true"
                       class="visible-xs sidebar-toggle">
                        <em class="fa fa-navicon"></em>
                    </a>
                </li>
                <!-- START User avatar toggle-->
                <li>
                    <!-- Button used to collapse the left sidebar. Only visible on tablet and desktops-->
                    <a id="user-block-toggle" href="#user-block" data-toggle="collapse">
                        <em class="icon-user"></em>
                    </a>
                </li>
                <!-- END User avatar toggle-->
                <!-- START lock screen-->
                <li>
                    <a href="lock.html" title="Lock screen">
                        <em class="icon-lock"></em>
                    </a>
                </li>
                <!-- END lock screen-->
            </ul>
            <!-- END Left navbar-->
            <!-- START Right Navbar-->
            <ul class="nav navbar-nav navbar-right">
                <!-- Search icon-->
                <li>
                    <a href="#" data-search-open="">
                        <em class="icon-magnifier"></em>
                    </a>
                </li>
                <!-- Fullscreen (only desktops)-->
                <li class="visible-lg">
                    <a href="#" data-toggle-fullscreen="">
                        <em class="fa fa-expand"></em>
                    </a>
                </li>
                <li>
                    <a href="#" onClick="history.go(0)">
                        <em class="icon-refresh"></em>
                    </a>
                </li>
                <!-- START Alert menu-->
                <li class="dropdown dropdown-list">
                    <a href="#" data-toggle="dropdown">
                        <em class="icon-location-pin"></em>
                    </a>
                    <!-- START Dropdown menu-->
                    <ul class="dropdown-menu animated flipInX">
                        <li>
                            <!-- START list group-->
                            <div class="list-group">
                                <!-- list item-->

                                @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                    <a href="{{LaravelLocalization::getLocalizedURL($localeCode)}}"
                                       hreflang="{{$localeCode}}" class="list-group-item">
                                        <div class="media-box">
                                            <div class="pull-left">
                                                <img src="{{asset('images/icons/'.$localeCode.'.png')}}">
                                            </div>
                                            <div class="media-box-body clearfix">
                                                <p class="m0">{{ $properties['native'] }}</p>

                                            </div>
                                        </div>
                                    </a>
                                @endforeach
                            <!-- list item-->
                                {{--<a href="#" class="list-group-item">--}}
                                {{--<div class="media-box">--}}
                                {{--<div class="pull-left">--}}
                                {{--<em class="fa fa-envelope fa-2x text-warning"></em>--}}
                                {{--</div>--}}
                                {{--<div class="media-box-body clearfix">--}}
                                {{--<p class="m0">New e-mails</p>--}}
                                {{--<p class="m0 text-muted">--}}
                                {{--<small>You have 10 new emails</small>--}}
                                {{--</p>--}}
                                {{--</div>--}}
                                {{--</div>--}}
                                {{--</a>--}}
                                {{--<!-- list item-->--}}
                                {{--<a href="#" class="list-group-item">--}}
                                {{--<div class="media-box">--}}
                                {{--<div class="pull-left">--}}
                                {{--<em class="fa fa-tasks fa-2x text-success"></em>--}}
                                {{--</div>--}}
                                {{--<div class="media-box-body clearfix">--}}
                                {{--<p class="m0">Pending Tasks</p>--}}
                                {{--<p class="m0 text-muted">--}}
                                {{--<small>11 pending task</small>--}}
                                {{--</p>--}}
                                {{--</div>--}}
                                {{--</div>--}}
                                {{--</a>--}}
                                {{--<!-- last list item-->--}}
                                {{--<a href="#" class="list-group-item">--}}
                                {{--<small>More notifications</small>--}}
                                {{--<span class="label label-danger pull-right">14</span>--}}
                                {{--</a>--}}
                            </div>
                            <!-- END list group-->
                        </li>
                    </ul>
                    <!-- END Dropdown menu-->
                </li>
                <!-- END Alert menu-->
                <!-- START Offsidebar button-->
                <li>
                    <a id="open-side-right" href="#" data-toggle-state="offsidebar-open" data-no-persist="true">
                        <em class="icon-notebook"></em>
                    </a>
                </li>

                <!-- END Offsidebar menu-->
            </ul>
            <!-- END Right Navbar-->
        </div>
        <!-- END Nav wrapper-->
        <!-- START Search form-->
        <form role="search" action="search.html" class="navbar-form">
            <div class="form-group has-feedback">
                <input type="text" placeholder="Type and hit enter ..." class="form-control">
                <div data-search-dismiss="" class="fa fa-times form-control-feedback"></div>
            </div>
            <button type="submit" class="hidden btn btn-default">Submit</button>
        </form>
        <!-- END Search form-->
    </nav>
    <!-- END Top Navbar-->
</header>
<!-- sidebar-->
<aside class="aside">
    <!-- START Sidebar (left)-->
    <div class="aside-inner">
        <nav data-sidebar-anyclick-close="" class="sidebar">
            <!-- START sidebar nav-->
            <ul class="nav {{$dir=='rtl'?'margin-ri':''}}">
                <!-- START user info-->
                <li class="has-user-block">
                    <div id="user-block" class="collapse">

                        <div class="user-block-status">
                            <img src="{{url('img/Mohammed9.jpg')}}" alt="Avatar" width="75px" height="75px"
                                 class="img-thumbnail img-circle">
                            <div class="circle circle-success circle-lg"></div>
                            <!-- Name and Job-->
                            <div class="user-block-info">
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
                                           data-toggle="collapse"
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
                                                           data-toggle="collapse" style="margin-{{$dir=='rtl'?'right':'left'}}:15px;"
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
                                                                           data-toggle="collapse" style="margin-{{$dir=='rtl'?'right':'left'}}:15px;"
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
<!-- offsidebar-->
<aside class="offsidebar hide" style="padding-right: 20px;width: 235px">
    <!-- START Off Sidebar (right)-->
    <nav>
        <div role="tabpanel">
            <!-- Nav tabs-->
            <ul role="tablist" class="nav nav-tabs nav-justified">
                <li role="presentation" class="active">
                    <a href="#app-settings" aria-controls="app-settings" role="tab" data-toggle="tab">
                        <em class="icon-equalizer fa-lg"></em>
                    </a>
                </li>
                <li role="presentation">
                    <a href="#app-chat" aria-controls="app-chat" role="tab" data-toggle="tab">
                        <em class="icon-user fa-lg"></em>
                    </a>
                </li>
            </ul>
            <!-- Tab panes-->
            <div class="tab-content">
                <div id="app-settings" role="tabpanel" class="tab-pane fade in active">
                    <h3 class="text-center text-thin">Settings</h3>
                    <form method="POST" action="{{url('style')}}" enctype="multipart/form-data">
                        <div class="p">
                            <h4 class="text-muted text-thin">Themes</h4>

                            <div class="table-grid mb">
                                <div class="col mb">
                                    <div class="setting-color">
                                        <label data-load-css="{{url('css/theme-a.css')}}">
                                            <input type="radio" name="setting-theme"
                                                   checked="checked">
                                            <span class="icon-check"></span>
                                            <span class="split">
                                       <span class="color bg-info"></span>
                                       <span class="color bg-info-light"></span>
                                    </span>
                                            <span class="color bg-white"></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="col mb">
                                    <div class="setting-color">
                                        <label data-load-css="{{url('css/theme-b.css')}}">
                                            <input type="radio" name="setting-theme">
                                            <span class="icon-check"></span>
                                            <span class="split">
                                       <span class="color bg-green"></span>
                                       <span class="color bg-green-light"></span>
                                    </span>
                                            <span class="color bg-white"></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="col mb">
                                    <div class="setting-color">
                                        <label data-load-css="{{url('css/theme-c.css')}}">
                                            <input type="radio" name="setting-theme">
                                            <span class="icon-check"></span>
                                            <span class="split">
                                       <span class="color bg-purple"></span>
                                       <span class="color bg-purple-light"></span>
                                    </span>
                                            <span class="color bg-white"></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="col mb">
                                    <div class="setting-color">
                                        <label data-load-css="{{url('css/theme-d.css')}}">
                                            <input type="radio" name="setting-theme">
                                            <span class="icon-check"></span>
                                            <span class="split">
                                       <span class="color bg-danger"></span>
                                       <span class="color bg-danger-light"></span>
                                    </span>
                                            <span class="color bg-white"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="table-grid mb">
                                <div class="col mb">
                                    <div class="setting-color">
                                        <label data-load-css="{{url('css/theme-e.css')}}">
                                            <input type="radio" name="setting-theme">
                                            <span class="icon-check"></span>
                                            <span class="split">
                                       <span class="color bg-info-dark"></span>
                                       <span class="color bg-info"></span>
                                    </span>
                                            <span class="color bg-gray-dark"></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="col mb">
                                    <div class="setting-color">
                                        <label data-load-css="{{url('css/theme-f.css')}}">
                                            <input type="radio" name="setting-theme">
                                            <span class="icon-check"></span>
                                            <span class="split">
                                       <span class="color bg-green-dark"></span>
                                       <span class="color bg-green"></span>
                                    </span>
                                            <span class="color bg-gray-dark"></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="col mb">
                                    <div class="setting-color">
                                        <label data-load-css="{{url('css/theme-g.css')}}">
                                            <input type="radio" name="setting-theme">
                                            <span class="icon-check"></span>
                                            <span class="split">
                                       <span class="color bg-purple-dark"></span>
                                       <span class="color bg-purple"></span>
                                    </span>
                                            <span class="color bg-gray-dark"></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="col mb">
                                    <div class="setting-color">
                                        <label data-load-css="{{url('css/theme-h.css')}}">
                                            <input type="radio" name="setting-theme">
                                            <span class="icon-check"></span>
                                            <span class="split">
                                       <span class="color bg-danger-dark"></span>
                                       <span class="color bg-danger"></span>
                                    </span>
                                            <span class="color bg-gray-dark"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    <div class="p">
                        <h4 class="text-muted text-thin">Layout</h4>
                        <div class="clearfix">
                            <p class="pull-left">Fixed</p>
                            <div class="pull-right">
                                <label class="switch">
                                    <input id="chk-fixed" type="checkbox" data-toggle-state="layout-fixed">
                                    <span></span>
                                </label>
                            </div>
                        </div>
                        <div class="clearfix">
                            <p class="pull-left">Boxed</p>
                            <div class="pull-right">
                                <label class="switch">
                                    <input id="chk-boxed" type="checkbox" data-toggle-state="layout-boxed">
                                    <span></span>
                                </label>
                            </div>
                        </div>
                        <div class="clearfix">
                            <p class="pull-left">RTL</p>
                            <div class="pull-right">
                                <label class="switch">
                                    <input id="chk-rtl" type="checkbox">
                                    <span></span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="p">
                        <h4 class="text-muted text-thin">Aside</h4>
                        <div class="clearfix">
                            <p class="pull-left">Collapsed</p>
                            <div class="pull-right">
                                <label class="switch">
                                    <input id="chk-collapsed" type="checkbox" data-toggle-state="aside-collapsed">
                                    <span></span>
                                </label>
                            </div>
                        </div>
                        <div class="clearfix">
                            <p class="pull-left">Collapsed Text</p>
                            <div class="pull-right">
                                <label class="switch">
                                    <input id="chk-collapsed-text" type="checkbox"
                                           data-toggle-state="aside-collapsed-text">
                                    <span></span>
                                </label>
                            </div>
                        </div>
                        <div class="clearfix">
                            <p class="pull-left">Float</p>
                            <div class="pull-right">
                                <label class="switch">
                                    <input id="chk-float" type="checkbox" data-toggle-state="aside-float">
                                    <span></span>
                                </label>
                            </div>
                        </div>
                        <div class="clearfix">
                            <p class="pull-left">Hover</p>
                            <div class="pull-right">
                                <label class="switch">
                                    <input id="chk-hover" type="checkbox" data-toggle-state="aside-hover">
                                    <span></span>
                                </label>
                            </div>
                        </div>
                        <div class="clearfix">
                            <p class="pull-left">Show Scrollbar</p>
                            <div class="pull-right">
                                <label class="switch">
                                    <input id="chk-hover" type="checkbox" data-toggle-state="show-scrollbar"
                                           data-target=".sidebar">
                                    <span></span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="app-chat" role="tabpanel" class="tab-pane fade">
                    <h3 class="text-center text-thin">Connections</h3>
                    <ul class="nav">
                        <!-- START list title-->
                        <li class="p">
                            <small class="text-muted">ONLINE</small>
                        </li>
                        <!-- END list title-->
                        <li>
                            <!-- START User status-->
                            <a href="#" class="media-box p mt0">
                              <span class="pull-right">
                                 <span class="circle circle-success circle-lg"></span>
                              </span>
                                <span class="pull-left">
                                 <!-- Contact avatar-->
                                 <img src="" alt="Image" class="media-box-object img-circle thumb48">
                              </span>
                                <!-- Contact info-->
                                <span class="media-box-body">
                                 <span class="media-box-heading">
                                    <strong>Juan Sims</strong>
                                    <br>
                                    <small class="text-muted">Designeer</small>
                                 </span>
                              </span>
                            </a>
                            <!-- END User status-->
                            <!-- START User status-->
                            <a href="#" class="media-box p mt0">
                              <span class="pull-right">
                                 <span class="circle circle-success circle-lg"></span>
                              </span>
                                <span class="pull-left">
                                 <!-- Contact avatar-->
                                 <img src="" alt="Image" class="media-box-object img-circle thumb48">
                              </span>
                                <!-- Contact info-->
                                <span class="media-box-body">
                                 <span class="media-box-heading">
                                    <strong>Maureen Jenkins</strong>
                                    <br>
                                    <small class="text-muted">Designeer</small>
                                 </span>
                              </span>
                            </a>
                            <!-- END User status-->
                            <!-- START User status-->
                            <a href="#" class="media-box p mt0">
                              <span class="pull-right">
                                 <span class="circle circle-danger circle-lg"></span>
                              </span>
                                <span class="pull-left">
                                 <!-- Contact avatar-->
                                 <img src="" alt="Image" class="media-box-object img-circle thumb48">
                              </span>
                                <!-- Contact info-->
                                <span class="media-box-body">
                                 <span class="media-box-heading">
                                    <strong>Billie Dunn</strong>
                                    <br>
                                    <small class="text-muted">Designeer</small>
                                 </span>
                              </span>
                            </a>
                            <!-- END User status-->
                            <!-- START User status-->
                            <a href="#" class="media-box p mt0">
                              <span class="pull-right">
                                 <span class="circle circle-warning circle-lg"></span>
                              </span>
                                <span class="pull-left">
                                 <!-- Contact avatar-->
                                 <img src="" alt="Image" class="media-box-object img-circle thumb48">
                              </span>
                                <!-- Contact info-->
                                <span class="media-box-body">
                                 <span class="media-box-heading">
                                    <strong>Tomothy Roberts</strong>
                                    <br>
                                    <small class="text-muted">Designer</small>
                                 </span>
                              </span>
                            </a>
                            <!-- END User status-->
                        </li>
                        <!-- START list title-->
                        <li class="p">
                            <small class="text-muted">OFFLINE</small>
                        </li>
                        <!-- END list title-->
                        <li>
                            <!-- START User status-->
                            <a href="#" class="media-box p mt0">
                              <span class="pull-right">
                                 <span class="circle circle-lg"></span>
                              </span>
                                <span class="pull-left">
                                 <!-- Contact avatar-->
                                 <img src="" alt="Image" class="media-box-object img-circle thumb48">
                              </span>
                                <!-- Contact info-->
                                <span class="media-box-body">
                                 <span class="media-box-heading">
                                    <strong>Lawrence Robinson</strong>
                                    <br>
                                    <small class="text-muted">Developer</small>
                                 </span>
                              </span>
                            </a>
                            <!-- END User status-->
                            <!-- START User status-->
                            <a href="#" class="media-box p mt0">
                              <span class="pull-right">
                                 <span class="circle circle-lg"></span>
                              </span>
                                <span class="pull-left">
                                 <!-- Contact avatar-->
                                 <img src="" alt="Image" class="media-box-object img-circle thumb48">
                              </span>
                                <!-- Contact info-->
                                <span class="media-box-body">
                                 <span class="media-box-heading">
                                    <strong>Tyrone Owens</strong>
                                    <br>
                                    <small class="text-muted">Designer</small>
                                 </span>
                              </span>
                            </a>
                            <!-- END User status-->
                        </li>
                        <li>
                            <div class="p-lg text-center">
                                <!-- Optional link to list more users-->
                                <a href="#" title="See more contacts" class="btn btn-purple btn-sm">
                                    <strong>Load more..</strong>
                                </a>
                            </div>
                        </li>
                    </ul>
                    <!-- Extra items-->
                    <div class="p">
                        <p>
                            <small class="text-muted">Tasks completion</small>
                        </p>
                        <div class="progress progress-xs m0">
                            <div role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"
                                 class="progress-bar progress-bar-success progress-80">
                                <span class="sr-only">80% Complete</span>
                            </div>
                        </div>
                    </div>
                    <div class="p">
                        <p>
                            <small class="text-muted">Upload quota</small>
                        </p>
                        <div class="progress progress-xs m0">
                            <div role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"
                                 class="progress-bar progress-bar-warning progress-40">
                                <span class="sr-only">40% Complete</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <!-- END Off Sidebar (right)-->
</aside>
