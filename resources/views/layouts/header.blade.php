<div class="sticky-wrapper" style="height: 100px;">
    <div class="menu navbar navbar-static-top header-logo-left-menu-right text-none oxy-mega-menu navbar-sticky navbar-stuck"
         id="masthead">
        <div class="container">
            <div class="navbar-header">
                <button class="navbar-toggle collapsed" data-target=".main-navbar" data-toggle="collapse" type="button">
                    <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="creative-index.html"> <img
                            src="{{asset('images/lamda.png')}}"
                            alt="Lambda - Creative"> Lambda </a>
            </div>
            <div class="nav-container">
                <nav class="collapse navbar-collapse main-navbar logo-navbar navbar-right">
                    <div class="menu-container">
                        <ul class="nav navbar-nav" id="menu-main">
                            <li class="menu-item active  "><a href="{{url('home')}}">{{trans('app.home')}}</a></li>

                            <li class="menu-item  dropdown menu-item-object-oxy_mega_menu"><a class="dropdown-toggle"
                                                                                              data-toggle="dropdown"
                                                                                              href="/#">Elements</a>
                                <ul class="dropdown-menu dropdown-menu-left row">
                                    <li class="menu-item menu-item-object-oxy_mega_columns menu-item-has-children dropdown-submenu dropdown col-md-3">
                                        <strong>Typography &amp; Layout</strong>
                                        <ul class="dropdown-menu-left">
                                            <li class="menu-item"><a href="/creative-elements-basic-type.html">Basic
                                                    Type</a></li>
                                            <li class="menu-item"><a href="/creative-elements-blockquotes.html">Blockquotes</a>
                                            </li>
                                            <li class="menu-item"><a href="/creative-elements-font-icons.html">Font
                                                    Icons</a></li>
                                            <li class="menu-item"><a href="/creative-elements-columns.html">Columns</a>
                                            </li>
                                            <li class="menu-item"><a
                                                        href="/creative-elements-jumbotron.html">Jumbotron</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item menu-item-object-oxy_mega_columns menu-item-has-children dropdown-submenu dropdown col-md-3">
                                        <strong>Bootstrap Components</strong>
                                        <ul class="dropdown-menu-left">
                                            <li class="menu-item"><a href="/creative-elements-accordions.html">Accordions</a>
                                            </li>
                                            <li class="menu-item"><a href="/creative-elements-tabs.html">Tabs</a></li>
                                            <li class="menu-item"><a href="/creative-elements-buttons.html">Buttons</a>
                                            </li>
                                            <li class="menu-item"><a href="/creative-elements-panels.html">Panels</a>
                                            </li>
                                            <li class="menu-item"><a href="/creative-elements-tables.html">Tables</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="menu-item menu-item-object-oxy_mega_columns menu-item-has-children dropdown-submenu dropdown col-md-3">
                                        <strong>Misc</strong>
                                        <ul class="dropdown-menu-left">
                                            <li class="menu-item"><a href="/creative-elements-pricing.html">Pricing</a>
                                            </li>
                                            <li class="menu-item"><a href="/creative-elements-feature-font-icons.html">Feature
                                                    font icons</a></li>
                                            <li class="menu-item"><a href="/creative-elements-features-lists.html">Features
                                                    lists</a></li>
                                            <li class="menu-item"><a href="/creative-elements-scroll-buttons.html">Scroll
                                                    buttons</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item menu-item-object-oxy_mega_columns menu-item-has-children dropdown-submenu dropdown col-md-3">
                                        <strong>Infographic Elements</strong>
                                        <ul class="dropdown-menu-left">
                                            <li class="menu-item"><a href="/creative-elements-charts.html">Charts</a>
                                            </li>
                                            <li class="menu-item"><a href="/creative-elements-features-counters.html">Counters</a>
                                            </li>
                                            <li class="menu-item"><a href="/creative-elements-countdown-timers.html">Countdown
                                                    timers</a></li>
                                            <li class="menu-item"><a href="/creative-elements-pie-charts.html">Pie
                                                    Charts</a></li>
                                            <li class="menu-item"><a href="/creative-elements-progress-bars.html">Progress
                                                    Bars</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item  dropdown "><a class="dropdown-toggle" data-toggle="dropdown"
                                                                href="/#">Portfolio</a>
                                <ul class="dropdown-menu dropdown-menu-left ">
                                    <li class="menu-item"><a href="/creative-portfolio-2-columns.html">2 columns</a>
                                    </li>
                                    <li class="menu-item"><a href="/creative-portfolio-3-columns.html">3 columns</a>
                                    </li>
                                    <li class="menu-item"><a href="/creative-portfolio-4-columns.html">4 columns</a>
                                    </li>
                                    <li class="menu-item"><a href="/creative-portfolio-masonry.html">Masonry</a></li>
                                    <li class="menu-item"><a href="/creative-portfolio-fullwidth.html">Fullwidth</a>
                                    </li>
                                    <li class="menu-item"><a href="/creative-standard-item.html">Standard Item</a></li>
                                    <li class="menu-item"><a href="/creative-gallery-item.html">Gallery Item</a></li>
                                    <li class="menu-item"><a href="/creative-video-item.html">Video Item</a></li>
                                </ul>
                            </li>
                            <li class="menu-item ">
                                @if(URL::current()==route('register'))
                                    <a class="" href="{{route('login')}}">{{trans('app.login')}}</a>
                                @elseif(URL::current()==route('login'))
                                    <a class="" href="{{route('register')}}">{{trans('app.register')}}</a>
                                    @elseif(!Auth::check())
                                    <a class="" href="{{route('login')}}">{{trans('app.login')}}</a>
                                @endif
                            </li>
                            @if(Auth::check())
                                <li class="menu-item  dropdown">
                                    <a class="dropdown-toggle" data-toggle="dropdown" href="/#"
                                       aria-expanded="false">{{Auth::user()->name}}</a>
                                    <ul class="dropdown-menu dropdown-menu-left fixed-list" style="">
                                        <li class="menu-item user-profile top-link-section">
                                            <div class="row " style="margin-{{$dir=='rtl'?'right':'left'}}:20px ">
                                                <div class='col-sm-3 hidden-xs'>
                                                    <img src="{{/*(Auth::user()->getOriginal('image')!="")?Auth::user()->getImageUrl():*/asset('images\icons\avatar.jpg')}}"
                                                         class="img-circle img-thumbnail">
                                                </div>
                                                <div class='col-xs-7'>
                                                    <div class="row">{{trans('profile.name')}}
                                                        <b>{{Auth::user()->name}}</b></div>
                                                    <div class="row">{{trans('profile.email')}}
                                                        <b>{{Auth::user()->email}}</b></div>
                                                    <div class="row">{{trans('profile.address')}}
                                                        <b>{{Auth::user()->address}}</b></div>
                                                    <div class="row"><a href=""
                                                                        class="local">{{trans('profile.profile')}}</a>
                                                    </div>
                                                    @if(Auth::user()->isAdmin())
                                                        <div class="row"><a class="local"
                                                                            href="{{route('admin-home')}}"><span>{{trans('app.admin_panel')}}</span></a>
                                                        </div>
                                                    @endif
                                                    <br>
                                                </div>
                                            </div>
                                            <div class="topmargin-sm">
                                                <a href="{{url('logout')}}" class="btn btn-primary btn-block"
                                                   type="button" style="color: white">{{trans('app.logout')}}</a>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                            @endif
                            <li class="menu-item  dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="/#"
                                                               aria-expanded="false"><img
                                            src="{{asset('images/icons/'.$lang.'.png')}}"></a>
                                <ul class="dropdown-menu dropdown-menu-left ">
                                    @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                        <li class="">
                                            <a class="local" style="margin-left: 5px" rel="alternate"
                                               hreflang="{{$localeCode}}"
                                               href="{{LaravelLocalization::getLocalizedURL($localeCode) }}">
                                                <img src="{{asset('images/'.$localeCode.'.png')}}">
                                                <b>{{ $properties['native'] }}</b>
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </li>

                        </ul>
                    </div>
                    <div class="menu-sidebar">
                        <div class="sidebar-widget widget_search" id="search-5">
                            <form action="creative-index.html" method="get" name="searchform">
                                <div class="input-group">
                                    <input class="form-control" name="s" placeholder="Search" type="text"> <span
                                            class="input-group-btn">
                                    <button class="btn btn-primary" type="submit" value="Search">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span></div>
                            </form>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</div>