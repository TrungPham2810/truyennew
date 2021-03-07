$( document ).ready(function() {
    var sectionShowBook = $('.section-show-book');
    $('.switch-layout .grid').click(function () {
        if(!$(this).hasClass('active')) {
            sectionShowBook.removeClass('type_list');
            sectionShowBook.addClass('type_grid');
            $('.switch-layout .active').removeClass('active');
            $(this).addClass('active');
        }
    });

    $('.switch-layout .list').click(function () {
        if(!$(this).hasClass('active')) {
            sectionShowBook.removeClass('type_grid');
            sectionShowBook.addClass('type_list');
            $('.switch-layout .active').removeClass('active');
            $(this).addClass('active');
        }
    })
});