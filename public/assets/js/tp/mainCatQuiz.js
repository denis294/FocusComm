$(function (){


//-------------------affichage categorie Quiz--------------------------

    var categoriesQ = new ModelCategories(categories);

    var v_categories = new ViewCategories({
        collection: categoriesQ
    });


    var dom = v_categories.renderListCategorieQuiz();
    $(".liensCatQ").append(dom);

})
