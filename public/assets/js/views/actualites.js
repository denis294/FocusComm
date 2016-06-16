var ViewActualites = Pclia.ViewCollection.extend({
//    écoute les evenements
    events: {
        "click .fondnoir": "cacherViewActu",
        "click .articleliee": "showLinkedArticle",
        "click .filter": "filterClickHandler"
    },
    initialize: function () {
        this.listenTo(this.collection, "add remove", this.render);
    },
    render: function () {
        var container = this.$el;
        container.html(Tmpl.actualites());
        _.each(this.collection.models, function (model) {
            var view = new ViewActualite({model: model});
            var dom = view.render();
            $("#actualitesList", container).append(dom);
        });
        return container;
    },
//    permet de quitter l'actuaité complète
    cacherViewActu: function(){
        $(".fondnoir").fadeOut();
        $(".actualite").fadeOut();
        $('html, body').css({
            'overflow': 'auto',
        });
    },
//    permet d'afficher un article lié'
    showLinkedArticle: function (evt) {
        console.log($(evt.target));
        var idCurrent = $(evt.target).attr("data-actualite_id");
        var idLinked = $(evt.target).attr("data-actualiteLiee_id");
        $("#card_"+idCurrent).fadeOut();
        $("#card_"+idLinked).fadeIn();
        
    },
    
//    récupère la catégorie voulu pour filtrer
    filterClickHandler: function (evt){
        console.log(cat);
        if($(evt.target)!==cat){
            var cat = $(evt.target).attr("data-cat");
            var selected = $(evt.target)
            this.rendu(cat, selected);
        }
    },
//    affiche que les actu selectionner
    rendu:function(cat, selected){
       $("#slide-out li a").removeClass("active");
       $(".noresult").fadeOut();
       $(".card").fadeOut();
       
       if(cat==0){
        $(".card").fadeIn();
        selected.addClass("active");

       }
       else{
            $(".card").each(function(){
                if($(".card").attr("data-categorie")===cat && cat!==0){
                    console.log($(".card").attr("data-categorie"));
                    
                    $(".card").fadeIn();
                    selected.addClass("active");

                   
                }
            
                else{
                    $(".noresult").fadeIn();
                    selected.addClass("active");
                }
           });
        }
    }
});