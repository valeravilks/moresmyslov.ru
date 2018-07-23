
$(document).ready(function() {
    var offset = $('.name_and_description').offset();
    console.log(offset);
    var pad_r = $(window).width() - 54 - $('.name_and_description').width() - offset.left;
    var pad_b = $(".header").height() - 30 - $('.name_and_description').height() - offset.top;
    $('.header_blur').css({
        "padding-left": offset.left,
        "padding-top": offset.top,
        "padding-right": pad_r,
        "padding-bottom": pad_b
    });
    var menu = $('.header_block').height() - $('.nav_menu').height() + 40;
    $('.menu_blur').css({
        "padding-top": menu
    });

});

$(window).resize(function() {
    var offset = $('.name_and_description').offset();
    console.log(offset);
    var pad_r = $(window).width() - 54 -  $('.name_and_description').width() - offset.left;
    var pad_b = $(".header").height() - 30 -  $('.name_and_description').height() - offset.top;
    $('.header_blur').css({
        "padding-left": offset.left,
        "padding-top": offset.top,
        "padding-right": pad_r,
        "padding-bottom": pad_b
    });

    var menu = $('.header_block').height() - $('.nav_menu').height() + 40;
    $('.menu_blur').css({
        "padding-top": menu
    });

});

$('.menu_button img').click(function () {
    $('.mobile_menu').toggleClass("e_close_menu");
});
$('.mobile_close img').click(function () {
    $('.mobile_menu').toggleClass("e_close_menu");
});
$('.menu_mobile_item').click(function () {
    event.preventDefault();
});
$('.li_mobile_menu').click(function(){
    $(this).find(".mobile_submenu").toggleClass("e_close_menu");
    $('.mobile_menu_select').text($(this).find('.menu_mobile_item').text());

});
$(".mobile_back img").click(function () {
    $('*').find('.mobile_submenu').not('e_close_menu').addClass('e_close_menu');
    $('.mobile_menu_select').text("");
});