$(document).ready(function() {
    $("#boutonDeconnexion").hide();
});

$(function (){

//gère les clics
    // $("section").hide();
    // $("#boutonDeconnexion").hide();
    // $("#loginPlateForme").show();

    // $('#connexionAdm').on('click', function() {
    //     $("section").hide();
    //     $("#accueilEspaceAdm").show();
    //     $("#boutonDeconnexion").show();
    // });

    // $('#boutonDeconnexion').on('click', function() {
    //     $("section").hide();
    //     $("#loginPlateForme").show();
    // });

    // $(".boutonInput").on('click', function() {
    //     $("section").hide();
    //     $("#accueilEspaceAdm").show();
    // });

    // $('#actualite').on('click', function() {
    //     $("section").hide();
    //     $("#actualiteAdm").show();
    //     $("#boutonDeconnexion").show();
    //     $("#ajouterActualiteAdmForm").hide();
    //     $("#visualisationArticle").hide();
    // });

    $('#buttonAdd').on('click', function() {
        $("#visualisationArticle").hide();
        $("#ajouterActualiteAdmForm").show();
    });

    $("#connexionLogin").on('click', function() {
        $("#boutonDeconnexion").show();
    });

    // $('#quiz').on('click', function() {
    //     $("section").hide();
    //     $("#quizAdm").show();
    // });

    // $('#contenu').on('click', function() {
    //     $("section").hide();
    //     $("#contenuAdm").show();
    // });

    // $('#utilisateurs').on('click', function() {
    //     $("section").hide();
    //     $("#utilisateursAdm").show();
    // });

    // $('#compte').on('click', function() {
    //     $("section").hide();
    //     $("#compteAdm").show();
    // });

    // $('#autre').on('click', function() {
    //     $("section").hide();
    //     $("#autreAdm").show();
    // });

//------bouton précédent, suivant,...-----------------

    $('#boutonAjouter').on('click', function() {
        $("#ajouterActualiteAdmForm").hide();
        $("#visualisationArticle").show();
    });

    $('#boutonPrecedent').on('click', function() {
        $("#ajouterActualiteAdmForm").show();
        $("#visualisationArticle").hide();
    });

    $('#creation').on('click', function() {
        $("#ajouterActualiteAdmForm").show();
        $("#visualisationArticle").hide();
    });

    // $('#boutonConfirmer').on('click', function() {
    //     $("#ajouterActualiteAdmForm").hide();
    //     $("#visualisationArticle").hide();
    //     $("#ajouterActualiteAdm").show();
    // });

    // $('#listeArticle').on('click', function() {
    //     $("#ajouterActualiteAdmForm").hide();
    //     $("#visualisationArticle").hide();
    //     $("#ajouterActualiteAdm").show();
    // });

    // $('#creation').on('click', function() {
    //     $("#ajouterActualiteAdmForm").show();
    //     $("#ajouterActualiteAdm").hide();
    //     $("#visualisationArticle").hide();
    // });

    // $('#confirmation').on('click', function() {
    //     $("#ajouterActualiteAdmForm").hide();
    //     $("#visualisationArticle").hide();
    //     $("#ajouterActualiteAdm").show();
    // });


//------vues des actualites admin -----------------
    var actualitesAdm = new ModelActualitesAdm(news);
    var v_actualitesAdm = new ViewActualitesAdm({
        collection: actualitesAdm
    });

    var dom = v_actualitesAdm.render();
    $("#ajouterActualiteAdm").append(dom);



    $('#boutonAjouter').on('click', function() {
        $("#titreForm").empty();
        var titreForm = $("#titreInput", this.$el).val();
        $("#titreForm").append(titreForm);

        $("#descriptionForm").empty();
        var descriptionForm = $("#placeholderArticle", this.$el).val();
        $("#descriptionForm").append(descriptionForm);

        $("#dateForm").empty();
        var dateForm = $("#dateArticleAAjouter", this.$el).val();
        $("#dateForm").append(dateForm);

        $("#imageForm").empty();
        var image = $("#cheminDossier", this.$el).val();

        ($("#imageForm").attr('href')).append(image);
    });
});






