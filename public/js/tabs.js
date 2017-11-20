$(document).ready(function() {
    $("div.ma-tab-menu>div.list-group>a").click(function(e) {
        e.preventDefault();
        $(this).siblings('a.active').removeClass("active");
        $(this).addClass("active");
        var index = $(this).index();
        $("div.ma-tab>div.ma-tab-content").removeClass("active");
        $("div.ma-tab>div.ma-tab-content").eq(index).addClass("active");
    });
});