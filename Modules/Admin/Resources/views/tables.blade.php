@extends(\Request::ajax()==1? 'admin::layouts.ajax': 'admin::layouts.app')
@section('title')
    {{trans("admin::menu.$table")}}
    @endsection
@section('content')
    @include('admin::layouts.crumbs')
        <section >
            <div class="content-wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-10" style="">
                            <div id="panelDemo1" class="panel panel-dark">
                                <div class="panel-heading ">{{str_replace_first( '-',' ',trans("admin::menu.$table"))}}
                                    <a href="#" data-tool="panel-collapse" data-toggle="tooltip" title=""
                                       class="pull-right"
                                       data-original-title="Collapse Table {{$table}}">
                                        <em class="fa fa-minus"></em>
                                    </a>
                                </div>
                                <div class="panel-wrapper collapse in" aria-expanded="true" style="">
                                    <div class="panel-body" style="padding:0px !important">
                                        {{--                                        @if(Request::ajax()==1)--}}
                                        @php $params=\Request::getQueryString() ? ('?' . \Request::getQueryString()) : ''; @endphp
                                        {!! datatable($tableName,$params) !!}
                                        {{--@endif--}}
                                    </div>
                                </div>
                            </div>
                            <!-- END panel-->
                        </div>
                    </div>
                </div>
            </div>
            @if(session('message','Hi'))
                <div class="flash-message" style="position: absolute;z-index: 100;{{$dir=='rtl'?'left':'right'}}: 40px;">
                    @foreach (['danger', 'warning', 'success', 'info'] as $msg)
                        @if(Session::has( $msg))

                            <p class="alert alert-{{ $msg }}">{{ Session::get($msg) }} <a href="#" class="close"
                                                                                          data-dismiss="alert"
                                                                                          aria-label="close"
                                                                                          style="padding-left: 5px">&times;</a>
                            </p>
                        @endif
                    @endforeach
                </div>
            @endif
        </section>

        {{--</div>--}}
@endsection
@section('modal')
    @if(view()->exists('admin::table-extras.'.$table.'-table'))
        @include('admin::table-extras.'.$table.'-table')
    @endif

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
@endsection
