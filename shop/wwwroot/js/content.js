$(document).ready(function(){

    $('.filter_body').on('click', 'label', function(){
        
        $(this).toggleClass("filter_radio_active");
    });

    $('.filter_show_more').on('click', function(){
        var parent = $(this).parent();
        var filters = $(parent).find('.filter_body').children('label')
        if(filters.length >= 8){
            if($(parent).hasClass('filter_active')){
                var height = 300;
                $(this).text('раскрыть список');
            }
            else{
                height = 300 + filters.length * (22 /* height */ + 5 /* margin */) - (22 + 5) * 6.5 /* count of visible items*/;
                $(this).text('закрыть список');
            }
            $(parent).animate({height: height + "px"}, 200);
            $(parent).toggleClass("filter_active");
        }
    });
});