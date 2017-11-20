/*-----------------------------------
 Ajax History
 -------------------------------------*/

$(function(){
    // load_page_ajax();
});
function load_page_ajax() {
    // $.history.on('load change push pushed', function(event, url, type) {
    //
    //     alert(event.type + ': ' + url);
    //
    // }).listen('hash');
    $('.ajax').click(function (e) {
        var $this=$(this);
        var url=$this.closest('a').attr('href');
        // console.log(url);
        e.preventDefault();
        $.get({
            url:url,
            success:function (data) {
                var $content=$('#content-ajax');
                $content.find('.loaders').show();
                // $content.html('');
                // $content.html(data.html);
                // $content.find('.loader').css('display','none');
                // $('#content-ajax').load(function(){
                //     console.log('dsa')
                //     // $('.loader').fadeOut('slow',function(){$(this).remove();});
                //     $(this).addClass('loaded');
                // });
            }

        })
    });
}

