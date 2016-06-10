$(function (){


//------affichage news---------

    var actualites = new ModelActualites(ACTUALITES);

    var v_actualites = new ViewActualites({
        collection: actualites
    });
    var domNews = v_actualites.render();
    $("#news").append(domNews);

});



