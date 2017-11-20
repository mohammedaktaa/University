@php
    $componentName="testimonial";
    $testimonial= \Modules\General\Http\Controllers\GeneralController::initComponent($componentName);
@endphp
<h4>@lang('app.patients_testimonials')<span>.</span></h4>
<ul class="testimonials-grid grid-2 clearfix">
    @for($i=0;$i<$testimonial->count();$i++)
        <li class=" no{{$right}}padding notoppadding">
            <div class="testimonial">
                {{--<div class="testi-image">
                    <a href="#"><img src="{{ asset('images/testimonials/1.jpg') }}" alt="Customer Testimonails"></a>
                </div>--}}
                <div class="testi-content">
                    <p>{{$testimonial[$i]['description_'.$lang]}}</p>
                    <div class="testi-meta">
                        {{$testimonial[$i]['name_'.$lang]}}
                        {{--<span>XYZ Inc.</span>--}}
                    </div>
                </div>
            </div>
        </li>
    @endfor
</ul>
<div class="clear"></div>
<a href="#" class="button button-mini button-rounded norightmargin fright">@lang('app.more_patient_feedback')</a>
<div class="clear"></div>