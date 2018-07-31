  $(window).on('load', function () {
    var $preloader = $('#page-preloader'),
    $spinner = $preloader.find('.spinner');
$spinner.fadeOut();
$preloader.delay(150).fadeOut('slow');
});

$(document).ready(function () {
    
    // localStorage.clear();
    if(JSON.parse(localStorage.getItem("cart")) == null) 
        var cart = []; 
        else{ 
        var cart = JSON.parse(localStorage.getItem("cart")); 
        //console.log(cart); 
        for(var i = 0; i < cart.length; i++){ 

        var id = cart[i].id; 
        var image = cart[i].image; 
        var message = cart[i].message; 
        var price = cart[i].price; 
        var url = cart[i].url; 
        var count = cart[i].count; 
        toCart(id, image, message, price, url, count); 
        } 
    }

    var filters;

    var ButtonRoles;
    var open = true;
    var close = false;

   

    $(function setUp() {
            //toUp();

        filters = [];
        ButtonRoles = new Object();
        ButtonRoles["categories"] = open;
        ButtonRoles["brends"] = open;

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

        // var products = $('.cart_container .product');
        // var cart = $('.cart_container');
        // cart.width((180 + 25) * products.length);
        // 180 width_prod + 25 margin-left_prod
    });
    


    $("#cart").on('click', (function () {
       
        
        $('.cart_frame').toggleClass('cart_frame_open'); 

        category_function("close");
        ButtonRoles["categories"] = open;

        brends_function("close");
        ButtonRoles["brends"] = open;
    }));

    var mouse_press = false;

    $(".right_cart").mouseup(function(){
        clearTimeout(pressTimer);
        if(!mouse_press){
            var left_pos = parseInt($('.cart_container').css("margin-left").replace("px", ''));
            var width = parseInt($('.cart_container').css('width').replace("px", ''));

            var cart_width = parseInt($('.cart').css('width').replace("px", ''));
            // var cart_width = cart_width;
            if(parseInt($('.cart_container').css("margin-left").replace("px", '')) <= (-width + cart_width * 1.8 - 320)){
                $('.cart_container').not(':animated').animate({"margin-left": (-width + cart_width * 0.9 - 320) + "px"}, 300);
            }
            else{
                $('.cart_container').not(':animated').animate({"margin-left": (left_pos - cart_width * 0.5) + "px"}, 300);
            }
            // alert(parseInt($('.cart_container').css("margin-left").replace("px", '')));
          
        }
        mouse_press = false;
        // Clear timeout
        return false;
      }).mousedown(function(){
        // Set timeout
        pressTimer = window.setTimeout(function() { 
            var width = parseInt($('.cart_container').css('width').replace("px", ''));
            var cart_width = parseInt($('.cart').css('width').replace("px", ''));
            $('.cart_container').not(':animated').animate({"margin-left": (-width + cart_width * 0.9 - 320) + "px"}, 300);
            mouse_press = true;
        }, 200);
        return false; 
      });

   
    $(".left_cart").mouseup(function(){
        clearTimeout(pressTimer);
        if(!mouse_press)
        {
            var left_pos = parseInt($('.cart_container').css("margin-left").replace("px", ''));
            var cart_width = parseInt($('.cart').css('width').replace("px", ''));
            
            if(parseInt($('.cart_container').css("margin-left").replace("px", '')) >= -cart_width * 0.9){
                $('.cart_container').not(':animated').animate({"margin-left": "50px"}, 300);
            }
            else{
                $('.cart_container').not(':animated').animate({"margin-left": (left_pos + cart_width * 0.5) + "px"}, 300);
            }
           
        }
        mouse_press = false;
        // Clear timeout
        return;
      }).mousedown(function(){
        // Set timeout
        pressTimer = window.setTimeout(function() { 
            $('.cart_container').animate({"margin-left": "50px"}, 300);
            mouse_press = true;
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


    // ---------------------------

    $(".brends_open_btn").on('click', (function (event) {
        if (ButtonRoles["brends"] == open) {
            brends_function("open");
            ButtonRoles["brends"] = close; 
        }
        else if (ButtonRoles["brends"] == close) {
            brends_function("close");
            ButtonRoles["brends"] = open;
        }
    }));
    $(".brends label[name=maintitle]").on('click', (function (event) {
        if (ButtonRoles["brends"] == open) {
            brends_function("open");
            ButtonRoles["brends"] = close;
        }
        else if (ButtonRoles["brends"] == close) {
            brends_function("close");
            ButtonRoles["brends"] = open;
        }
    }));

    // ---------------------------

    /* НАЖАТИЕ НА КНОПКУ ПОИСКА */
    $(".src_circle").on('click', (function (event) {
        if($('.search_wrapper').width() <= 100){
            $('.search_wrapper').addClass('search_active');
            $('#src_input').focus();
        }
    }));

    
    // document.getElementByClassName('tocart').addEventListener('click', function(e) {
    //     e.preventDefault();
    //     alert('alex smorchello');
    //  }, false);

    // $(".tocart").on('click', (function (event) {
      
    //     return false;
    // }));

    $('body').on('click', '.tocart', function(){ 
        var prod = $(this).parent(); 
        
        var id = $(prod).attr('id'); 
        var image = $(prod).find('img').attr('src'); 
        var message = prod.find('p').text(); 
        var price = prod.find('.price').text(); 
        var state = "Добавлено"; 
        var url = prod.find('a').attr("href"); 
        var type = "add"; 
        var id = prod.attr('id'); 
        var count = 1; 
        // for(var i = 0; i < $('.cart_container .product').length; i++){ 
        // if($('.cart_container .product')[i].id == id) 
        // if($(prod).attr("data-attr") != null) 
        // count = $('.cart_container .product')[i].attr("data-attr"); 
        // } 
        
        notification(image, message, state, url, type); 
        
        var obj ={ 
        id: id, 
        image: image, 
        message: message, 
        price: price, 
        url: url, 
        count: count 
        } 
        
        // localStorage.clear(); 
        for(var i = 0; i < cart.length; i++){ 
        if(cart[i].id == obj.id){ 
        // count = (parseInt(cart[i].count) + 1).toString(); 
        cart[i].count = (parseInt(cart[i].count) + 1).toString(); 
        var products = $('.cart_container .product'); 
        for(var j = 0; j < products.length; j++){ 
        if(products[j].id == id) { 
        $(products[j]).attr("attr-data", "x" + cart[i].count); 
        } 
        } 
        var serialObj = JSON.stringify(cart); 
        localStorage.setItem("cart", serialObj); 
        return 0; 
        } 
        } 
        cart.push(obj); 
        var serialObj = JSON.stringify(cart); 
        localStorage.setItem("cart", serialObj); 
        
        toCart(id, image, message, price, url, count); 
        }); 
        
        $('.cart_container').on('click', '.fromcart', function(){ 
        var prod = $(this).parent(); 
        
        var id = $(prod).attr('id'); 
        var image = $(prod).find('img').attr('src'); 
        var message = prod.find('p').text(); 
        var price = prod.find('.price').text(); 
        var state = "Удалено"; 
        var url = prod.find('a').attr("href"); 
        var type = "remove"; 
        var id = prod.attr('id'); 
        // var count = 1; 
        
        notification(image, message, state, url, type); 
        
        var obj ={ 
        id: id, 
        image: image, 
        message: message, 
        price: price, 
        url: url 
        } 
        for(var i = 0; i < cart.length; i++){ 
        if(cart[i].id == obj.id){ 
        if(cart[i].count == "1") { 
        cart.splice(cart.indexOf(obj), 1); 
        var serialObj = JSON.stringify(cart); 
        localStorage.setItem("cart", serialObj); 
        
        fromCart(id); 
        return 0; 
        } 
        cart[i].count = (parseInt(cart[i].count) - 1).toString(); 
        var products = $('.cart_container .product'); 
        for(var j = 0; j < products.length; j++){ 
        if(products[j].id == id) { 
        $(products[j]).attr("attr-data", "x" + cart[i].count); 
        if(cart[i].count == "1") 
        $(products[j]).attr("attr-data", ""); 
        } 
        } 
        var serialObj = JSON.stringify(cart); 
        localStorage.setItem("cart", serialObj); 
        return 0; 
        } 
        } 
        }); 
        
        $('.clear_cart').on('click', function(){ 
        type = "clear_cart"; 
        notification(null, null, null, null, type); 
        
        localStorage.clear(); 
        var products = $('.cart_container .product'); 
        for(var i = 0; i < products.length; i++){ 
        var id = products[i].id; 
        $(products[i]).removeClass('product_inCart'); 
        
        setTimeout(function(){ 
        $('.cart_container').empty(); 
        }, 300); 
        } 
        });

    $(document).keydown(function(e) {
      
        if(e.ctrlKey && e.keyCode === 70){
            e.preventDefault();
            $('.search_wrapper').addClass('search_active');
            $('#src_input').focus();
        }
        if (e.keyCode == 27) {
            if (!(window === window.parent))
                parent.$('.cart_frame').removeClass('cart_frame_open');
                
           $('.cart_frame').removeClass('cart_frame_open');

           category_function("close");
           ButtonRoles["categories"] = open;

           brends_function("close");
           ButtonRoles["brends"] = open;
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
            }
            if ($('header').top != -135 && ScrollTop >= 135) {
                $('header').addClass('header_scroll');
            }

           
        }
    });

});
function category_function(state) {
    var array = $('.categories ul li');
    if (state == "open") {
        $('.categories').addClass('category_active');
        $('.cart_frame').removeClass('cart_frame_open'); 

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

// ------------------------

function brends_function(state) {
    var array = $('.brends ul li');
    if (state == "open") {
        $('.brends').addClass('brends_active');
        $('.cart_frame').removeClass('cart_frame_open'); 

        var ctg = $('.brends');
        var brends = $('.brends .brend');
        if(brends.length <= 8) 
            var height = (brends.length * 55 + 25 /* margin-top */ + 100 /* design-part */);
        else{
            var height = (brends.length * 55 + 25 /* margin-top */);
            $(".list_container").css({top: "-100px"});
        }
        $('.brends').animate({
            height: height.toString() + "px",
            textIndent: 20
        }, 100);
        $('.brends span[name="title"]').animate({ width: "80px" }, 100);

        $(".brend_open_btn").addClass('burger_tocross');

        $(array).css({ 'display': 'block' });
        $(array).animate({ 'opacity': '1' }, 100);
    }
    else if (state == "close") {
        $('.brends').removeClass('brend_active');
        $(".brend_open_btn").removeClass('burger_tocross');

        $(array).animate({ 'opacity': '0' }, 100);
        $(array).css({ 'display': 'none' });

        $('.brends').animate({
            height: '40px',
            textIndent: 0
        }, 150); //КАТЕГОРИИ - ВЫСОТА СОКРАЩЕНИЕ
        $('.brends span[name="title"]').animate({ width: 0 }, 100);
    }
}

// -----------------------

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





function toCart(id, image, message, price, url, count){ 
    var products = $('.cart_container .product'); 
    
    var product = document.createElement('div'); 
    var cheque_note = document.createElement('div'); 
    
    $(product).append( 
    "<img src='" + image + "'>" + 
    "<div class='fromcart non_selected'>" + 
    "<label>удалить из корзины</label>" + 
    "</div>" + 
    "<p>" + message + "</p>" + 
    "<label class='price'>" + price + "</label>" + 
    "<a href='" + url + "' class='ref'></a>" ); 
    
    $(cheque_note).append( 
    "<p>" + message + "</p>" + 
    "<label>" + price + "</label>"); 
    
    $(cheque_note).attr("attr-data", ($(".cheque div").length + 1).toString()); 
    
    product.id = id; 
    $(product).attr("attr-data", "x" + count); 
    if(count == "1") 
    $(product).attr("attr-data", ""); 
    $(product).addClass('product'); 
    
    var cart = $('.cart_container'); 
    cart.width((180 + 25) * (products.length + 1)); 
    
    $(".cart_container").prepend(product); 
    $(".cheque").append(cheque_note); 
    
    setTimeout(function(){ 
    $(product).addClass('product_inCart'); 
    $(product).addClass('non_selected'); 
    $(cheque_note).addClass('cheque_note_active'); 
    }, 100); 
    } 
    
    
    
    
    
    function fromCart(id){ 
    var products = $('.cart_container .product'); 
    
    for(var i = 0; i < products.length; i++) 
    if(products[i].id == id) { 
    // var counter = (parseInt($(products[i]).attr("attr-data").replace('x',''))); 
    // if(counter > 2){ 
    // $(products[i]).attr("attr-data", "x" + (counter - 1)); 
    // } 
    // else if(counter == 2){ 
    // $(products[i]).attr("attr-data", ""); 
    // } 
    // else{ 
    $(products[i]).removeClass('product_inCart'); 
    
    setTimeout(function(){ 
    $('.cart_container #' + id).remove(); 
    }, 300); 
    // } 
    } 
    }

    function notification(image, message, state, url, type){ 
    var life_time = 5000; 
    
    var note = document.createElement('div'); 
    var p = document.createElement('p'); 
    var img = document.createElement('img'); 
    var label = document.createElement('label'); 
    var a = document.createElement('a'); 
    
    p.innerHTML = state; 
    img.src = image; 
    label.innerHTML = message; 
    a.href = url; 
    a.innerHTML = "Перейти к продукту"; 
    
    note.appendChild(p); 
    note.appendChild(img); 
    note.appendChild(label); 
    
    if(type != "remove"){ 
    note.appendChild(a); 
    } 
    else{ 
    $(note).children().css({color: "var(--color-primary)"}); 
    } 
    
    
    $('.notification_wrapper').append(note); 
    
    $(note).addClass('notification'); 
    $(note).animate({opacity: 1}, 100); 
    
    var timer = setTimeout(function(){ 
    $(note).addClass('note_destructor'); 
    
    var timer = setTimeout(function(){ 
    note.remove(); 
    }, 300); 
    
    }, life_time); 
    }
    