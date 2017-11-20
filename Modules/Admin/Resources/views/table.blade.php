@extends('admin::layouts.app')
@section('content')
    <section>
        <div class="content-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10" style="">

                        <div id="panelDemo1" class="panel panel-dark">
                            <div class="panel-heading">{{trans("admin::menu.$table")}}
                                <a href="#" data-tool="panel-collapse" data-toggle="tooltip" title="" class="pull-right" data-original-title="Collapse Table {{$table}}">
                                    <em class="fa fa-minus"></em>
                                </a>
                            </div>
                            <div class="panel-wrapper collapse in" aria-expanded="true" style="">
                                <div class="panel-body">
                                    {!! datatable($tableName) !!}
                                </div>
                            </div>
                        </div>
                        <!-- END panel-->
                    </div>
                </div>
            </div>
        </div>
    </section>
    @if($hasExtra)
        @include("admin::table-extras.$tableName")
    @endif
@endsection
@section('styles')
    {!! $CSS['select2'] !!}
    {!! $CSS['datatable'] !!}
    {!! $CSS['timepicker'] !!}
@endsection
@section('scripts')
    {!! $JS['select2'] !!}
    {!! $JS['datatable'] !!}
    {!! $JS['timepicker'] !!}
    {!! $JS['ckeditor'] !!}
@endsection
