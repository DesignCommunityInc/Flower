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

        // $(this).parent().find('input').val('');
        // $(this).parent().find('input').css({ 'display': 'none' });
        var ScrollTop = $(window).scrollTop();
        if ($('header').top != -135 && ScrollTop >= 135) {
            $('header').addClass('header_scroll');
           
        }
        if (ScrollTop > 0)
            $('header').css({ "top": - ScrollTop });

        if (ScrollTop > 350) {
            $('.up').css({
                'cursor': 'pointer',
                'opacity': '1'
            });
        }

        var products = $('.cart_container .product');
        var cart = $('.cart_container');
        cart.width((180 + 25) * products.length);
        // 180 width_prod + 25 margin-left_prod
    });
    


    $("#cart").on('click', (function () {
         
        if($('.cart_frame').hasClass('cart_frame_open')){
        
            $('.cart_frame').removeClass('cart_frame_open'); 
            var timerId = setTimeout(
                function() {
                    $('.cart_frame').css({display : 'none'})
                }, 300);
        }
        else{
            $('.cart_frame').css({display : 'block'});
            var timerId = setTimeout(
                function() {
                    $('.cart_frame').addClass('cart_frame_open'); 
                }, 100);
        }

        category_function("close");
        ButtonRoles["categories"] = open;
    }));

    var right_click = false;
    var left_click = false;

    $(".right_cart").mouseup(function(){
        clearTimeout(pressTimer);
        if(!right_click){
            var left_pos = parseInt($('.cart_container').css("margin-left").replace("px", ''));
            var width = parseInt($('.cart_container').css('width').replace("px", ''));

            var cart_width = parseInt($('.cart').css('width').replace("px", ''));
            // var cart_width = cart_width;
            if(parseInt($('.cart_container').css("margin-left").replace("px", '')) <= -(width - cart_width * 0.9 - 320)){
                $('.cart_container').not(':animated').animate({"margin-left": (-width + cart_width * 0.9 - 320) + "px"}, 300);
            }
            else{
                $('.cart_container').not(':animated').animate({"margin-left": (left_pos - 350) + "px"}, 300);
            }
            // alert(parseInt($('.cart_container').css("margin-left").replace("px", '')));
          
        }
        right_click = false;
        // Clear timeout
        return false;
      }).mousedown(function(){
        // Set timeout
        pressTimer = window.setTimeout(function() { 
            var width = parseInt($('.cart_container').css('width').replace("px", ''));
            var cart_width = parseInt($('.cart').css('width').replace("px", ''));
            $('.cart_container').not(':animated').animate({"margin-left": (-width + cart_width * 0.9 - 320) + "px"}, 300);
            right_click = true;
        }, 200);
        return false; 
      });

   
    $(".left_cart").mouseup(function(){
        clearTimeout(pressTimer);
        if(!left_click)
        {
            var left_pos = parseInt($('.cart_container').css("margin-left").replace("px", ''));
            var cart_width = parseInt($('.cart').css('width').replace("px", ''));
            
            if(parseInt($('.cart_container').css("margin-left").replace("px", '')) >= -cart_width * 0.5){
                $('.cart_container').not(':animated').animate({"margin-left": "50px"}, 300);
            }
            else{
                $('.cart_container').not(':animated').animate({"margin-left": (left_pos + 350) + "px"}, 300);
            }
           
        }
        left_click = false;
        // Clear timeout
        return;
      }).mousedown(function(){
        // Set timeout
        pressTimer = window.setTimeout(function() { 
            $('.cart_container').animate({"margin-left": "50px"}, 300);
            left_click = true;
        }, 200);
        return; 
      });

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

    /* НАЖАТИЕ НА КНОПКУ ПОИСКА */
    $(".src_circle").on('click', (function (event) {
        if($('.search_wrapper').width() <= 100){
            $('.search_wrapper').addClass('search_active');
            $('#src_input').focus();
        }
    }));

    $(document).keydown(function(e) {
        if (!(window === window.parent) && e.keyCode == 27) {       
            parent.$('.cart_frame').removeClass('cart_frame_open');
        }
        if(e.ctrlKey && e.keyCode === 70){
            e.preventDefault();
            $('.search_wrapper').addClass('search_active');
            $('#src_input').focus();
        }
        if (e.keyCode == 27) {
           $('.cart_frame').removeClass('cart_frame_open');

           category_function("close");
           ButtonRoles["categories"] = open;
       }
   });
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

                if (ScrollTop > 2600) {
                    $('.season_share img').addClass('season_scroll');
                }
            }
            else if (ScrollTop <= 350) {
                $('.up').css({
                    'opacity': '0',
                    'cursor': 'default'
                });
                if (ScrollTop <= 135) {
                    $('header').css({
                        'top': (-ScrollTop).toString() + 'px',
                    });
                    //$('header .borderBottom').css({ 'width': (ScrollTop * 1920 * 0.01).toString() + 'px' });
                    $('header').removeClass('header_scroll');
                }
                else if ($('header').top != -135 && ScrollTop >= 135) {
                    $('header').addClass('header_scroll');
                }
            }

           
        }
    });

});
function category_function(state) {
    var array = $('.categories ul li');
    if (state == "open") {
        $('.categories').addClass('category_active');
        $('.cart_frame').removeClass('cart_frame_open'); 
        var timerId = setTimeout(
            function() {
                $('.cart_frame').css({display : 'none'})
            }, 300);

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
    }
    else if (state == "close") {
        $('.categories').removeClass('category_active');
        $(".category_open_btn").removeClass('burger_tocross');

        $(array).animate({ 'opacity': '0' }, 100);
        $(array).css({ 'display': 'none' });

        $('.categories').animate({
            height: '40px',
            textIndent: 0
        }, 150); //КАТЕГОРИИ - ВЫСОТА СОКРАЩЕНИЕ
        $('.categories span[name="title"]').animate({ width: 0 }, 100);
    }
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

function src_uniKeyCode(event) {
    var key = event.keyCode;
    if(key === 27) {
        $('.search_wrapper').removeClass("search_active");
    }
}

function src_onBlur() {
    $(this).blur();
    $('.search_wrapper').removeClass('search_active');
};