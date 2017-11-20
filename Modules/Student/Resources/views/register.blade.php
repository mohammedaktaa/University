@extends('layouts.app1')
@section('title')
    {{trans('student::register.register')}}
@endsection
@section('content')
    <div class="wrapper">
        <form method="Post" class="ajax-form" action="{{LocalizeUrl('student/register')}}"
              enctype="multipart/form-data">
            {{csrf_field()}}
            <section class="section">
                <div class="background-overlay" style="background-color: rgba(48,60,64,1);"></div>
                <div class=" container container-fullwidth">
                    <div class="row">
                        <div class="col-md-11 element-top-100 element-bottom-0" style="margin-top: 200px !important">
                            <div class="form-group col-md-4">
                                <input class="form-control input" id="username"
                                       name="username" placeholder="{{trans('student::register.name')}}"
                                       type="text" style="color: aliceblue"
                                       required="">
                            </div>
                            <div class="form-group col-md-4">
                                <input class="form-control input" id="total_baccalurate"
                                       name="total_baccalurate"
                                       placeholder="{{trans('student::register.total_baccalurate')}}"
                                       type="text" style="color: aliceblue"
                                       required="">
                            </div>
                            <div class="form-group col-md-4">
                                <select class="form-control input" name="semester" style="color: aliceblue">
                                    <option style="color: #05050b">Choose semester</option>
                                    <option value="1" style="color: #0a1115 !important;">First</option>
                                    <option value="2" style="color: #0a1115 !important;">Second</option>
                                </select>
                            </div>
                            <div class="form-group col-md-2">
                                <input class="form-control " id="create" type="button"
                                       data-url="{{url('student/subjects')}}"
                                       value="{{trans('student::register.create')}}">
                            </div>
                        </div>

                    </div>
                </div>
            </section>
            <section class="section" id="subjects" hidden>
                <div class="container">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="form-group col-md-8" id="subject-items">

                            </div>
                        </div>
                        <div class="row ">
                            <div class="col-md-3 pull-{{$dir=='ltr'?'right':'left'}}">
{{--                                {{Form::thAutocomplete('','faculty',trans('app.faculty'),'','','faculty[]','',localizeURL('admin/faculty-autocomplete'),true,'','',$faculty,null,0,'width:30% !important')}}--}}

                                {{Form::thAutocomplete('','faculty_university',trans('app.faculty'),'form-control input','','faculty[]','',localizeURL('admin/faculty1-autocomplete'),true,'','',[],null,0,'width:30% !important')}}
                            </div>

                        </div>
                        <div class="row">
                            <div class="form-group col-md-2">
                                <input class="form-control" id="submit-register" type="submit" disabled
                                       value="{{trans('app.save')}}">
                            </div>

                        </div>
                    </div>
                </div>
            </section>
        </form>
    </div>
    @if(count($errors))
        <ul class="container-fluid alert-danger">
            @foreach($errors->all() as $error)
                <li>{{$errors}}</li>
            @endforeach
        </ul>
    @endif
@endsection
@section('js')
    <script>
        $('#create').click(function () {
            var url = $(this).data('url');
            if ($('#total_baccalurate').val() != '' && $('#username').val() != '') {

                $.ajax({
                    type: 'GET',
                    url: url,
                    success: function (data) {
                        for (var $i = 0; $i < data.data.length; $i++) {
                            $('#subject-items').append('<div class="col-md-6">' +
                                '                                  <div class="form-group ">' +
                                '<label for="' + data.data[$i]['name_en'] + '" class="pull-left">' + data.data[$i]['name_' + Lang] + ':</label>' +
                                '                                        <input class="form-control input" id="' + data.data[$i]['name_en'] + '"' +
                                '                                               name="' + data.data[$i]['name_en'].toLowerCase().replace(/ /g, '_') + '" placeholder="' + data.data[$i]['name_' + Lang] + '"' +
                                '                                               type="text"' +
                                '                                               required=""></div>' +
                                '                                </div>')
                        }
                        $('#subjects').show();
                        $('#submit-register').prop('disabled', false);
                    }
                });
                $(this).attr('disabled', 'disabled');
            } else {
                _notifyMsg('danger', 'Please fill out the inputs above', dir == 'ltr' ? 'left' : 'right');
            }
        });
        $('#submit-register').click(function (e) {
            e.preventDefault();
            var $this = $(this);
            var url = $this.closest('form').attr('action');
            var data = $this.closest('form').serialize();
            $.ajax({
                type: 'POST',
                url: url,
                data: data,
                success: function (data) {
                    _notifyMsg('success', data.msg, dir == 'ltr' ? 'left' : 'right');
                    $this.closest('form').find('.input').val('');
//                    SEMICOLON.widget.notifications($('<div id="" data-notify-position="top-right" data-notify-type="' + data.type + '" data-notify-msg="<i class=\'icon-info-sign\'></i>  ' + data.msg + '"></div>'));

                }
            })


        })
    </script>
    {!! $JS['select2'] !!}
    @include('sweet::alert')
@endsection
@section('styles')
    {!! $CSS['select2'] !!}
@endsection
