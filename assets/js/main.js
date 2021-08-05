$(document).ready(function(){
    $(".owl-carousel").owlCarousel({
        items:1,
        loop: true,
        autoplay:true,
        autoplayTimeout:3000,
        autoplayHoverPause:true
    });
    $(".nav_item_1,.nav_item_content_1").hover(function(){
        $(".nav_item_content_1").toggleClass("nav_content_sub");
    });
    $(".nav_item_2,.nav_item_content_2").hover(function(){
        $(".nav_item_content_2").toggleClass("nav_content_sub");
    });
    $(".show_all,.show_all").hover(function(){
        $(".show_all").toggleClass("nav_content_sub");
    });
    $("div.message_left").hover(function () {
        $(this).toggleClass("message_left_overflow");
    })
});