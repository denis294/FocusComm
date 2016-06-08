$(function (){


//------vues des categories-----------------

    var categories = new ModelCategories(CATEGORIES);


    var v_categories = new ViewCategories({
        collection: categories
    });
    //$("#categories").append(v_categories.render());
    $("section .contents").hide()
    var dom = v_categories.render();
    $("#categories").append(dom);

/*****************************************************
Actualites
******************************************************/

    var actualites = new ModelActualites(ACTUALITES);

    var v_actualites = new ViewActualites({
        collection: actualites
    });
    var domNews = v_actualites.render();
    $("#news").append(domNews);

    //console.log(actualites);

/*****************************************************
Categorie Liste menu
******************************************************/
    var v_categoriesListe = new ViewCategories({
        collection: categories
    });

    var categorieListe = v_categoriesListe.renderListCategorie();
    $("#CategorieListe").append(categorieListe);

    $("#CategorieListe").hide();


//------vues du contenu-------------------------------------------------------

    var stress = new ModelContenus(STRESS);

    var v_stress = new ViewContenus({
        collection: stress
    });
    var dom = v_stress.render();
    $("#stress").append(dom);

//---------------------------------------
    var estime = new ModelContenus(ESTIME);

    var v_estime = new ViewContenus({
        collection: estime
    });
    var dom = v_estime.render();
    $("#estime-de-soi").append(dom);
//---------------------------------------


    var sexualite = new ModelContenus(SEXUALITE);

    var v_sexualite = new ViewContenus({
        collection: sexualite
    });
    var dom = v_sexualite.render();
    $("#sexualite").append(dom);

//---------------------------------------
    var boire = new ModelContenus(BOIRE);

    var v_boire = new ViewContenus({
        collection: boire
    });
    var dom = v_boire.render();
    $("#boire-fumer-se-droguer").append(dom);

//---------------------------------------

    var sante = new ModelContenus(SANTE);

    var v_sante = new ViewContenus({
        collection: sante
    });
    var dom = v_sante.render();
    $("#sante").append(dom);

//---------------------------------------
    var manger = new ModelContenus(MANGER);

    var v_manger = new ViewContenus({
        collection: sante
    });
    var dom = v_manger.render();
    $("#manger-bouger").append(dom);

//---------------------------------------
    var moi = new ModelContenus(MOI);

    var v_moi = new ViewContenus({
        collection: moi
    });
    var dom = v_moi.render();
    $("#moi-toi-et-les-autres").append(dom);

//---------------------------------------

    var violence = new ModelContenus(VIOLENCE);

    var v_violence = new ViewContenus({
        collection: violence
    });
    var dom = v_violence.render();
    $("#violence").append(dom);

//---------------------------------------
    var formation = new ModelContenus(FORMATION);

    var v_formation = new ViewContenus({
        collection: formation
    });
    var dom = v_formation.render();
    $("#formation-travail").append(dom);

//---------------------------------------

    var argent = new ModelContenus(ARGENT);

    var v_argent = new ViewContenus({
        collection: argent
    });
    var dom = v_argent.render();
    $("#argent").append(dom);

//---------------------------------------

    var religion = new ModelContenus(RELIGION);

    var v_religion = new ViewContenus({
        collection: religion
    });
    var dom = v_religion.render();
    $("#religion-croyance").append(dom);

//---------------------------------------

    var discrimination = new ModelContenus(DISCRIMINATION);

    var v_discrimination = new ViewContenus({
        collection: discrimination
    });
    var dom = v_discrimination.render();
    $("#racisme-discrimination").append(dom);

//------------------------------------------------------------------------------------


$(".content").on("click", switchSection(location.hash));



    $(window).on("popstate", function(e) {
        $("section").hide();
        var section = location.hash;
        if ($(section).length == 0) {
            section = "#categories";
        }
        $(section).show();
    });
    $(window).trigger('popstate');


    if (location.hash !=('#' || "#categories")) {
        $("#CategorieListe").show();
    };


});

function switchSection(section) {
    history.pushState(null, null, section);
    $(window).trigger('popstate');
}

