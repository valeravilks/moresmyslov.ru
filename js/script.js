$(window).resize(function() {
    var offset = $('.name_and_description').offset();
    console.log(offset);
    $('.header::before').css({
        display: none;
    });
});