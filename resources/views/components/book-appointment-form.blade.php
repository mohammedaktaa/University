<div id="booking-appointment-form" class=" col-md-7 nopadding">
    <div class="bgcolor col-padding">
        <h2>@lang('menu.appointment'):</h2>
        <div id="{{--medical-form-result--}}" data-notify-type="success" data-notify-msg="<i class=icon-ok-sign></i> @lang('general::main.message_send_success')"></div>
        <form class="nobottommargin ajax-form" id="" name="template-medical-form" action="{{localizeURL('appointments')}}" method="post">
            <div class="col_two_third">
                <label for="template-medical-name">@lang('general::main.name'):</label>
                <input type="text" id="template-medical-name" name="name" class="form-control not-dark required" value="">
            </div>
            <div class="col_one_third col_last">
                <label for="template-medical-phone">@lang('app.phone'):</label>
                <input type="text" id="template-medical-phone"  name="phone" class="en form-control not-dark required" value="">
            </div>
            <div class="clear"></div>
            <div class="col_one_third">
                <label for="template-medical-email">@lang('app.email'):</label>
                <input type="email" id="template-medical-email" name="email" class="en form-control not-dark required" value="">
            </div>
            <div class="col_one_third">
                <label for="template-medical-branch">@lang('app.branch'):</label>
                <select id="template-medical-branch" name="branch_id" class=" form-control not-dark required">
                    <option ></option>
                    @foreach($branches as $branch)
                        <option value="{{$branch->branch_id}}">{{$branch['title_'.$lang]}} </option>
                    @endforeach
                </select>
            </div>
            <div class="col_one_third col_last">
                <label for="">@lang('app.birth_of_date'):</label>
                <input type="text" id="" name="birth_date" class="form-control not-dark datepicker required" value="" placeholder="">
            </div>
            <div class="clear"></div>
            <div class="col_two_fifth nobottommargin">
                <div class="col_full">
                    <label for="template-medical-appoint-date">@lang('app.appointment_date'):</label>
                    <input type="text" id="" name="appointment_date" class="form-control not-dark required datetime" value="" placeholder="">
                </div>
                <div class="col_full nobottommargin">
                    <label for="template-medical-second-booking">@lang('app.booked_before')</label><br>
                    <label class="rightmargin-sm">
                        <input type="radio" id="template-medical-second-booking" name="is_booked_before" value="Y">
                        @lang('app.yes')
                    </label>
                    <label>
                        <input type="radio" name="is_booked_before" value="N" checked>
                        @lang('app.no')
                    </label>
                </div>
            </div>
            <div class="col_three_fifth nobottommargin col_last">
                <label for="template-medical-message">@lang('app.message'):</label>
                <textarea id="template-medical-message" name="message" class="form-control not-dark required" cols="30" rows="5"></textarea>
            </div>
            <div class="clear"></div>
            <div class="col_full hidden">
                <input type="text" name="botcheck" value="" />
            </div>
            <div class="col_full topmargin-sm nobottommargin">
                <button class="button button-rounded button-white button-light nomargin" type="submit" value="submit">@lang('app.confirm_booking')</button>
            </div>
            <div class="clear"></div>
        </form>

    </div>
</div>