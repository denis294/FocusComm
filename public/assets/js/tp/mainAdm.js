$(function (){
//------vues des categories admin-----------------
    var categoriesAdm = new ModelCategoriesAdm(CATEGORIESADM);
    var v_categoriesAdm = new ViewCategoriesAdm({
        collection: categoriesAdm
    });

    var dom = v_categoriesAdm.render();
    $("#accueilEspaceAdm").append(dom);

//------vues des actualites admin -----------------
    var actualitesAdm = new ModelActualitesAdm(ACTUALITESADM);
    var v_actualitesAdm = new ViewActualitesAdm({
        collection: actualitesAdm
    });

    var dom = v_actualitesAdm.render();
    $("#actualiteAdm").append(dom);
});






