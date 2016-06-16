$(function (){

var  url = window.location.pathname.replace(/^\/([^\/]*).*$/, '$1');

console.log(url);

if(url == "") {
    $("#home").addClass("active");
}else {
    $("#"+url).addClass("active");
}

var figure = $(".test").hover( hoverVideo, hideVideo );


//------vues des categories-----------------

    var categories = new ModelCategories(CATEGORIES);

    var v_categories = new ViewCategories({
        collection: categories
    });
    //$("#categories").append(v_categories.render());
    //$("section .contents").hide()
    var dom = v_categories.render();
    $("#categories").append(dom);

});


//------gestion historique---------

function switchSection(section) {
    history.pushState(null, null, section);
    $(window).trigger('popstate');
}

function hoverVideo(e) { $('video', this).get(0).play(); }
function hideVideo(e) { $('video', this).get(0).pause(); }



