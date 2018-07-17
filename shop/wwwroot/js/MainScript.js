$(document).ready(function () {

    var filters;

    var ButtonRoles;
    var open = true;
    var close = false;



    $(function setUp() {
            //toUp();

        filters = [];
        ButtonRoles = new Object();
        ButtonRoles["categories"] = open;

        $(this).parent().find('input').val('');
        $(this).parent().find('input').css({ 'display': 'none' });
        var ScrollTop = $(window).scrollTop();
        if ($('header').top != -120 && ScrollTop >= 120) {
            $('header').addClass('header_scroll');
           
        }
        if (ScrollTop > 0)
            $('header').css({ "top": - ScrollTop });

        if (ScrollTop > 350) {
            $('.up').css({
                'cursor': 'pointer',
                'opacity': '1'
            });

            if (ScrollTop > 4350) {
                $('#borderHeader').css({
                    'background': 'var(--gradient-dynamic)'
                });
            }
        }
    });
    


    $("#cart").on('click', (function () {
        $('.cart').css({ 'display': 'block' });
        $('.cart').animate({ opacity: 1 }, 200);
    }));

    $(".category_open_btn").on('click', (function (event) {
        if (ButtonRoles["categories"] == open) {
            category_function("open");
            ButtonRoles["categories"] = close;
        }
        else if (ButtonRoles["categories"] == close) {
            category_function("close");
            ButtonRoles["categories"] = open;
        }
    }));
    $(".categories label[name=maintitle]").on('click', (function (event) {
        if (ButtonRoles["categories"] == open) {
            category_function("open");
            ButtonRoles["categories"] = close;
        }
        else if (ButtonRoles["categories"] == close) {
            category_function("close");
            ButtonRoles["categories"] = open;
        }
    }));
    

    $(".subcategory").on('click', 'div', (function (event) {

        //$(this).find('div').css({ 'background': 'var(--color-primary)' });
        $(".subcategory div").removeClass('subcategory_active');
        $(this).addClass('subcategory_active');
        $('.categories').animate({ height: '50px' }, 200); //КАТЕГОРИИ - ВЫСОТА СОКРАЩЕНИЕ
        $('.categories span[name="title"]').animate({ width: 0 }, 200);
    }));

    /* АНИМАЦИЯ КРЕСТИКА - КАТЕГОРИИ */
    $(".category_close").on('click', (function (event) {
        $('.categories').animate({ height: '40px' }, 200); //КАТЕГОРИИ - ВЫСОТА СОКРАЩЕНИЕ
        $('.categories span[name="title"]').animate({ width: 0 }, 200);
        $('.category_open_btn').animate({ width: "25px" }, 300);
    }));

    /* НАЖАТИЕ НА КНОПКУ ПОИСКА */
    $(".src_circle").on('click', (function (event) {
        search_open(this);
    }));

    /* НАЖАТИЕ НА ТЕКСТ 'ПОИСК' */
    $(".src_img").on('click', (function (event) {
        search_closing(this);
    }));

    // НАЖАТИЕ НА КНОПКУ НАВЕРХ (UP)
    $(".up").on('click', (function (event) {

        $(this).animate({
            'bottom': '-100px'
        }, 50);

        $(this).animate({ 'opacity': 0 }, 100);

        toUp();

        $(this).animate({
            'bottom': '50px'
        }, 200);
    }));

    $(window).scroll(function scroll() {
        var ScrollTop = parseInt($(window).scrollTop());
        {
            if (ScrollTop > 350) {
                $('.up').css({
                    'cursor': 'pointer',
                    'opacity': '1'
                });
                
                    if (ScrollTop > 1800) {
                        $('.daily_share .daily_image img').addClass('rotate_in_motion');
                        $('.daily_share .daily_image img:nth-child(1)').addClass('rotate_in_motion');
                        if (ScrollTop > 3500) {
                            $('.season_share img').addClass('season_scroll');

                            if (ScrollTop > 4370) {
                                $('#borderHeader').css({
                                    'background': 'var(--gradient-dynamic)'
                                });
                            }
                            else if (ScrollTop < 4370) {
                                $('#borderHeader').css({
                                    'background': 'var(--gradient-default)'
                                });
                            }
                        }
                       
                    }
            }
            else if (ScrollTop <= 350) {
                $('.up').css({
                    'opacity': '0',
                    'cursor': 'default'
                });
                if (ScrollTop <= 130) {
                    $('header').css({
                        'top': (-ScrollTop).toString() + 'px',
                    });
                    //$('header .borderBottom').css({ 'width': (ScrollTop * 1920 * 0.01).toString() + 'px' });
                    $('header').removeClass('header_scroll');
                }
                else if ($('header').top != -130 && ScrollTop >= 130) {
                    $('header').addClass('header_scroll');
                }
            }

           
        }
    });

});
function category_function(state) {
    var array = $('.categories ul li');
    if (state == "open") {

        var ctg = $('.categories');
        var categories = $('.categories .category');
        if(categories.length <= 8) 
            var height = (categories.length * 55 + 25 /* margin-top */ + 100 /* design-part */);
        else{
            var height = (categories.length * 55 + 25 /* margin-top */);
            $(".list_container").css({top: "-100px"});
        }
        $('.categories').animate({
            height: height.toString() + "px",
            textIndent: 20
        }, 100);
        $('.categories span[name="title"]').animate({ width: "80px" }, 100);

        $(".category_open_btn").addClass('burger_tocross');

        $(array).css({ 'display': 'block' });
        $(array).animate({ 'opacity': '1' }, 100);

        $('.list_gradient').animate({
            opacity: '1',
            height: (height - 50).toString() + "px"
        }, 50);

        $('.list_gradient').css({ 'box-shadow': 'var(--box-shadow-buttonShadow)' });
    }
    else if (state == "close") {

        $(".category_open_btn").removeClass('burger_tocross');

        $('.list_gradient').animate({
            opacity: '0',
            height: 0
        }, 150);

        $('.list_gradient').css({ 'box-shadow': 'none' });

        $(array).animate({ 'opacity': '0' }, 100);
        $(array).css({ 'display': 'none' });

        $('.categories').animate({
            height: '40px',
            textIndent: 0
        }, 150); //КАТЕГОРИИ - ВЫСОТА СОКРАЩЕНИЕ
        $('.categories span[name="title"]').animate({ width: 0 }, 200);
    }
}

function search_open(search) {
    var wrapper = $(search).parent();

    $(search).parent().find('input').css({ 'display': 'block' });

    wrapper.addClass('search_active');
    wrapper.find('input').css({ 'pointer-events': 'all' });
    wrapper.find('input').css({ 'cursor': 'text' });
    $('.centered').addClass('centered_active');

    wrapper.siblings('p').animate({ 'opacity': '0' }, 200);

    if ('placeholder' in document.getElementById('src_input') == "Поиск на сайте")
        document.getElementById('src_input').placeholder = "";
    else
        document.getElementById('src_input').placeholder = "Поиск на сайте";
}

function search_closing(search) {
    $(search).parent().find('input').css({ 'display': 'none' });

    $(search).parent().removeClass('search_active');
    $('.centered').removeClass('centered_active');

    $(search).parent().siblings('p').animate({ 'opacity': '1' }, 200);

    $(search).parent().find('input').val('');
    document.getElementById('src_input').placeholder = "";
}

function lineAnimation(line, param) {
    /* Линия - линия активности списка */
    if (param == 'open')
        $(line).animate({ width: '100px' }, 200);
    else if(param == 'close')
        $(line).animate({ width: '0px' }, 100);
}

function toUp() {
    var body = $("html, body");
    body.stop().animate({ scrollTop: 0 }, 300);
}
