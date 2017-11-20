@extends('admin::layouts.app')
@section('title')
    {{trans('app.home')}}
@endsection
@section('content')
    @include('admin::layouts.crumbs')
    <section>
        <!-- Page content-->

        <div class="row col-lg-offset-2">
            <div class="col-lg-9">
                <div class="row">
                    <div class="form-group center">
                        <label for="slider_year">{{trans('app.years_slider')}}</label>
                        <input id="slider_year" type="text" class="span2" value="" data-slider-min="2010"
                               data-slider-max="2020" data-slider-step="1" data-slider-value="[2015,2018]"/>
                    </div>
                    <div class="col-lg-12">
                        <div id="panelChart9" class="panel panel-default panel-demo ">
                            <div class="panel-heading">
                                <a href="#" data-tool="panel-collapse" data-toggle="tooltip" title=""
                                   class="pull-right" data-original-title="Collapse Panel">
                                    <em class="fa fa-minus"></em>
                                </a>
                                <div class="panel-title">Inbound visitor statistics</div>
                            </div>
                            <div class="panel-wrapper collapse in" aria-expanded="true" style="">
                                <div class="panel-body">
                                    <div class="loaders1" hidden>
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
    </section>

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
