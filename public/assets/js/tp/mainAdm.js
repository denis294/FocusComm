$(function (){

//gère les clics
    $("section").hide();
    $("#boutonDeconnexion").hide();
    $("#loginPlateForme").show();

    $('#connexionAdm').on('click', function() {
        $("section").hide();
        $("#accueilEspaceAdm").show();
        $("#boutonDeconnexion").show();
    });

    $('#boutonDeconnexion').on('click', function() {
        $("section").hide();
        $("#loginPlateForme").show();
    });

    $(".boutonInput").on('click', function() {
        $("section").hide();
        $("#accueilEspaceAdm").show();
    });

    $('#actualite').on('click', function() {
        $("section").hide();
        $("#actualiteAdm").show();
        $("#boutonDeconnexion").show();
        $("#ajouterActualiteAdmForm").hide();
        $("#visualisationArticle").hide();
    });

    $('#actualiteAdm').on('click', '#buttonAdd', function() {
        $("#ajouterActualiteAdm").hide();
        $("#ajouterActualiteAdmForm").show();
    });

    $("#boutonAnnuler").on('click', function() {
        $("#ajouterActualiteAdm").show();
        $("#ajouterActualiteAdmForm").hide();
    });

    $('#quiz').on('click', function() {
        $("section").hide();
        $("#quizAdm").show();
    });

    $('#contenu').on('click', function() {
        $("section").hide();
        $("#contenuAdm").show();
    });

    $('#utilisateurs').on('click', function() {
        $("section").hide();
        $("#utilisateursAdm").show();
    });

    $('#compte').on('click', function() {
        $("section").hide();
        $("#compteAdm").show();
    });

    $('#autre').on('click', function() {
        $("section").hide();
        $("#autreAdm").show();
    });

//------bouton précédent, suivant,...-----------------

    $('#boutonAjouter').on('click', function() {
        $("#ajouterActualiteAdmForm").hide();
        $("#ajouterActualiteAdm").hide();
        $("#visualisationArticle").show();
    });

    $('#boutonPrecedent').on('click', function() {
        $("#ajouterActualiteAdmForm").show();
        $("#ajouterActualiteAdm").hide();
        $("#visualisationArticle").hide();
    });

    $('#boutonConfirmer').on('click', function() {
        $("#ajouterActualiteAdmForm").hide();
        $("#visualisationArticle").hide();
        $("#ajouterActualiteAdm").show();
    });

    $('#listeArticle').on('click', function() {
        $("#ajouterActualiteAdmForm").hide();
        $("#visualisationArticle").hide();
        $("#ajouterActualiteAdm").show();
    });

    $('#creation').on('click', function() {
        $("#ajouterActualiteAdmForm").show();
        $("#ajouterActualiteAdm").hide();
        $("#visualisationArticle").hide();
    });

    $('#confirmation').on('click', function() {
        $("#ajouterActualiteAdmForm").hide();
        $("#visualisationArticle").hide();
        $("#ajouterActualiteAdm").show();
    });


//------vues des actualites admin -----------------
    var actualitesAdm = new ModelActualitesAdm(ACTUALITESADM);
    var v_actualitesAdm = new ViewActualitesAdm({
        collection: actualitesAdm
    });

    var dom = v_actualitesAdm.render();
    $("#ajouterActualiteAdm").append(dom);

    var actualiteAdm = new ModelActualiteAdm();
    var v_actualiteAdm = new ViewActualiteAdm({
        Model: actualiteAdm
    });

    var dom2 = v_actualiteAdm.renderZoom();
    $("#articleAVisualise").append(dom2);
});






