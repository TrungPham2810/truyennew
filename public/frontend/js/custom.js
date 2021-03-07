$( document ).ready(function() {
    var menuCat = $('.feature_mobile .story-menu-item.cat');
    var itemCat = $('.feature_mobile .sub-menu.sub-menu-cat');
    var menuList = $('.feature_mobile .story-menu-item.list');
    var itemList = $('.feature_mobile .sub-menu.sub-menu-list');

    menuCat.click(function () {
        resetActiveFeature(menuList, itemList);
        showContentFeature(menuCat, itemCat);
    });

    menuList.click(function () {
        resetActiveFeature(menuCat, itemCat);
        showContentFeature(menuList, itemList);
    });
    $('.fbt').click(function () {
        $("html, body").animate({ scrollTop: 0 }, "slow");
        return false;
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