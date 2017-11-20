{{--<div class="container">--}}
<div class="row" style="margin-top: 100px; padding-bottom: 100px !important;">

    <div class="col-lg-12 col-md-5 col-sm-8 col-xs-9 ma-tab-container">
        <div class="loaders1" hidden>
            <div class="ball-pulse-sync">
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 ma-tab-menu">
            <div class="list-group">
                <a href="#" class="list-group-item active text-center">
                    <h4 class="fa fa-user fa-3x"></h4><br/><b>{{trans('auth.by_id')}}</b>
                </a>
                <a href="#" class="list-group-item text-center">
                    <h4 class="fa fa-envelope fa-3x"></h4><br/><b>{{trans('auth.by_email')}}</b>
                </a>

            </div>
        </div>

        <!-- account section -->
        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 ma-tab">

            <div class="text-center " style="margin-top: 10px;padding-top: 10px">
                <b style="border-bottom: 5px dotted #FF4C4C;">{{trans('app.welcome')}}</b>
            </div>
            <hr>
            <!-- account section -->
            <div class="ma-tab-content active" style="margin-top: 20px">
                <form id="" class="form-horizontal ajax-form" method="POST" action="{{ route('custom-login') }}">

                        {{ csrf_field() }}
                        <div class="form-group{{ $errors->has('university_id') ? ' has-error' : '' }}">
                            <label for="university_id" class="col-md-4 control-label">{{trans('app.university_id')}}</label>

                            <div class="col-md-6">
                                <input id="university_id" type="text" class="form-control" name="university_id"
                                       value="{{ old('university_id') }}"  autofocus>

                                @if ($errors->has('university_id'))
                                    <span class="help-block">
                                         <strong>{{ $errors->first('university_id') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">{{trans('profile.password')}}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" >

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                       <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4 text-center" style="margin-top: 20px">
                         <b><button type="submit" class="btn btn-danger">
                                {{trans('app.login')}}
                            </button></b>
                        </div>
                    </div>
                </form>
            </div>
            <!-- profile section -->
            <div class="ma-tab-content" style="margin-top: 30px">
                <form id="email-login" class="form-horizontal ajax-form" method="POST" action="{{ route('custom-login') }}">
                    {{csrf_field()}}
                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <label for="email" class="col-md-4 control-label">{{trans('profile.email')}}</label>
                        <div class="col-md-6">
                            <input id="email" type="email" class="form-control" name="email"
                                   value="{{ old('email') }}" required>
                            @if ($errors->has('email'))
                                <span class="help-block">
                                   <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <label for="password" class="col-md-4 control-label">{{trans('profile.password')}}</label>
                        <div class="col-md-6">
                            <input id="password" type="password" class="form-control" name="password" >
                            @if ($errors->has('password'))
                                <span class="help-block">
                                      <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4 text-center" style="margin-top: 20px">
                         <b><button type="submit" class="btn btn-danger">
                                {{trans('app.login')}}
                            </button></b>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{--@if(count($errors))--}}
        {{--<ul class="alert alert-danger" >--}}
            {{--@foreach($errors->all() as $error)--}}
                {{--<li >{{$error}}</li>--}}
            {{--@endforeach--}}
        {{--</ul>--}}
    {{--@endif--}}
</div>


{{--</div>--}}