(function () {
    var Message;
    Message = function (arg) {
        this.text = arg.text, this.message_side = arg.message_side;
        this.draw = function (_this) {
            return function () {
                var $message;
                $message = $($('.message_template').clone().html());
                $message.addClass(_this.message_side).find('.text').html(_this.text);
                $('.messages').append($message);
                return setTimeout(function () {
                    return $message.addClass('appeared');
                }, 0);
            };
        }(this);
        return this;
    };
    $(function () {
        var getMessageText, message_side, sendMessage;
        message_side = 'right';
        getMessageText = function () {
            var $message_input;
            $message_input = $('.message_input');
            return $message_input.val();
        };
        sendMessage = function (text) {
            var $messages, message;
            if (text.trim() === '') {
                return;
            }
            $('.message_input').val('');
            $messages = $('.messages');
            message_side = message_side === 'left' ? 'right' : 'left';
            message = new Message({
                text: text,
                message_side: message_side
            });
            message.draw();
            return $messages.animate({scrollTop: $messages.prop('scrollHeight')}, 300);
        };
        $('.send_message').click(function (e) {
            return sendMessage(getMessageText());
        });
        $('.message_input').keyup(function (e) {
            if (e.which === 13) {
                return sendMessage(getMessageText());
            }
        });
        sendMessage('Hello Philip! :)');
        setTimeout(function () {
            return sendMessage('Hi Sandy! How are you?');
        }, 1000);
        return setTimeout(function () {
            return sendMessage('I\'m fine, thank you!');
        }, 2000);
    });
}.call(this));
$(function () {

    // $('.top-language').hide();
    $('#lang').click(function () {
        $('.top-language').slideToggle();
    });
    // $('.user-profile').hide();
    $('#user-profile').click(function () {
        $('.user-profile').slideToggle();
    });
    $('#birth_date').datetimepicker({
        format: 'YYYY-MM-DD'
    });
    $('.input-date').datetimepicker({
        format: 'YYYY-MM-DD'
    });

    $('.select2').each(function () {
            var $this = $(this);
            $this.select2({
                placeholder: $this.data('placeholder'),
                theme: "bootstrap"
            });
            // var url =$this.data('url');
            // $.get({
            //     url:url,
            // })
        $this.on('change',function () {
            var option=$this.find('option:selected').val();
            console.log(option)
        })
            var url = $this.data('url');
            getSelected($this,url);

                var n =[];
            $this.find("option:selected").each(function (t) {
                var $this = $(this);
                console.log($this.text());
                n[t] = {id: $this.val(), name: $this.text()}
            });
        }
    );

});

function getSelected($this,url) {
    $.ajax({
        type:'GET',
        url: url,
        success: function (data) {
            var array=JSON.parse(data);
            var items = [];
            for (var i = 0; i < array.length; i++) {
                items.push({
                    "id": array[i].id,
                    "text": array[i].text
                });
                $this.append("<option value=\"" + items[i].id + "\" selected>" + items[i].text + "</option>");
            }
        },
        error: function () {
            alert('failed');
        }
    })
};
