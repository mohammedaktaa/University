@extends('layouts.app1')
@section('content')
    <div class="container">
        <div class="col-md-8  col-lg-10 ">
            <!-- Calendar Container -->
            <div class="container">
                <div class="row">
                    <h2 id="details">Choose your package</h2>
                </div>
                <br>
                <!-- Pack 1-->
                @foreach($sem as $item)
                    <div class="col-md-3" id="home-box">

                        <div class="pricing_header">
                            <h2 class="modal-calender" data-value="{{$item->semester_id}}">{{$item['name_'.$lang]}}</h2>
                            <div class="space"></div>
                        </div>
                        <ul class="list-group">
                            @foreach($item->course as $value)
                                <li class="list-group-item"><a><span
                                                class="icon-ok-circle"></span> {{$value['name_'.$lang]}}</a>
                                </li>
                            @endforeach
                        </ul>

                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
<div class="modal fade" id="modal-calendar">
    <div class="modal-dialog" style="min-width: 75%">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span
                            aria-hidden="true">&times;</span><span
                            class="sr-only">@lang('app.close')</span></button>
            </div>
            <div class=" modal-body clearfix margin-sm">
                <div class="form-group">
                    <div class="col-sm-4 form-inline" >
                        <input type="text" placeholder="Enter Date" class="form-control input-date" value="2017-09-25">
                        <button type="button" class="btn btn-labeled btn-info btn-date">
                           <span class="btn-label"><i class="fa fa-search "></i>
                           </span>Search</button>
                    </div>
                </div>
                <div class="js-calendar calendar" data-url="{{url('events')}}" style="margin-top: 100px;"></div>
            </div>
            <div class="modal-footer">
                <button type="button" class="button button-3d button-white color button-reveal  "
                        data-dismiss="modal">
                    <i class="icon-close"></i><span> @lang('app.close')</span></button>
            </div>
        </div>
    </div>
</div>