

$('.users').hover(function () {
    $('#level3').slideToggle(1000);
});
$(function() {
    setTimeout(function () {
        $('.flash-message').fadeOut(1000)
    }, 5000);
});
// console.log(route('table.show','users'));
$('[data-load-css]').on('click', function (e) {

    var element = $(this);

    if (element.is('a'))
        e.preventDefault();

    var uri = element.data('loadCss'),
        link;
    $('#theme').attr('href', uri);
});