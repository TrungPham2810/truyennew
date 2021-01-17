// A $( document ).ready() block.
$( document ).ready(function() {
    console.log( "ready!" );
    var menuCat = $('.feature_mobile .story-menu-item.cat');
    var itemCat = $('.feature_mobile .sub-menu.sub-menu-cat');
    var menuList = $('.feature_mobile .story-menu-item.list');
    var itemList = $('.feature_mobile .sub-menu.sub-menu-list');

    menuCat.click(function () {
        // var elementContent = $('.sub-menu.sub-menu-cat');
        // var elementTitle = $('.story-menu-item.cat');
        resetActiveFeature(menuList, itemList);
        showContentFeature(menuCat, itemCat);
    });

    menuList.click(function () {
        // var elementContent = $('.sub-menu.sub-menu-list');
        // var elementTitle = $('.story-menu-item.list');
        resetActiveFeature(menuCat, itemCat);
        showContentFeature(menuList, itemList);
    });

    function resetActiveFeature(elementTitle, elementContent) {
        elementTitle.removeClass('active');
        elementContent.hide();
    }
    function showContentFeature(elementTitle, elementContent) {
        let width = $( window ).width();
        if(width < 768) {

            elementTitle.toggleClass('active');
            elementContent.toggle()
        }

    }
});