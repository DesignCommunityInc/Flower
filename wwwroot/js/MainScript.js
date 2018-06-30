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

        if ($('header').top != -120 && $(window).scrollTop() >= 120)
            $('header').addClass('header_scroll');
    });






    $("#cart").on('click', (function () {
        $('.cart').css({ 'display': 'block' });
        $('.cart').animate({ opacity: 1 }, 200);
    }));

    $(".category_open_btn").on('click', (function (event) {
        var array = $('.categories ul li');
        if (ButtonRoles["categories"] == open) {

            var ctg = $('.categories');
            var categories = $('.categories .category');
            var height = (categories.length * 60 + 30 /* margin-top */ + 100 /* design-part */ );
            $('.categories').animate({
                height: height.toString() + "px",
                textIndent: 20
            }, 100);
            $('.categories span[name="title"]').animate({ width: "80px" }, 100);

            $(this).addClass('burger_tocross');
            ButtonRoles["categories"] = close;

            $(array).css({ 'display': 'block' });
            $(array).animate({ 'opacity': '1' }, 100);

            $('.list_gradient').animate({
                opacity: '1',
                height: (height - 50).toString() + "px"
            }, 50);

            $('.list_gradient').css({ 'box-shadow': 'var(--box-shadow-buttonShadow)' });
      }
        else if (ButtonRoles["categories"] == close) {

            $(this).removeClass('burger_tocross');
            ButtonRoles["categories"] = open;

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

            if (ScrollTop > 350) {
                $('.up').css({
                    'cursor': 'pointer',
                    'opacity': '1'
                });
            }
            else {
                $('.up').css({
                    'opacity': '0',
                    'cursor': 'default'
                });
            }
        }
    });

});

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
