$(function (){


//-------------------affichage categorie Quiz--------------------------
    var categories = new ModelCategories(CATEGORIES);

    var v_categories = new ViewCategories({
        collection: categories
    });


    var dom = v_categories.renderListCategorieQuiz();
    $("#liensCatQ").append(dom);

})
