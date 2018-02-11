/**
 * Created by Mohammad on 9/17/2017.
 */
$(function () {
    if ($('#top-login').length)
        _validate($('#top-login').parent());
    _loadEvents();
    $(document).ajaxStart(function (e) {
        $('.loader').fadeIn(3000, function () {
            $(this).remove();
        });
        $('.loaders1').fadeIn(2000);
    });
    $(document).ajaxStop(function () {
        $(this).unbind("ajaxStart");
        $('.loader').fadeOut(2000);
        $('.loaders').fadeOut(2000);
        $('.loaders1').fadeOut(2000);
        // $('.loaders').fadeIn(6000);
    });

});
$(function () {

    $('.modal-calender').click(function () {
        var $this = $(this);
        var value = $this.data('value');
        // alert('hgfg')
        $('#modal-calendar').on('shown.bs.modal', function () {
            _fullCalendar(value);
        });
        $('#modal-calendar').modal('show');
    });
});

var _notifyMsg = function (type, msg, position) {
    var notifyIcon = (type == 'danger') ? 'fa fa-times' : 'fa fa-check';
    jQuery.notify({icon: notifyIcon, message: msg}, {
        element: "body",
        type: type,
        allow_dismiss: !0,
        newest_on_top: !0,
        showProgressbar: !1,
        placement: {align: position},
        offset: 20,
        spacing: 10,
        opacity: 0.7,
        z_index: 1999999999,
        delay: 5e3,
        timer: 1e3,
        animate: {enter: "animated fadeIn", exit: "animated fadeOutDown"}
    })
}

function _ajaxLoadHeader() {
    var url=baseUrl+'header-update';
    $('.aside').load(url,function () {

    })
}

function _loadEvents($container, callback) {
    if (null == $container) $container = $('.wrapper');
    _validate($container, callback); // Dynamic ajax validation
    _ajax_load_page();
    // _scroll();
    _editable($container); // Dynamic editable
    _imageUpload($container);  // Dynamic image Uploads
    _imageCropUpload($container);
    _docUpload($container);// Dynamic documents Uploads
    _textEditor($container);    //CK Editor
    _ajaxreqs($('body')); // Dynamic ajax requests
    _select2($container); // Dynamic select2
    _datePicker($container);
    _dateTimePicker($container);
    _timePicker($container);
    _gmapView($container);
    _gmapModalView($container);
    // _bar_chart();
    /*_arabicFormat($container);
     _numberFormat($container);*/
    _openSelectedTree();
}

jQuery(document).ready(function ($) {

    $('.ajax').each(function () {
        var $this = $(this);
        /*       if($this.find('.ajax').closest('li').find('a').hasClass('current')){
                   var current=$this.find('.ajax').closest('li').find('a.current');
                   console.log(current)
                   for(var i=7;i<=0;i--){
                       console.log(i);
                   $('.bread').append('<li>\n' +
                       '                    <a href="">'+current.parent().eq(i)+'</a>' +
                       '                </li>');
                   }
               }
              else*/
        if ($this.find('a').hasClass('current')) {
            $('.bread').append('<li>\n' +
                '                    <a href="">' + $(this).parent().data('name') + '</a>' +
                '                </li>' + '<li>\n' +
                '                    <a href="' + $(this).children().first().attr('href') + '">' + $(this).children().first().text() + '</a>' +
                '                </li>');
        }
    })
// site preloader -- also uncomment the div in the header and the css style for #preloader
    $(window).load(function () {
        $('.loader').fadeOut('slow', function () {
            $(this).remove();
        });
        // $('body').addClass('loaded');
    });


});
var rFactor = function () {
    return Math.round(Math.random() * 100);
};
function _scroll() {
    $('.wrapper').find('.scroll').each(function () {
      $(this).niceScroll();
    })
}
function _bar_chart(datas) {
    var labels = [];
    var data = [];

    for (var i = 0; i < datas.length; i++) {
        labels[i] = datas[i]['labels'];
        data[i] = datas[i]['data'];
    }
    var ctx = document.getElementById("bar-chart");
    // var myChart = new Chart(ctx);
    // myChart.destroy();
    myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: labels ? labels : ["Red", "Blue", "Yellow", "Green", "Purple", "Orange"],
            datasets: [{
                label: ' Student',
                data: data ? data : [12, 19, 3, 5, 2, 3],
                backgroundColor:
                    'rgba(255, 99, 132, 0.2)'
                // 'rgba(54, 162, 235, 0.2)',
                // 'rgba(255, 206, 86, 0.2)',
                // 'rgba(75, 192, 192, 0.2)',
                // 'rgba(153, 102, 255, 0.2)',
                // 'rgba(255, 159, 64, 0.2)'
                ,
                borderColor:
                    'rgba(255,99,132,1)'
                // 'rgba(54, 162, 235, 1)',
                // 'rgba(255, 206, 86, 1)',
                // 'rgba(75, 192, 192, 1)',
                // 'rgba(153, 102, 255, 1)',
                // 'rgba(255, 159, 64, 1)'
                ,
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }],
                xAxes: [{
                    barPercentage: 0.4
                }]

            },
            title: {
                display: true,
                text: 'Predicted Students (millions) in 2050'
            }

        }
    });
}
function _edit($thiss) {
    var $this=$($thiss);
    var obj = _aut_datatable_getSelectedRow(_aut_datatable_getTableObjectApi('#'+$this.closest('table').attr('id')), $(($this).closest('tr')));
    console.log(obj)
    var th = $this.closest('table').find('th').eq( $this.cellIndex );

    $this.closest('tr').find('td').each(function(){
        $(this).hide();
        $(this).closest('table').find('thead').find('th').eq($(this).closest('td').index())
        $(this).append('<input type="text" name="" class="fom-control">')
    })
}
function _ajax_load_page() {
    $('.wrapper').on('click', '.ajax', function (e) {
        e.preventDefault();
        var $this = $(this);
        var url = $(this).children().first().attr('href');
        var title = $this.find('a').data('title');
        $('.ajax').each(function () {
            $(this).find('a').removeClass('current');
        });
        $.ajax({
            type: 'GET',
            url: url,
            // data:{ajax:1},
            success: function (data) {
                $this.children().first().addClass('current');
                $('#content').find('.loaders').show();
                History.pushState({
                    page: $this.data('history'),
                    ajax: true
                }, ' UniMa | ' + title, $this.data('history'));
                history.pushState(title, title, url);
                $('#content-ajax').html(data.html);
                $('.bread').append('<li>\n' +
                    '                    <a href="">' + $this.parent().data('name') + '</a>' +
                    '                </li>' + '<li>\n' +
                    '                    <a href="">' + $this.children().text() + '</a>' +
                    '                </li>');
                aut_datatable_refresh('#content-ajax', true);
            },
            complete: function () {
                // $('#content').find('.loaders').hide();
            }
        })
    })
}

function aut_datatable_refresh(selector, forceload) {

    $(selector + ' .datatable').each(function () {

        if (forceload || $(this).attr('data-load') == 'false')
            $(this).load($(this).attr('data-url'), function () {
                $(this).attr('data-load', true);
            });
    });
}

function modal_refresh(m, id, lang) {
    $(m + " .calendar").each(function () {
        var $this = $(this);
        $($this).fullCalendar('destroy');
        $($this).fullCalendar({
            firstDay: 1,
            weekNumbers: true,
            navLinks: true, // can click day/week names to navigate views
            editable: true,
            // showNonCurrentDates:false,
            nowIndicator: false,
            contentHeight: 500,
            aspectRatio: 2,
            eventLimit: true,
            droppable: true,
            // weekends:false,
            hiddenDays: [5, 6],
            themeButtonIcons: {
                prev: 'icon-angle-right',
                next: 'icon-angle-right',
                prevYear: 'icon-angle-up',
                nextYear: 'icon-angle-down',
            },
            themeSystem: 'bootstrap3',
            header: {
                left: 'prev,next,prevYear,nextYear today',
                center: 'title',
                right: 'month,agendaWeek,agendaDay,listWeek,agendaFourDay'
            },
            locale: lang,
            isRtl: true,
            dayClick: function (date, jsEvent, view, resourceObj, element) {
                console.log(element);
                alert('Date: ' + date.format());
                alert('Resource ID: ' + resourceObj.title);

            },
            // eventRender: function(event, element) {
            //     element.qtip({
            //         content: event.title
            //     });
            // },

            // eventDestroy:function(event, element) {
            //     console.log(element);
            //         element.qtip({
            //             content: event.title
            //         });
            //     },
            events: $(this).data("url") + '/' + id,
            eventClick: function (calEvent, jsEvent, view) {

                console.log('Event: ' + calEvent.title);
                console.log('Coordinates: ' + jsEvent.pageX + ',' + jsEvent.pageY);
                console.log('View: ' + view.name);
                $(this).css('background-color', 'red');

            },
            views: {
                agendaFourDay: {
                    type: 'agenda',
                    duration: {days: 4},
                    buttonText: '4 day'
                }
            }
        });
        $('.btn-date').click(function () {
            var date = $(m).find('.input-date').val();
            $this.fullCalendar('gotoDate', date);
        });

    })
}

function _fullCalendar(id) {
    $('.calendar').each(function (modal) {
        var $this = $(this);
        var url = $this.data('url') + '/' + id;
        var initialLocaleCode = Lang;
        modal_refresh('#modal-calendar', id, initialLocaleCode)

        // $.each($.fullCalendar.locales, function(localeCode) {
        //     $('#locale-selector').append(
        //         $('<option/>')
        //             .attr('value', localeCode)
        //             .prop('selected', localeCode == initialLocaleCode)
        //             .text(localeCode)
        //     );
        // });

        // when the selected option changes, dynamically change the calendar option
        // $('#locale-selector').on('change', function() {
        //     if (this.value) {
        //         $('.js-calendar').fullCalendar('option', 'locale', this.value);
        //     }
        // });
    })
}

function _openSelectedTree() {
    $('.tree-node .selected').parents('.tree-node').children('.tree-node-title').find('i.toggle-closed').click();//open selected Tree Node
}

function _validate($cont, inCallback, inMethod, resetForm) {
    //Standard: input:
    /*
     <div class="col_full">
     <label for="ch-page-name">@lang('community-hubs.name') <small>*</small></label>
     <span class=" show-error-msg " id="error-ch-page-name"></span>
     <label id="ch-page-name-error" class="error f{{$right}}" for="ch-page-name">{{count($errors->get('name'))?$errors->get('name')[0]:''}}</label>
     {!!Form::input('text','ch-page-name',Session::getOldInput('ch-page-name',""),['id'=>'ch-page-name','data-msg'=>trans('validation.custom.required'),'class'=>'form-control required']) !!}
     </div>
     */
    //Notise error field should be:error + id of the field e.g.:error-ch-page-name
    if (typeof($.fn.validate) != 'undefined') {
        var $this = $('#wrappers');
        $this.find('form.ajax-form').each(function () {
            var url = $(this).attr('action');
            var method = inMethod || $(this).attr('method') || 'post';
            var callback = inCallback || $(this).attr('data-callback');//support callback function (defiend by user - client side)
            var rules = [];
            $(this).validate().destroy();
            var validator = $(this).validate({
                    submitHandler: function (form, e) {
                        e.preventDefault();
                        $('#wrappers').find('.loaders1').show();
                        __loaderStart(form);
                        $.ajax({
                            type: method,
                            url: url,
                            data: $(form).serialize(),
                            success: function (data) {
                                console.log(data.msg + "   " + data.redirect)
                                if (callback != null) {// Support callback function (defined by user - client side)
                                    fn = window[callback];
                                    if (typeof fn === "function")
                                        fn(data);
                                }
                                __loaderEnd(form);
                                if (null != data.msg) {// Support (server side) message
                                    SEMICOLON.widget.notifications($('<div id="" data-notify-position="top-right" data-notify-type="' + data.type + '" data-notify-msg="<i class=\'icon-info-sign\'></i>  ' + data.msg + '"></div>'));
                                    _notifyMsg(data.type, data.msg, 'right');
                                }
                                if (null != data.redirect) { //support (server side) redirect
                                    window.location = data.redirect;
                                }
                                if ($(form).parents('.modal:first').length > 0 && !$(form).parents('.modal:first').data('no-dismiss')) {
                                    $(form).parents('.modal:first').modal('hide');
                                }
                            },
                            error: function (data) {
                                __loaderEnd(form);
                                var errorsObj = data.responseJSON;
                                if (null != data.msg) {// Support (server side) message
                                    _notifyMsg(data.type, data.msg, 'right');
                                    SEMICOLON.widget.notifications($('<div id="" data-notify-position="top-right" data-notify-type="' + data.type + '" data-notify-msg="<i class=\'icon-info-sign\'></i>  ' + data.msg + '"></div>'));
                                }
                                if (null != errorsObj) {// Support (server side) validation errors
                                    var scrolled = false; // helper to Support scroll to first error field
                                    for (i in errorsObj) { //handle each field error
                                        var $errorField = $(form).find('[name="' + i + '"]:first');
                                        if (errorsObj[i].length > 1) {//handle  field multiple errors
                                            errorsStr = "";
                                            for (var j = 0; j < errorsObj[i].length; j++) {
                                                errorsStr += "<li>" + errorsObj[i][j] + "</li>";
                                            }
                                        } else {
                                            var errorsStr = errorsObj[i][0];
                                        }
                                        $(form).find('#' + $errorField.attr('id') + '-error').html(errorsStr).show();// show errors
                                        // if (!scrolled) { //scroll to first field error field
                                        //     $('html, body').animate({
                                        //         scrollTop: ($errorField.offset().top - 100)
                                        //     }, 1000);
                                        //     scrolled = true;
                                        // }
                                        //Handle Opening Tab
                                        if ($errorField.parents('.tab-content:first').length > 0) {
                                            var tabId = $errorField.parents('.tab-content:first').attr('Id');
                                            $('a[href="#' + tabId + '"]').click();
                                        }
                                    }
                                }
                            },
                            dataType: "json"
                        });
                        return false;
                    },
                    ignore: '.not-required :input',
                    errorPlacement: function ($error, $element) {
                        var id = $element.attr("id");
                        $error.addClass('f' + right);
                        $("#error-" + id).after($error);

                    },
                    /*
                     errorClass: 'error f' + right+' validate-error validate-error-help-block validate-error-style  ',
                     */
                    highlight: function (e, errorClass, validClass) {
                        var elem = jQuery(e);
                        elem.addClass(errorClass);
                        /*elem.parent('.form-group').removeClass('has-error').addClass('has-error');
                         elem.closest('.help-block').remove();*/
                        //Handle Opening Tab
                        if (elem.parents('.tab-content:first').length > 0) {
                            var tabId = elem.parents('.tab-content:first').attr('Id');
                            $('a[href="#' + tabId + '"]').click();
                        }
                    },
                    /* unhighlight: function(e, errorClass, validClass) {
                     var elem = jQuery(e);
                     elem.parent('.form-group').removeClass('has-error');
                     },*//*
                     success: function(e) {
                     var elem = jQuery(e);
                     elem.parent('.form-group').removeClass('has-error');
                     elem.closest('.help-block').remove();
                     }
                     */
                }
            );
            if (resetForm)
                validator.resetForm();

            $(this).find('.has-error').removeClass('has-error');
            if ($(this).find('.autocomplete').length) {
                $(this).bind('invalid-form.validate', function () {
                    $('select.autocomplete.required').each(function () {
                        if ($(this).val() == null)
                            $(this).parent().addClass('has-error');
                        else
                            $(this).parent().removeClass('has-error');
                    });
                });
            }
        });
    }
    /*else console.log('warning: validate is not defined');*/

}

function _resetValidatorForm($cont, callback) {
    $cont.find('.autocomplete').html('');
    $cont.find('.image-crop-upload').attr('src', '');
    if (typeof(CKEDITOR) != 'undefined') {
        for (name in CKEDITOR.instances) {
            if ($cont.find('textarea[name="' + name + '"]').length)
                CKEDITOR.instances[name].setData('');
        }
    }
    _select2($cont);
    _validate($cont, callback, null, true);
}

function _editable($cont) {
    if (typeof($.fn.editable) != 'undefined') {
        $cont = $($cont);
        $cont.find('.editable').each(function () {
            var $this = $(this);
            var url = $this.data('data-ajax-url');
            var method = $this.data('data-ajax-url') || 'put';
            $this.editable({
                url: function (params) {
                    var data = {};
                    data[params.name] = params.value;
                    if (method != "post") data._method = method;
                    $.post(url, data, function (data) {
                        SEMICOLON.widget.notifications($('<div id="" data-notify-position="top-right" data-notify-type="' + (typeof(data[name]) == typeof(undefined) ? "info" : "error") + '" data-notify-msg="<i class=\'icon-info-sign   \'></i> <span class=\'\'> ' + data.msg + (data[name] || '') + '</span>"></div>'));
                    });
                },
                format: 'DD/MM/YYYY',
                viewformat: 'DD/MM/YYYY',
                width: 350
            });
        });
    }
    /*else console.log('warning: editable is not defined');*/
}

function _imageUpload($cont) {
    // Standard input:
    //Notise: name= image,input file id= XXX,input text id= XXX-name,label error=XXX-name-error
    if (typeof($.fn.fileinput) != 'undefined') {
        $cont = $($cont);
        $cont.find(".image-upload:not('.temp')").fileinput('destroy');
        $cont.find(".image-upload:not('.temp')").each(function () {
            var $this = $(this);
            var data = $this.attr('data-url') || null;
            var title = $this.attr('data-title') || '';
            var initialPreview = [];
            var initialPreviewConfig = [];
            var type = $this.attr('data-type').split(',') || ['image'];
            var maxFileSize = type[0] == "image" ? 10000 : 100000;
            var pickImageStr = type[0] == "image" ? pickimage : pick;
            var previewFileType = type[0] == "image" ? "image" : "file";
            if (data != null) {
                if (type[0] == "image") initialPreview = ["<img src='" + data + "' class='file-preview-image' >"];
                else initialPreview = [/*'<div class="file-preview-frame file-preview-success" id="uploaded-1482243555677" data-fileindex="-1" title="'+title+'" style="width:160px;height:160px;">'+*/
                    '<object class="file-object" data="' + data + '" type="video/mp4" width="160px" height="160px" internalinstanceid="15">' +
                    '<param name="movie" value="' + title + '">' +
                    '<param name="controller" value="true">' +
                    '<param name="allowFullScreen" value="true">' +
                    '<param name="allowScriptAccess" value="always">' +
                    '<param name="autoPlay" value="false">' +
                    '<param name="autoStart" value="false">' +
                    '<param name="quality" value="high">' +
                    '<div class="file-preview-other">' +
                    '<span class="file-icon-4x"><i class="icon-file-alt"></i></span>' +
                    ' </div>' +
                    ' </object>'];
                initialPreviewConfig = [{
                    url: data,
                    key: 100,
                }];
            }
            var parems = {
                language: lang,
                maxFileCount: 1,
                showCaption: false,
                mainClass: " ",
                /*showUpload: false,*/
                uploadUrl: baseUrl + "upload-image",
                previewFileType: previewFileType,
                browseClass: "btn button button-3d button-mini button-rounded button-green ",
                browseLabel: pickImageStr,
                browseIcon: "<i class=\"icon-picture\"></i> ",
                uploadClass: "btn button button-3d hide button-mini button-rounded button-blue ",
                removeClass: "btn button button-3d button-mini button-rounded button-red",
                removeLabel: del,
                removeIcon: "<i class=\"icon-trash\"></i> ",
                resizeImage: false,
                maxFileSize: maxFileSize,
                /*resizePreference: 'width',*/
                allowedFileTypes: type,
                initialPreview: initialPreview,
                initialPreviewConfig: initialPreviewConfig,
                initialPreviewShowDelete: false,
                autoReplace: true
            };
            if ($this.data('width'))
                parems.minImageWidth = $this.data('width');
            if ($this.data('height'))
                parems.minImageHeight = $this.data('height');
            $(this).fileinput(parems).on(type[0] != 'image' ? 'fileloaded' : 'fileimagesloaded', function (event, file, previewId, index, reader) {
                var $parent = $(event.currentTarget).parents('.file-input:first');
                if ($parent.find('.file-preview-frame').length > 1) $('.file-preview-frame:first .kv-file-remove').click();
                if (!$parent.find('.kv-file-upload').prop('disabled')) $parent.find('.kv-file-upload').click();
            }).on('fileuploaded', function (event, data, previewId, index) {
                var $fileInput = $(event.currentTarget);
                $fileInput.parents('.file-input:first').prev().prev().val(data.response.filename);
            }).on('fileclear', function (event) {
                $(event.currentTarget).parents('.file-input:first').prev().prev().val('');
            });
        });
        $cont.find(".image-upload").change(function () {
            $(this).parents('.form-group').find('label.error').remove();
        });
    }
    /*else console.log('warning: fileinput is not defined');*/
}

function _imageCropUpload($cont) {
    /*if ($fileInput.data('width')) {
     var $corpModal = $fileInput.parents('.image-upload-cont:first').next();
     $('body').append($corpModal);
     $corpModal.find("#target-corp").attr('src',data.response.fileurl);
     //$corpModal.find("#target-corp").css({'src',data.response.fileurl});
     $corpModal.find('.modal-dialog').css({'min-width':$fileInput.data('width')+50,'min-height':$fileInput.data('height')+50});
     $corpModal.modal('show');
     $corpModal.find("#target-corp").Jcrop({
     //aspectRatio: $fileInput.data('width') / $fileInput.data('height'),
     minSize: [$fileInput.data('width') , $fileInput.data('height') ],
     maxSize: [$fileInput.data('width') , $fileInput.data('height') ],
     }, function () {
     this.animateTo([0, 0, $fileInput.data('width'), $fileInput.data('height')]);
     });
     }*/
    if (typeof($.fn.cropper) != 'undefined') {
        $cont = $($cont);
        //$cont.find(".image-crop-upload:not('.temp')").fileinput('destroy');
        $cont.find(".image-crop-upload:not('.temp')").each(function () {
            var $this = $(this);
            var data = $this.data('url') || null;
            var title = $this.data('title') || '';
            var width = $this.data('width') || 0;
            var height = $this.data('height') || 1;
            var options = {
                viewMode: 1,
                aspectRatio: width / height,
                zoomOnWheel: false,
            };
            //onload Crop
            $this.cropper('destroy');
            //hide the crop action
            $this.prev().addClass('hide');
            //Handle Choose Image Operation
            _imageCropUpload_handleChooseImage($this, options);
            //Handle Crop Operation
            _imageCropUpload_handleCropImage($this);

            /*i*/
        });
    }
    /*else console.log('warning: fileinput is not defined');*/
}

function _imageCropUpload_handleChooseImage($image, options) {
    var $inputFile = $($image).prev().prev().prev();
    var $chooseAction = $($image).prev().prev();
    $chooseAction.unbind('click').click(function () {
        $inputFile.click();
    });
    $inputFile.change(function () {
        var files = this.files;
        var file;
        if (files && files.length) {
            file = files[0];
            if (/^image\/\w+$/.test(file.type)) {
                var uploadedImageURL = URL.createObjectURL(file);
                $($image).prev().removeClass('hide');
                $image.parents('form:first').find('[type="submit"]').addClass('hide');
                $image.attr('src', uploadedImageURL);
                $image.cropper(options);
            } else {
                $($image).prev().addClass('hide');
                window.alert('Please choose an image file.');
            }
        }
    });
}

function _imageCropUpload_handleCropImage($image) {
    var $this = $image;
    var $cropImageAction = $this.prev();
    $cropImageAction.unbind('click').click(function (event) {
        event.preventDefault();
        var $cont = $this.parents('.image-upload-cont:first');
        $cont.hide().wrap('<div class="preloader2" style="min-height:300px"></div>');
        $(this).addClass('hide');
        var image = $this.cropper('getCroppedCanvas').toDataURL('image/jpeg');
        /*.toBlob(function (blob) {*/
        // $this.cropper('getCroppedCanvas').toBlob(function (blob) {
        var formData = new FormData();
        formData.append('image_url', image);
        $.ajax(baseUrl + "upload-image", {
            method: "POST",
            data: formData,
            processData: false,
            contentType: false,
            success: function (res) {
                var $image = $('.image-crop-upload.cropper-hidden');
                var $form = $image.removeClass('hide').parents('form:first');
                $image.attr('src', res.fileurl);
                $image.cropper('destroy');
                $form.find('.image-upload-name').val(res.filename);
                $form.find('input[type="file"]').val("");
                $form.find('.image-upload-cont:first').unwrap('<div class="preloader2"  style="min-height:300px"></div>').show();
                $form.find('[type="submit"]').removeClass('hide');
            }
            // });
        });
    });
}

function _docUpload($cont, id, files, configs, type) {
    if (typeof($.fn.fileinput) != 'undefined') {
        $cont = $($cont);
        // console.log($cont)
        var allfiles = [];
        var initialPreviewConfig = [];
        $.each(files, function (i, v) {
            allfiles.push(v);
        });
        for (var i = 0; i < allfiles.length; i++) {
            initialPreviewConfig[i] = [
                {
                    type: "pdf",
                    size: configs[i].size,
                    caption: configs[i].caption,
                    key: configs[i].key,
                    url: configs[i].url,
                    downloadUrl: configs[i].downloadUrl
                },
            ];
        }

        $cont.find(".doc-upload").fileinput('destroy');
        $cont.find(".doc-upload").each(function () {

            var $this = $(this),
                param = $this.attr('data-param') || '';

            var uploadExtraData = {};

            if (param != '')
                _.each(param.split('&'), function (v, i) {
                    var extra = JSON.parse('{"' + v.split('=')[0] + '" : "' + v.split('=')[1] + '"}');
                    $.extend(uploadExtraData, extra);
                });

            $(this).fileinput({
                theme: "fa",
                showCaption: false,
                fileActionSettings: {
                    downloadIcon: '<i class="fa fa-download"></i>',
                    dragIcon: '',
                    indicatorNew: ''
                },
                showCancel: false,
                browseLabel: pickdoc,
                browseIcon: "<i class=\"icon-picture\"></i> ",
                removeLabel: del,
                removeIcon: "<i class=\"icon-trash\"></i> ",
                uploadUrl: baseUrl + 'admin/upload-doc',
                uploadExtraData: uploadExtraData,
                uploadAsync: false,
                maxFileCount: 1,
                overwriteInitial: false,
                initialPreview: allfiles,
                initialPreviewAsData: true, // defaults markup
                previewFileType: 'any',
                initialPreviewFileType: 'pdf', // image is the default and can be overridden in config below
                initialPreviewConfig: configs,
                autoReplace: true,
                showUpload: false
            });
            if (type == 'input') {

                // console.log('ssss');

                $(this).on('fileuploaded', function (event, data, previewId, index) {
                    $('#upload_pdf_name').val(data.response.OriginalFilename);
                    $('#upload_pdf').val(data.response.filename);

                });

                $(this).on('filedeleted', function (event, data, previewId, index) {
                    $('#upload_pdf_name').val('');
                    $('#upload_pdf').val('');
                });
            }
        })
    }
}

function _textEditor($cont) {
    $cont = $($cont);
    if (typeof($.fn.ckeditor) != 'undefined') {
        $cont.find('textarea.text-editor').each(function () {
            var params = {
                filebrowserBrowseUrl: baseUrl + 'laravel-filemanager?type=files',
                filebrowserUploadUrl: baseUrl + 'laravel-filemanager/upload',
                filebrowserImageBrowseUrl: baseUrl + 'laravel-filemanager?type=images',
                contentsLangDirection: $(this).hasClass('ar') ? 'rtl' : $(this).hasClass('en') ? 'ltr' : '',
                language: lang
            };

            var $textarea = $(this).ckeditor(params);
            // CKEDITOR.replace('editor', {
            //     filebrowserImageBrowseUrl: '/your-custom-route?type=Images',
            //     filebrowserBrowseUrl: '/your-custom-route?type=Files'
            // });
            $textarea.editor.on('fileUploadRequest', function (evt) {
                /*  evt.data.requestData.type = 'ckeditor';
                 var xhr = evt.data.fileLoader.xhr;
                 xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest' );
                 xhr.setRequestHeader('X-CSRF-TOKEN', _csrf );
                 // xhr.setRequestHeader('Content-Type', 'application/json' );
                 //xhr.send( this.file );*/
                evt.stop();
            });
        });
        // CKEDITOR.on('dialogDefinition', function (event) {
        //     aut_filemanager_handleImageUpload(event, baseUrl, lang) // dialogDefinition
        // });
    }
    /*else console.log('warning: ckeditor is not defined');*/
}

function _ajaxreqs($cont, inCallback) {
    $cont = $($cont);
    $cont.find('.ajax-req:not("override")').each(function () {
        var url = $(this).attr('data-href');
        //$(this).attr('href','javascript:void(0)');
        var method = $(this).attr('data-method') || 'post';
        var reload = $(this).attr('data-reload') || false;
        var req = $(this).attr('data-data') || '';
        var callback = inCallback || $(this).attr('data-callback') || '';
        if (method === "delete" || method === "put") {
            req += "&_method=" + method;
            method = "post";
        }
        $(this).unbind('click').click(function (e) {
            $.ajax({
                type: method,
                url: url,
                data: /*"_token="+_csrf+"&"+*/req,
                success: function (data) {
                    if (callback != null) {
                        var fn = window[callback];
                        if (typeof fn === "function")
                            fn(data, req);
                    }
                    if (null != data.msg) {
                        SEMICOLON.widget.notifications($('<div id="" data-notify-position="top-right" data-notify-type="' + ((data.success) ? "info" : "error") + '" data-notify-msg="<i class=\'icon-info-sign   \'></i> <span class=\'\'> ' + data.msg + '</span>"></div>'));
                    }
                    if (null != data.redirect) {
                        window.location = data.redirect;
                    }
                    if (reload) {
                        window.location.reload();
                    }
                },
                /*headers: {
                 'X-CSRF-Token': _csrf
                 },*/
                dataType: "json"
            });
        });
        $(this).removeAttr('data-href');
    });
}

function _select2($cont, data_items) {
    if (typeof($.fn.select2) != 'undefined') {
        $cont = $($cont);
        // console.log($cont)
        $.fn.select2.defaults.set("theme", "bootstrap");
        $cont.find(".autocomplete").each(function () {
            Autocomplete(this, data_items)
        });
    }
}

function Autocomplete(obj, data_items) {
    var $this = $(obj);
    var selected = $this.data('selected');
    var data = selected ? selected : [];
    if ($this.find('option:selected').length == 1 && !$this.prop('multiple'))
        data = [{id: $this.find('option:selected').val(), name: $this.find('option:selected').text()}];
    else
        $this.find('option:selected').each(function (i) {
            var $this = $(this);
            data[i] = {id: $this.val(), name: $this.text()};
        });
    var url = $this.data('remote');
    var required = (typeof $this.data('required') !== typeof undefined) ? $this.data('required') : null;
    var placeholder = $this.data('placeholder') ? $this.data('placeholder') : '';
    var letters = (typeof $this.data('letter') !== typeof undefined) ? $this.data('letter') : 3;
    var linkWith = $this.attr('data-param') || '';
    if (linkWith.charAt(0) == '#') {
        $(linkWith).change(function () {
            $this.val('').change();
        });
    }
    if ($this.hasClass('select2-hidden-accessible')) $this.select2("destroy");
    $this.select2({
        ajax: {
            url: url,
            dataType: 'json',
            delay: 400,
            data: function (params) {
                var param = (typeof $this.attr('data-param') !== typeof undefined) ? $this.attr('data-param') : null;
                if (param && param.charAt(0) === '#') {
                    var name = $(param).attr('name') || $(param).attr('id');
                    param = JSON.parse('{"' + name + '":"' + $(param).val() + '"}');
                }
                else if (param)
                    param = JSON.parse('{"' + param.replaceAll("&", "\",\"").replaceAll("=", "\":\"") + '"}');
                /*if(param && param.charAt(0) === '.') {

                 }*/
                var $data = {q: params.term, page: params.page};
                if (param) {
                    $data = $.extend($data, param);
                }
                return $data;
            },
            processResults: function (data, params) {
                params.page = params.page || 1;
                return {
                    results: data.items,
                    pagination: {
                        more: (params.page * 30) < data.total_count
                    }
                };
            },
            cache: true
        },
        escapeMarkup: function (markup) {
            return markup;
        },
        dir: dir,
        minimumInputLength: letters,
        placeholder: placeholder,
        allowClear: true,
        templateResult: __Select2_formatRepo,
        templateSelection: __Select2_formatRepoSelection,
        dropdownParent: $this.parent(),
        data: data
    }).on("select2:select", function (e) {
        $(this).parent().removeClass('has-error');
        $(this).parent().find('label.error').remove();
        if (onSelectFunc != null) {
            var fn = window[onSelectFunc];
            if (typeof fn === "function")
                fn(this);
        }
    }).on("select2:unselect", function (e) {
        if ($(this).hasClass('required')) $(this).parent().addClass('has-error');
    });

}

//Select2 helpers
var __Select2_formatRepo = function (repo) {
    if (repo.loading)
        return repo.text;
    var markup = '<div class="clearfix">' + '<div class="col-sm-1">' + '</div>'
        + '<div clas="col-sm-10">' + '<div class="clearfix">' + repo.name
        + '</div>';
    markup += '</div></div>';
    return markup;
};

var __Select2_formatRepoSelection = function (repo) {
    return repo.name || repo.text;
};

function _datePicker($cont) {
    if (typeof($.fn.datetimepicker) != 'undefined') {
        $cont = $($cont);
        $cont.find(".datepicker").each(function () {
            $(this).datetimepicker({locale: lang, format: 'YYYY-DD-MM', useCurrent: false});
            var linkWith = $(this).attr('min-date') || '';
            if (linkWith.charAt(0) == '#') {
                $(linkWith).on("dp.change", function (e) {
                    $(this).data("DateTimePicker").minDate(e.date);
                });
            }
        });
    }
    /*else console.log('warning: datetimeepicker is not defined');*/
}

function _dateTimePicker($cont) {
    if (typeof($.fn.datetimepicker) != 'undefined') {
        $cont = $($cont);
        $cont.find(".datetime").each(function () {
            $(this).datetimepicker({locale: lang, format: 'DD/MM/YYYY HH:mm', useCurrent: false});
            var linkWith = $(this).attr('min-date') || '';
            if (linkWith.charAt(0) == '#') {
                $(linkWith).on("dp.change", function (e) {
                    $(this).data("DateTimePicker").minDate(e.date);
                });
            }
        });
    }
    /*else console.log('warning: datetimeepicker is not defined');*/
}

function _timePicker($cont) {
    if (typeof($.fn.datetimepicker) != 'undefined') {
        $cont = $($cont);
        $cont.find(".time").each(function () {
            $(this).datetimepicker({locale: lang, format: 'HH:mm', useCurrent: false});
            var linkWith = $(this).attr('min-date') || '';
            if (linkWith.charAt(0) == '#') {
                $(linkWith).on("dp.change", function (e) {
                    $(this).data("DateTimePicker").minDate(e.date);
                });
            }
        });
    }
    /*else console.log('warning: datetimeepicker is not defined');*/
}

function _gmapView($cont) {
    if (typeof(google) != 'undefined' && typeof($.fn.gMap) != 'undefined') {
        $cont = $($cont);
        $cont.find('.gmap-view').each(function () {
            var lat = $(this).data('lat');
            var lng = $(this).data('lng');
            var title = $(this).data('title') || '';
            $(this).gMap({
                center: lat + ',' + lng,
                maptype: 'ROADMAP',
                zoom: 15,
                markers: [
                    {
                        address: lat + ',' + lng,
                        html: title,
                        icon: {
                            image: baseUrl + "images/icons/map-icon-red.png",
                            iconsize: [32, 39],
                            iconanchor: [13, 39]
                        }
                    }
                ],
                doubleclickzoom: false,
                controls: {
                    panControl: true,
                    zoomControl: true,
                    mapTypeControl: true,
                    scaleControl: false,
                    streetViewControl: false,
                    overviewMapControl: false
                }
            });
        });
    }
    /*else console.log('warning: gmap-view is not defined');*/
}

function _gmapModalView(cont) {
    if (typeof(google) != 'undefined' && typeof($.fn.gMap) != 'undefined') {
        $(cont).find('.gmap-modal-view').on('click', function (event) {
            var $link = $(this);
            var lat = $link.data('lat');
            var lng = $link.data('lng');
            var $modal = $(
                '<div class="modal fade" id="location-modal">' +
                '<div class="modal-dialog">' +
                '<div class="modal-content">' +
                '<div class="modal-header">' +
                '<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">' + close + '</span></button>' +
                '<h4 class="modal-title"></h4>' +
                '</div>' +
                '<div class="modal-body">' +
                '<div id="location-cont" class="nopadding nomargin" style="width: 100%;height:50vh;"></div>' +
                '</div>' +
                '<div class="modal-footer">' +
                '<button type="button" class="btn  bgcolor dark" data-dismiss="modal">' + close + '</button>' +
                '</div>' +
                '</div>' +
                '</div>' + '</div>');
            $modal.on('shown.bs.modal', function (event) {
                $modal.find('.modal-title').text($link.data('title'));
                $modal.find('#location-cont').gMap({
                    center: lat + ',' + lng,
                    maptype: 'ROADMAP',
                    zoom: 15,
                    markers: [
                        {
                            address: lat + ',' + lng,
                            icon: {
                                image: baseUrl + '/images/icons/map-icon-red.png',
                                iconsize: [32, 39],
                                iconanchor: [13, 39]
                            }
                        }
                    ],
                    doubleclickzoom: false,
                    controls: {
                        panControl: true,
                        zoomControl: true,
                        mapTypeControl: true,
                        scaleControl: false,
                        streetViewControl: false,
                        overviewMapControl: false
                    }
                });
            });
            $modal.modal('show');
        });
    }
    /*else console.log('warning: gmap-view is not defined');*/
}

//Fill :input with data
function _fill($cont, obj) {
    $($cont).find(':input:not(".autocomplete,[name=\'_method\'],[name=\'_token\']")').each(function () {
        var $this = $(this);
        if ($this.prop('type'))
            $this.val(obj[$(this).attr('name')]);
        else
            $this.html(obj[$(this).attr('name')]);
    });
    $($cont).find('.autocomplete').each(function () {
        var $this = $(this);
        if (obj[$this.attr('name')] != null) {
            var name = $this.attr('name').split('_')[0];
            if (typeof(obj[name]) == 'object' && obj[name]) {
                var label = typeof(obj[name].name) != typeof(undefined) ? obj[name]['name'] : obj[name]['title'];
                $this.html('<option selected=selected value="' + obj[$this.attr('name')] + '">' + label + '</option>');
            } else if (typeof(obj[name]) == 'array') {
                var html = '';
                for (var i = 0; i < obj[name].length; i++) {
                    var label = typeof(obj[name][i]['name']) != typeof(undefined) ? obj[name][i]['name'] : obj[name]['title'];
                    html = '<option selected=selected value="' + obj[name][$this.attr('name')] + '">' + label + '</option>';

                }
                $this.html(html);
            }
        }
    });
}

function _numberFormat(obj) {

    /*$(obj).find('input.number').on('keypress',function (e) {
     return /[0-9]/.test(String.fromCharCode(e.which));
     });*/
}

// not ready yet
function _arabicFormat(obj) {
    /*
     $(obj).find('input.ar,textarea.ar').on('keypress',function (e) {
     $(this).val( /[\u0600-\u06FF]/.test(String.fromCharCode(e.which)));
     });*/
}

function __loaderStart(obj) {

    if (!$().animsition) {
        $body.addClass('no-transition');
        console.log('pageTransition: Animsition not Defined.');
        return true;
    }

    var $body = $('body'),
        $parent = $(obj).parent(),
        animationIn = $body.attr('data-animation-in'),
        animationOut = $body.attr('data-animation-out'),
        durationIn = $body.attr('data-speed-in'),
        durationOut = $body.attr('data-speed-out'),
        loaderTimeOut = $body.attr('data-loader-timeout'),
        loaderStyle = $body.attr('data-loader'),
        loaderColor = $body.attr('data-loader-color'),
        loaderStyleHtml = $body.attr('data-loader-html'),
        loaderBgStyle = '',
        loaderBorderStyle = '',
        loaderBgClass = '',
        loaderBorderClass = '',
        loaderBgClass2 = '',
        loaderBorderClass2 = '';

    if (!animationIn) {
        animationIn = 'fadeIn';
    }
    if (!animationOut) {
        animationOut = 'fadeOut';
    }
    if (!durationIn) {
        durationIn = 1500;
    }
    if (!durationOut) {
        durationOut = 800;
    }
    if (!loaderStyleHtml) {
        loaderStyleHtml = '<div class="css3-spinner-bounce1"></div><div class="css3-spinner-bounce2"></div><div class="css3-spinner-bounce3"></div>';
    }

    if (!loaderTimeOut) {
        loaderTimeOut = false;
    } else {
        loaderTimeOut = Number(loaderTimeOut);
    }

    if (loaderColor) {
        if (loaderColor == 'theme') {
            loaderBgClass = ' bgcolor';
            loaderBorderClass = ' border-color';
            loaderBgClass2 = ' class="bgcolor"';
            loaderBorderClass2 = ' class="border-color"';
        } else {
            loaderBgStyle = ' style="background-color:' + loaderColor + ';"';
            loaderBorderStyle = ' style="border-color:' + loaderColor + ';"';
        }
        loaderStyleHtml = '<div class="css3-spinner-bounce1' + loaderBgClass + '"' + loaderBgStyle + '></div><div class="css3-spinner-bounce2' + loaderBgClass + '"' + loaderBgStyle + '></div><div class="css3-spinner-bounce3' + loaderBgClass + '"' + loaderBgStyle + '></div>'
    }

    if (loaderStyle == '2') {
        loaderStyleHtml = '<div class="css3-spinner-flipper' + loaderBgClass + '"' + loaderBgStyle + '></div>';
    } else if (loaderStyle == '3') {
        loaderStyleHtml = '<div class="css3-spinner-double-bounce1' + loaderBgClass + '"' + loaderBgStyle + '></div><div class="css3-spinner-double-bounce2' + loaderBgClass + '"' + loaderBgStyle + '></div>';
    } else if (loaderStyle == '4') {
        loaderStyleHtml = '<div class="css3-spinner-rect1' + loaderBgClass + '"' + loaderBgStyle + '></div><div class="css3-spinner-rect2' + loaderBgClass + '"' + loaderBgStyle + '></div><div class="css3-spinner-rect3' + loaderBgClass + '"' + loaderBgStyle + '></div><div class="css3-spinner-rect4' + loaderBgClass + '"' + loaderBgStyle + '></div><div class="css3-spinner-rect5' + loaderBgClass + '"' + loaderBgStyle + '></div>';
    } else if (loaderStyle == '5') {
        loaderStyleHtml = '<div class="css3-spinner-cube1' + loaderBgClass + '"' + loaderBgStyle + '></div><div class="css3-spinner-cube2' + loaderBgClass + '"' + loaderBgStyle + '></div>';
    } else if (loaderStyle == '6') {
        loaderStyleHtml = '<div class="css3-spinner-scaler' + loaderBgClass + '"' + loaderBgStyle + '></div>';
    } else if (loaderStyle == '7') {
        loaderStyleHtml = '<div class="css3-spinner-grid-pulse"><div' + loaderBgClass2 + loaderBgStyle + '></div><div' + loaderBgClass2 + loaderBgStyle + '></div><div' + loaderBgClass2 + loaderBgStyle + '></div><div' + loaderBgClass2 + loaderBgStyle + '></div><div' + loaderBgClass2 + loaderBgStyle + '></div><div' + loaderBgClass2 + loaderBgStyle + '></div><div' + loaderBgClass2 + loaderBgStyle + '></div><div' + loaderBgClass2 + loaderBgStyle + '></div><div' + loaderBgClass2 + loaderBgStyle + '></div></div>';
    } else if (loaderStyle == '8') {
        loaderStyleHtml = '<div class="css3-spinner-clip-rotate"><div' + loaderBorderClass2 + loaderBorderStyle + '></div></div>';
    } else if (loaderStyle == '9') {
        loaderStyleHtml = '<div class="css3-spinner-ball-rotate"><div' + loaderBgClass2 + loaderBgStyle + '></div><div' + loaderBgClass2 + loaderBgStyle + '></div><div' + loaderBgClass2 + loaderBgStyle + '></div></div>';
    } else if (loaderStyle == '10') {
        loaderStyleHtml = '<div class="css3-spinner-zig-zag"><div' + loaderBgClass2 + loaderBgStyle + '></div><div' + loaderBgClass2 + loaderBgStyle + '></div></div>';
    } else if (loaderStyle == '11') {
        loaderStyleHtml = '<div class="css3-spinner-triangle-path"><div' + loaderBgClass2 + loaderBgStyle + '></div><div' + loaderBgClass2 + loaderBgStyle + '></div><div' + loaderBgClass2 + loaderBgStyle + '></div></div>';
    } else if (loaderStyle == '12') {
        loaderStyleHtml = '<div class="css3-spinner-ball-scale-multiple"><div' + loaderBgClass2 + loaderBgStyle + '></div><div' + loaderBgClass2 + loaderBgStyle + '></div><div' + loaderBgClass2 + loaderBgStyle + '></div></div>';
    } else if (loaderStyle == '13') {
        loaderStyleHtml = '<div class="css3-spinner-ball-pulse-sync"><div' + loaderBgClass2 + loaderBgStyle + '></div><div' + loaderBgClass2 + loaderBgStyle + '></div><div' + loaderBgClass2 + loaderBgStyle + '></div></div>';
    } else if (loaderStyle == '14') {
        loaderStyleHtml = '<div class="css3-spinner-scale-ripple"><div' + loaderBorderClass2 + loaderBorderStyle + '></div><div' + loaderBorderClass2 + loaderBorderStyle + '></div><div' + loaderBorderClass2 + loaderBorderStyle + '></div></div>';
    }

    $(obj).animsition({
        inClass: animationIn,
        outClass: animationOut,
        inDuration: Number(durationIn),
        outDuration: Number(durationOut),
        linkElement: '#primary-menu ul li a:not([target="_blank"]):not([href*="#"]):not([data-lightbox]):not([href^="mailto"]):not([href^="tel"]):not([href^="sms"]):not([href^="call"])',
        loading: true,
        loadingParentElement: $parent,
        loadingClass: 'css3-preloader css3-spinner',
        loadingHtml: loaderStyleHtml,
        unSupportCss: [
            'animation-duration',
            '-webkit-animation-duration',
            '-o-animation-duration'
        ],
        overlay: false,
        overlayClass: 'animsition-overlay-slide',
        overlayParentElement: $parent,
        timeOut: loaderTimeOut
    });
}

function __loaderEnd(obj) {
    if (obj == null) obj = $('body');
    else obj = $(obj).parent();
    obj.find('.css3-spinner').fadeIn('fast', function () {
        $(this).remove();
    });
}

String.prototype.replaceAll = function (search, replaceAllment) {
    var target = this;
    return target.replace(new RegExp(search, 'g'), replaceAllment);
};