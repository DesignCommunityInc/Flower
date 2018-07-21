$(document).ready(function () {
    var radio = $('.slider_radio span');
    $(radio[0]).addClass('active');

    var images = $('slider img');
    var image = 5;
    var time = 5000;

    var counter = 0;

    var timer = setInterval(function () {
        image++;
        if (image >= 5) {
            image = 1;
        }
        swipe(image);       
    }, time);


    $('.slider_radio span').on('click', (function (event) {
        image = this.getAttribute('id');
        swipe(image - 0);
    }));



});


function swipe(num) {

    var slider = $('slider');
    var radio = $('.slider_radio span');
    $(radio).removeClass('active');
    $(slider).removeClass('first_slide');
    $(slider).removeClass('second_slide');
    $(slider).removeClass('third_slide');
    $(slider).removeClass('fourth_slide');
    switch (num) {
        case 1:
            //$(slider).css({ 'left': '-1900px' });
            $(slider).addClass('second_slide');
            $(radio[1]).addClass('active');
            break;
        case 2:
            //$(slider).css({ 'left': '-3820px' });
            $(slider).addClass('third_slide');
            $(radio[2]).addClass('active');
            break;
        case 3:
            //$(slider).css({ 'left': '-5740px' });
            $(slider).addClass('fourth_slide');
            $(radio[3]).addClass('active');
            break;
        case 4:
            // $(slider).css({ 'left': '20px' });
            $(slider).addClass('first_slide');
            $(radio[0]).addClass('active');
            break;
    }
}