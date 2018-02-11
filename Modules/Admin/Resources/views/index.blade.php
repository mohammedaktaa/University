@extends('admin::layouts.app')
@section('title')
    {{trans('app.home')}}
@endsection
@section('content')
    @include('admin::layouts.crumbs')
    <section>
        <!-- Page content-->
<div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-12">
                <!-- START date widget-->
                <div class="panel widget">
                    <div class="row row-table">
                        <div class="col-xs-6 text-center bg-green pv-lg">
                            <!-- See formats: https://docs.angularjs.org/api/ng/filter/date-->
                            <div data-now="" data-format="MMMM" class="text-sm"></div>
                            <br>
                            <div data-now="" data-format="D" class="h2 mt0"></div>
                        </div>
                        <div class="col-xs-8 pv-lg">
                            <div data-now="" data-format="dddd" class="text-uppercase"></div>
                            <br>
                            <div data-now="" data-format="h:mm" class="h2 mt0"></div>
                            <div data-now="" data-format="a" class="text-muted text-sm"></div>
                        </div>
                    </div>
                </div>
                <!-- END date widget-->
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <!-- START widget-->
                <div class="panel widget bg-info">
                    <div class="row row-table">
                        <div class="col-xs-4 text-center bg-info-dark pv-lg">
                            <em class="icon-people fa-3x"></em>
                        </div>
                        <div class="col-xs-8 pv-lg">
                            <div class="h2 mt0">{{$studebtsNum}}</div>
                            <div class="text-uppercase">{{trans('app.student')}}</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">

                    <div class="col-lg-3 pull-right">
                        <!-- START panel-->
                        <div id="panelDemo1" class="panel panel-default">
                            <div class="panel-heading">{{trans('app.settings')}}
                                <a href="#" data-tool="panel-collapse" data-toggle="tooltip" title="" class="pull-right"
                                   data-original-title="Collapse Panel">
                                    <em class="fa fa-minus"></em>
                                </a>
                            </div>
                            <div class="panel-body collapse in" aria-expanded="true">
                                <div class="form-group">
                                    <label for="admin-gender">{{trans('profile.gender')}}</label>
                                    <select id="admin-gender" class="form-control autocomplete"
                                            data-remote="{{localizeURL('admin/gender-autocomplete')}}" data-letter="0"
                                            data-placeholder="{{trans('profile.gender')}}">
                                    </select><br>
                                    <label for="admin-faculty">{{trans('app.faculty')}}</label>
                                    <select id="admin-faculty" class="form-control autocomplete"
                                            data-remote="{{localizeURL('admin/faculty-autocomplete')}}" data-letter="0"
                                            data-placeholder="{{trans('app.faculty')}}">
                                    </select><br>
                                    <label for="admin-study-year">{{trans('app.study_year')}}</label>
                                    <select id="admin-study-year" class="form-control autocomplete"
                                            data-remote="{{localizeURL('admin/study-year-autocomplete')}}"
                                            data-letter="0"
                                            data-placeholder="{{trans('app.study_year')}}">
                                    </select>
                                    <br>
                                    <label for="slider_year">{{trans('app.years_slider')}}</label>
                                    <input id="slider_year" type="text" class="span2" value="" data-slider-min="2010"
                                           data-slider-max="2020" data-slider-step="1" data-slider-value="[2012,2018]"/>
                                    <br>
                                </div>
                            </div>
                        </div>
                        <!-- END panel-->
                    </div>
                    <div class="col-lg-7 col-lg-offset-1"style="padding: 0px" >
                        <div id="panelChart9" class="panel panel-default panel-demo " hidden style="margin-bottom: 0px !important;">
                            <div class="panel-heading">
                                <a href="#" data-tool="panel-collapse" data-toggle="tooltip" title=""
                                   class="pull-right" data-original-title="Collapse Panel">
                                    <em class="fa fa-minus"></em>
                                </a>
                                <div class="panel-title">{{trans('app.chart')}}</div>
                            </div>
                            <div class="panel-wrapper collapse in" aria-expanded="true" style="">
                                <div class="panel-body">
                                    <div class="loaders1" style="border-radius: 4px" hidden>
                                        <div class="ball-pulse-sync">
                                            <div></div>
                                            <div></div>
                                            <div></div>
                                        </div>
                                    </div>
                                    <div class="chart-spline flot-chart" style="padding: 0px; position: relative;">
                                        <canvas id="bar-chart" class="bar-chart" width="777" height="260"
                                                style="direction: {{$dir}}; position: absolute; left: 0px; top: 0px; width: 777px; height: 260px;"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
        <div class="form-group center">
            <button type="button" class="mb-sm btn btn-inverse btn-outline bar"
                    data-url="{{url('admin/get-faculties')}}">Students
            </button>
            <button type="button" class="mb-sm btn btn-inverse btn-outline bar" data-url="{{url('admin/get-stuYear')}}">
                Stu Year
            </button>
            <button type="button" class="mb-sm btn btn-inverse btn-outline bar"
                    data-url="{{url('admin/get-graduations')}}">Graduations
            </button>
        </div>

</div></section>

@endsection
@section('styles')
    {!! $CSS['select2'] !!}
    {!! $CSS['datatable'] !!}
    {!! $CSS['timepicker'] !!}
    {!! $CSS['bs-filestyle'] !!}
@endsection
@section('scripts')
    {!! $JS['ckeditor'] !!}
    {!! $JS['datatable'] !!}
    {!! $JS['select2'] !!}
    {!! $JS['timepicker'] !!}
    {!! $JS['bs-filestyle'] !!}
    <script type="text/javascript" src="{{asset('js/Chart.bundle.min.js')}}"></script>
    <script>
        $(function () {
            $('#slider_year').slider();
            $('.bar').click(function () {
                $('#panelChart9').show();
                $('#bar-chart').remove();
                $('.flot-chart').append('<canvas id="bar-chart" class="bar-chart" width="777" height="260"' +
                    ' style="direction: {{$dir}}; position: absolute; left: 0px; top: 0px; width: 777px; height: 260px;"></canvas>');
                $('.loaders1').fadeIn(2000);
                $.ajax({
                    type: 'GET',
                    url: $(this).data('url'),
                    data: {'years': $('#slider_year').val().split(',')},
                    success: function (data) {
                        _bar_chart(data.data);
                    }
                })
            })
        })
    </script>
@endsection
