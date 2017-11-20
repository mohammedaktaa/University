<div class="modal fade" id="modal-file-manager" >
    <div class="modal-dialog" style="min-width: 75%">
        <div class="modal-content">
            {!!Form::open(['class'=>'ajax-form','method'=>'put']) !!}
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">@lang('app.close')</span></button>
                <h4 class="modal-title">@lang('admin::main.update_image')</h4>
            </div>
            <div class=" modal-body clearfix margin-sm">
                <div class="container" id="wrapper" style="    margin-top: 50px;">
                    <div class="row" style="margin-top: 20px;">
                        <div class="col-sm-2 hidden-xs">
                            <div id="tree"></div>
                        </div>

                        <div class="col-sm-10 col-xs-12" id="main">
                            <nav class="navbar navbar-default" id="nav">
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                            data-target="#nav-buttons">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                    <a class="navbar-brand clickable hide fa fa-arrow-{{$dir=='ltr'?'left':'right'}}" id="to-previous" style="color: #000431   !important;>
              <i class=">
                                        <span class="hidden-xs">{{ trans('laravel-filemanager::lfm.nav-back') }}</span>
                                    </a>
                                    <a class="navbar-brand visible-xs"
                                       href="#">{{ trans('laravel-filemanager::lfm.title-panel') }}</a>
                                </div>
                                <div class="collapse navbar-collapse" id="nav-buttons">
                                    <ul class="nav navbar-nav navbar-right">
                                        <li>
                                            <a class="clickable" id="thumbnail-display" style="color:#000431   !important;">
                                                <i class="fa fa-th-large"></i>
                                                <span>{{ trans('laravel-filemanager::lfm.nav-thumbnails') }}</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="clickable" id="list-display" style="color: #000431  !important;">
                                                <i class="fa fa-list"></i>
                                                <span>{{ trans('laravel-filemanager::lfm.nav-list') }}</span>
                                            </a>
                                        </li>
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                               aria-haspopup="true" aria-expanded="false" style="color: #000431 !important;">
                                                {{ trans('laravel-filemanager::lfm.nav-sort') }} <span class="caret"></span>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a href="#" id="list-sort-alphabetic">
                                                        <i class="fa fa-sort-alpha-asc"></i> {{ trans('laravel-filemanager::lfm.nav-sort-alphabetic') }}
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" id="list-sort-time">
                                                        <i class="fa fa-sort-amount-asc"></i> {{ trans('laravel-filemanager::lfm.nav-sort-time') }}
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </nav>
                            <div class="visible-xs" id="current_dir"
                                 style="padding: 5px 15px;background-color: #f8f8f8;color: #5e5e5e;"></div>

                            <div id="alerts"></div>

                            <div id="content-files"></div>
                        </div>

                        <ul id="fab" style="{{$dir=='ltr'?'right:0':'left:0;right:auto'}}">
                            <li>
                                <a href="#"></a>
                                <ul class="hide">
                                    <li>
                                        <a href="#" id="add-folder"
                                           data-mfb-label="{{ trans('laravel-filemanager::lfm.nav-new') }}">
                                            <i class="fa fa-folder"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" id="my-upload-btn" data-mfb-label="{{ trans('laravel-filemanager::lfm.nav-upload') }}">
                                            <i class="fa fa-upload"></i>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="button button-3d button-reveal button-reveal " ><i class="icon-plus"></i><span>@lang('app.save')</span></button>
                <button type="button" class="button button-3d button-white color button-reveal  " data-dismiss="modal"><i class="icon-close"></i><span> @lang('app.close')</span></button>
            </div>
            {!!Form::close() !!}
        </div>
    </div>
</div>
<div class="modal fade" id="uploadModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="z-index: 15000">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aia-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">{{ trans('laravel-filemanager::lfm.title-upload') }}</h4>
            </div>
            <div class="modal-body">
                <form action="{{ route('unisharp.lfm.upload') }}" role='form' id='uploadForm' name='uploadForm'
                      method='post' enctype='multipart/form-data'>
                    <div class="form-group" id="attachment">
                        <label for='upload'
                               class='control-label'>{{ trans('laravel-filemanager::lfm.message-choose') }}</label>
                        <div class="controls">
                            <div class="input-group" style="width: 100%">
                                <input type="file" class="doc-upload" id="upload" name="upload[]" multiple="multiple">
                            </div>
                        </div>
                    </div>
                    <input type='hidden' name='working_dir' id='working_dir'>
                    <input type='hidden' name='type' id='type' value='{{ request("type") }}'>
                    <input type='hidden' name='_token' value='{{csrf_token()}}'>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default"
                        data-dismiss="modal">{{ trans('laravel-filemanager::lfm.btn-close') }}</button>
                <button type="button" class="btn btn-primary"
                        id="upload-btn">{{ trans('laravel-filemanager::lfm.btn-upload') }}</button>
            </div>
        </div>
    </div>
</div>
@section('styles')
    <link rel="stylesheet" href="{{ asset('vendor/laravel-filemanager/css/cropper.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/vendor/laravel-filemanager/css/lfm.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/laravel-filemanager/css/mfb.css') }}">
@endsection
@section('scripts')
    <script src="{{asset('js/bootbox.min.js')}}"></script>
    <script src="{{asset('js/jquery-ui.js')}}"></script>
    <script src="{{ asset('vendor/laravel-filemanager/js/cropper.min.js') }}"></script>
    <script src="{{ asset('vendor/laravel-filemanager/js/jquery.form.min.js') }}"></script>
    {{--<script src="{{asset('js/components/file-input/fa/theme.min.js')}}"></script>--}}
    {{--<script type="text/javascript" src="{{asset('js/components/file-input/locales/' . $lang .'.js')}}"></script>--}}
    {{--<script src="{{asset('js/index.js')}}"></script>--}}
    <script>
        var route_prefix = "{{ url('/') }}";
        var lfm_route = "{{ url(config('lfm.prefix')) }}";
        var lang = {!! json_encode(trans('laravel-filemanager::lfm')) !!};
    </script>
    <script src="{{ asset('vendor/laravel-filemanager/js/script.js') }}"></script>
    <script>
        $.fn.fab = function () {
            var menu = this;
            menu.css('color','#FFAABB');
            menu.addClass('mfb-component--br mfb-zoomin').attr('data-mfb-toggle', 'hover');
            var wrapper = menu.children('li');
            wrapper.addClass('mfb-component__wrap');
            var parent_button = wrapper.children('a');
            parent_button.addClass('mfb-component__button--main')
                .append($('<i>').addClass('mfb-component__main-icon--resting fa fa-plus'))
                .append($('<i>').addClass('mfb-component__main-icon--active fa fa-times'));
            var children_list = wrapper.children('ul');
            children_list.find('a').addClass('mfb-component__button--child');
            children_list.find('i').addClass('mfb-component__child-icon');
            children_list.addClass('mfb-component__list').removeClass('hide');
        };
        $('#fab').fab({
            buttons: [
                {
                    icon: 'fa fa-folder',
                    label: "{{ trans('laravel-filemanager::lfm.nav-new') }}",
                    attrs: {id: 'add-folder'}
                },
                {
                    icon: 'fa fa-upload',
                    label: "{{ trans('laravel-filemanager::lfm.nav-upload') }}",
                    attrs: {id: 'upload',style:'background-color:#FFAABB'}
                }
            ]
        });
    </script>
    @endsection