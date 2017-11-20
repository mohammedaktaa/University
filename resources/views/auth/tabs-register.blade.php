{{--<div class="container">--}}
<div class="row" style="margin-top: 100px; padding-bottom: 100px !important;">
    <div class="col-lg-12 col-md-5 col-sm-8 col-xs-9 ma-tab-container">
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 ma-tab-menu">
            <div class="list-group">
                <a href="#" class="list-group-item active text-center">
                    <h4 class="fa fa-user fa-3x"></h4><br/><b>{{trans('auth.account')}}</b>
                </a>
                <a href="#" class="list-group-item text-center">
                    <h4 class="fa fa-file-text-o fa-3x"></h4><br/><b>{{trans('auth.profile')}}</b>
                </a>

                <a href="#" class="list-group-item text-center">
                    <h4 class="fa fa-phone fa-3x"></h4><br/><b>{{trans('auth.contact')}}</b>
                </a>
                <a href="#" class="list-group-item text-center">
                    <h4 class="fa fa-info-circle fa-3x"></h4><br/><b>{{trans('auth.extra_information')}}</b>
                </a>
            </div>
        </div>
        <form class="form-horizontal" method="POST" action="{{ route('register') }}">
            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 ma-tab">
                <div class="text-center " style="margin-top: 10px;padding-top: 10px">
                    <b style="border-bottom: 5px dotted #FF4C4C;">{{trans('app.welcome')}}</b>
                </div>
                <hr>
                <!-- account section -->
                <div class="ma-tab-content active" style="margin-top: 20px">
                    <div class="ma-tab-content active">

                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <b><label for="name" class="col-md-4 control-label">{{trans('profile.name')}}</label></b>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name"
                                       value="{{ old('name') }}" placeholder="{{trans('profile.name')}}" required
                                       autofocus>

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
                                       value="{{ old('email') }}" placeholder="{{trans('profile.email')}}" required>

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
                                <input id="password" type="password" placeholder="{{trans('profile.password')}}"
                                       class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                        </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm"
                                   class="col-md-4 control-label">{{trans('profile.re_password')}}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password"
                                       placeholder="{{trans('profile.re_password')}}" class="form-control"
                                       name="password_confirmation" required>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- profile section -->
                <div class="ma-tab-content" style="margin-top: 30px">

                    <div class="form-group{{ $errors->has('father_name') ? ' has-error' : '' }}">
                        <label for="father_name" class="col-md-4 control-label">{{trans('profile.father_name')}}</label>

                        <div class="col-md-6">
                            <input id="father_name" type="text" placeholder="{{trans('profile.father_name')}}"
                                   class="form-control" name="father_name"
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
                            <input id="mother_name" type="text" placeholder="{{trans('profile.mother_name')}}"
                                   class="form-control" name="mother_name"
                                   value="{{ old('mother_name') }}" required>

                            @if ($errors->has('mother_name'))
                                <span class="help-block">
                        <strong>{{ $errors->first('mother_name') }}</strong>
                        </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group{{ $errors->has('gender_id') ? ' has-error' : '' }}">
                        <label for="gender" class="col-md-4 control-label">{{trans('profile.gender')}}</label>

                        <div class="col-md-6">
                            <input id="gender" type="text" placeholder="{{trans('profile.gender')}}"
                                   class="form-control" name="gender_id"
                                   value="{{ old('gender_id') }}" required>

                            @if ($errors->has('gender_id'))
                                <span class="help-block">
                        <strong>{{ $errors->first('gender_id') }}</strong>
                        </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('birth_date') ? ' has-error' : '' }} ">
                        <label for="birth_date" class="col-md-4 control-label">{{trans('profile.birth_date')}}</label>

                        <div class="col-md-6 input-group date" style="padding-left: 14px;padding-right: 15px;">
                            <input id="birth_date" type="text" placeholder="{{trans('profile.birth_date')}}"
                                   class="form-control" name="birth_date"
                                   value="{{ old('birth_date') }}" required>
                            <span class="input-group-addon date-addon"><i class="fa fa-th"></i></span>
                            @if ($errors->has('birth_date'))
                                <span class="help-block">
                                      <strong>{{ $errors->first('birth_date') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group{{ $errors->has('university_id') ? ' has-error' : '' }}">
                        <label for="university_id" class="col-md-4 control-label">{{trans('app.university_id')}}</label>

                        <div class="col-md-6">
                            <input id="university_id" type="text" placeholder="{{trans('app.university_id')}}"
                                   class="form-control" name="university_id"
                                   value="{{ old('university_id') }}" required>

                            @if ($errors->has('university_id'))
                                <span class="help-block">
                                      <strong>{{ $errors->first('university_id') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('national_number') ? ' has-error' : '' }}">
                        <label for="national_number"
                               class="col-md-4 control-label">{{trans('app.national_number')}}</label>

                        <div class="col-md-6">
                            <input id="national_number" type="text" placeholder="{{trans('app.national_number')}}"
                                   class="form-control" name="national_number"
                                   value="{{ old('national_number') }}" required>

                            @if ($errors->has('national_number'))
                                <span class="help-block">
                                      <strong>{{ $errors->first('national_number') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>
                </div>

                <!-- contact search -->
                <div class="ma-tab-content" style="margin-top: 30px">

                    <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                        <label for="phone" class="col-md-4 control-label">{{trans('profile.phone')}}</label>

                        <div class="col-md-6">
                            <input id="phone" type="text" placeholder="{{trans('profile.phone')}}" class="form-control"
                                   name="phone"
                                   value="{{ old('phone') }}" required autofocus>

                            @if ($errors->has('phone'))
                                <span class="help-block">
                                      <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('mobile') ? ' has-error' : '' }}">
                        <label for="mobile" class="col-md-4 control-label">{{trans('profile.mobile')}}</label>

                        <div class="col-md-6">
                            <input id="mobile" type="text" placeholder="{{trans('profile.mobile')}}"
                                   class="form-control" name="mobile"
                                   value="{{ old('mobile') }}" required>

                            @if ($errors->has('phone'))
                                <span class="help-block">
                                      <strong>{{ $errors->first('mobile') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
                        <label for="address" class="col-md-4 control-label">{{trans('profile.address')}}</label>

                        <div class="col-md-6">
                            <input id="address" type="text" placeholder="{{trans('profile.address')}}"
                                   class="form-control" name="address"
                                   value="{{ old('address') }}" required>

                            @if ($errors->has('address'))
                                <span class="help-block">
                                      <strong>{{ $errors->first('address') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>

                </div>
                <div class="ma-tab-content" style="margin-top: 30px">
                    <div class="form-group{{ $errors->has('total_baccalaureate') ? ' has-error' : '' }}">
                        <label for="total_baccalaureate"
                               class="col-md-4 control-label">{{trans('app.total_baccalaureate')}}</label>

                        <div class="col-md-6">
                            <input id="total_baccalaureate" type="text" class="form-control" name="total_baccalaureate"
                                   placeholder="{{trans('app.total_baccalaureate')}}"
                                   value="{{ old('total_baccalaureate') }}" required autofocus>

                            @if ($errors->has('total_baccalaureate'))
                                <span class="help-block">
                                      <strong>{{ $errors->first('total_baccalaureate') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('study_year_id') ? ' has-error' : '' }}">
                        <label for="study_year_id" class="col-md-4 control-label">{{trans('app.study_year')}}</label>

                        <div class="col-md-6">
                            <select id="study_year_id" class="form-control select2" multiple="multiple"
                                    data-placeholder="{{trans('app.study_year')}}"
                                    data-url="{{url($lang.'/auto')}}" name="study_year_id" required>
                                <option></option>
                                @foreach($study_years as $study_year)
                                    <option value="{{$study_year->study_year_id}}">{{$study_year['name_'.$lang]}}</option>
                                @endforeach
                            </select>

                            @if ($errors->has('study_year_id'))
                                <span class="help-block">
                                      <strong>{{ $errors->first('study_year_id') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('faculty_id') ? ' has-error' : '' }}">
                        <label for="faculty_id" class="col-md-4 control-label">{{trans('app.faculty')}}</label>
                        <div class="col-md-6">
                            <select id="faculty_id" class="form-control select2" multiple="multiple"
                                    data-placeholder="{{trans('app.faculty')}}"
                                    data-url="{{url($lang.'/auto')}}" name="faculty_id"
                                    required>{{----multiple="multiple"-----}}
                                <option></option>
                                @foreach($faculties as $faculty)
                                    <option value="{{$faculty->faculty_id}}">{{$faculty['name_'.$lang]}}</option>
                                @endforeach
                            </select>
                            @if ($errors->has('faculty_id'))
                                <span class="help-block">
                                      <strong>{{ $errors->first('faculty_id') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4 text-center" style="margin-top: 20px">
                            <button type="submit" class="btn btn-danger">
                                {{trans('app.register')}}
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
{{--</div>--}}