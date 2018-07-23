
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
});