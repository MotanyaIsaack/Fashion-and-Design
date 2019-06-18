$(function () {
    let left_arrow = `
    <i class="fa fa-angle-left" aria-hidden="true"></i>
`;

    let right_arrow = `
    <i class="fa fa-angle-right" aria-hidden="true"></i>
`;

    $('.events-carousel').owlCarousel({
        margin: 5,
        loop: true,
        items: 3,
        //autoWidth: true,
        touchDrag: true,
        mouseDrag: true,
        nav: true,
        navText: [left_arrow,right_arrow],
        responsiveClass: true,
        responsive: {
            0: {
                items: 1,
            },
            600: {
                items: 2
            },
            1100: {
                items: 3
            }
        }
    });

    let btn = $('.owl-prev, .owl-next');
    let i = $('.owl-prev i, .owl-next i');

    btn.addClass('hide');
    btn.addClass('white');
    i.addClass('arrow-blue');

    btn.hover(function () {
        $(this).removeClass('white');
        $(this).children('i').removeClass('arrow-blue');
        $(this).addClass('blue');
        $(this).children('i').addClass('arrow-white');
    }).mouseleave(function () {
        $(this).removeClass('blue');
        $(this).children('i').removeClass('arrow-white');
        $(this).addClass('white');
        $(this).children('i').addClass('arrow-blue');
    });

    setTimeout(() => {
        btn.removeClass('hide');
        btn.fadeIn();
    },500);


    $(window).resize(function () {
        console.log($(window).width())
    })

});