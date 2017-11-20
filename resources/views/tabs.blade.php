<div class="container">
    <div class="row" style="margin-top: 100px; padding-bottom: 100px !important;">
        <div class="col-lg-5 col-md-5 col-sm-8 col-xs-9 bhoechie-tab-container">
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 bhoechie-tab-menu">
                <div class="list-group">
                    <a href="#" class="list-group-item active text-center">
                        <h4 class="fa fa-plane"></h4><br/>{{trans('auth.account')}}
                    </a>
                    <a href="#" class="list-group-item text-center">
                        <h4 class="fa fa-road"></h4><br/>{{trans('auth.profile')}}
                    </a>
                    <a href="#" class="list-group-item text-center">
                        <h4 class="fa fa-home"></h4><br/>{{trans('auth.extra_information')}}
                    </a>
                    <a href="#" class="list-group-item text-center">
                        <h4 class="fa fa-cutlery"></h4><br/>{{trans('auth.contact')}}
                    </a>
                </div>
            </div>
            <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 bhoechie-tab">
                    <!-- flight section -->
                    <div class="bhoechie-tab-content active" style="margin-top: 20px">
                        <div class="bhoechie-tab-content active">

                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <label for="name" class="col-md-4 control-label">{{trans('profile.name')}}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" name="name"
                                           value="{{ old('name') }}" required autofocus>

                                    @if ($errors->has('name'))
                                        <span class="help-block">
                        <strong>{{ $errors->first('name') }}</strong>
                        </span>
                                    @endif
                                </div>
                            </div>

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
                                    <input id="password" type="password" class="form-control" name="password" required>

                                    @if ($errors->has('password'))
                                        <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="password-confirm" class="col-md-4 control-label">{{trans('profile.re_password')}}</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control"
                                           name="password_confirmation" required>
                                </div>
                            </div>

                            {{--<div class="form-group">--}}
                            {{--<div class="col-md-6 col-md-offset-4">--}}
                            {{--<button type="submit" class="btn btn-primary">--}}
                            {{--Register--}}
                            {{--</button>--}}
                            {{--</div>--}}
                            {{--</div>--}}

                        </div>

                    </div>
                    <!-- train section -->
                    <div class="bhoechie-tab-content" style="margin-top: 20px">

                        <div class="form-group{{ $errors->has('father_name') ? ' has-error' : '' }}">
                            <label for="father_name" class="col-md-4 control-label">{{trans('profile.father_name')}}</label>

                            <div class="col-md-6">
                                <input id="father_name" type="text" class="form-control" name="father_name"
                                       value="{{ old('father_name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                        <strong>{{ $errors->first('father_name') }}</strong>
                        </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('mother_name') ? ' has-error' : '' }}">
                            <label for="mother_name" class="col-md-4 control-label">{{trans('profile.mother_name')}}</label>

                            <div class="col-md-6">
                                <input id="mother_name" type="text" class="form-control" name="mother_name"
                                       value="{{ old('mother_name') }}" required autofocus>

                                @if ($errors->has('mother_name'))
                                    <span class="help-block">
                        <strong>{{ $errors->first('mother_name') }}</strong>
                        </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('gender') ? ' has-error' : '' }}">
                            <label for="gender" class="col-md-4 control-label">{{trans('profile.gender')}}</label>

                            <div class="col-md-6">
                                <input id="gender" type="text" class="form-control" name="gender"
                                       value="{{ old('gender') }}" required autofocus>

                                @if ($errors->has('gender'))
                                    <span class="help-block">
                        <strong>{{ $errors->first('gender') }}</strong>
                        </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('birth_date') ? ' has-error' : '' }}">
                            <label for="birth_date" class="col-md-4 control-label">{{trans('profile.birth_date')}}</label>

                            <div class="col-md-6">
                                <input id="birth_date" type="text" class="form-control" name="birth_date"
                                       value="{{ old('birth_date') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                        <strong>{{ $errors->first('birth_date') }}</strong>
                        </span>
                                @endif
                            </div>
                        </div>
                    </div>

                    <!-- hotel search -->
                    <div class="bhoechie-tab-content" style="margin-top: 20px">
                        <center>
                            <h1 class="fa fa-home" style="font-size:12em;color:#55518a"></h1>
                            <h2 style="margin-top: 0;color:#55518a">Cooming Soon</h2>
                            <h3 style="margin-top: 0;color:#55518a">Hotel Directory</h3>
                        </center>
                    </div>
                    <div class="bhoechie-tab-content" style="margin-top: 20px">
                        <center>
                            <h1 class="fa fa-cutlery" style="font-size:12em;color:#55518a"></h1>
                            <h2 style="margin-top: 0;color:#55518a">Cooming Soon</h2>
                            <h3 style="margin-top: 0;color:#55518a">Restaurant Diirectory</h3>
                        </center>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>