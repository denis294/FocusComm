$(function (){
//------affichage news---------
    var actualites = new ModelActualites(NEWS);

    var v_actualites = new ViewActualites({
        collection: actualites
    });
    var domNews = v_actualites.render();
    $("#rowactu").append(domNews);

//    Cacher ces élément au lancement de la page
    $(".fondnoir").hide();
    $(".actualite").hide();
    $(".noresult").hide();
    
    
});



