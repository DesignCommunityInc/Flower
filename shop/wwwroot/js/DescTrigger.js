$(document).ready(function () {

    $(".tab_wrapper").on('click', 'label', (function () {

        switch (this.getAttribute('id')) {
            case '1':
                $(this).parent().parent().addClass('first_tabselected');
                $(this).parent().parent().removeClass('second_tabselected');
                $(this).parent().parent().removeClass('third_tabselected');
                break;
            case '2':
                $(this).parent().parent().removeClass('first_tabselected');
                $(this).parent().parent().addClass('second_tabselected');
                $(this).parent().parent().removeClass('third_tabselected');
                break;
            case '3':
                $(this).parent().parent().removeClass('first_tabselected');
                $(this).parent().parent().removeClass('second_tabselected');
                $(this).parent().parent().addClass('third_tabselected');
                break;
        }
    }));

});