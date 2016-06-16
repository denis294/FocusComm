$(function (){

var  url = window.location.pathname.replace(/^\/([^\/]*).*$/, '$1');

console.log(url);

if(url == "") {
    $("#home").addClass("active");
}else {
    $("#"+url).addClass("active");

}

var figure = $(".test").hover( hoverVideo, hideVideo );




// $(".nav-mobile li a").on("click",function(){
//     $(".active").removeClass("active");
// });

//------vues des categories-----------------

    var categories = new ModelCategories(CATEGORIES);

    var v_categories = new ViewCategories({
        collection: categories
    });
    //$("#categories").append(v_categories.render());
    //$("section .contents").hide()
    var dom = v_categories.render();
    $("#categories").append(dom);





// // //------vues du contenu-------------------------------------------------------

//        $('.lienCat').on('click', function() {
//
//            $("#contenu").empty();
//
//            //$("#categories").hide();
//             var id = $(this).attr('id');
//
//             var contenu = new ModelContenus(window[id]);
//            var v_contenu= new ViewContenus({
//                collection: contenu
//            });
//            var dom = v_contenu.render();
//            $("#contenu").append(dom);
//            console.log("coucou");
//
////------affichage navigation latérale qui ne marche pas-------------------------------------------------------
//
//            var v_categoriesListe = new ViewCategories({
//                collection: categories
//            });
//
//            var categorieListe = v_categoriesListe.renderListCategorie();
//            $("#CategorieListe").append(categorieListe);
//
//
//            switchSection("#contenu");
//
//        });



// //------gestion historique---------
        $(window).on("popstate", function(e) {
                $("#categories").hide();
                $(".content").hide();
                
                var section = location.hash;
                if ($(section).length == 0) {
                    section = "#categories";
                }
                $(section).show();
            });

        $(window).trigger('popstate');




//------affichage news---------

    var actualites = new ModelActualites(NEWS);

    var v_actualites = new ViewActualites({
        collection: actualites
    });
    var domNews = v_actualites.render();
    $("#rowactu").append(domNews);




//----------------------QUIZ--------------------------------------------------------------

    $("#quiz").hide();

    $('#quiz').on('click', function() {
            $("#quiz").show();
        });


//------affichage categorie quiz------
    // var categoriesQuiz = new ModelCategories(CATEGORIES);

    // var v_categoriesQuiz = new ViewCategories({
    //     collection: categoriesQuiz
    // });
    // //$("#categories").append(v_categories.render());
    // // $("section .contents").hide()
    // var dom = v_categoriesQuiz.renderCategorieQuiz();
    // $("#categoriesQuiz").append(dom);



    //-------affichage contenu des quiz







});


//------gestion historique---------

function switchSection(section) {
    history.pushState(null, null, section);
    $(window).trigger('popstate');
}

function hoverVideo(e) { $('video', this).get(0).play(); }
function hideVideo(e) { $('video', this).get(0).pause(); }



