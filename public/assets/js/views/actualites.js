var ViewActualites = Pclia.ViewCollection.extend({
    events: {
        "click .fondnoir": "cacherViewActu",
        "click .articleliee": "showLinkedArticle"
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
    
    cacherViewActu: function(){
        $(".fondnoir").fadeOut();
        $(".actualite").fadeOut();
    }
    ,
    showLinkedArticle: function (evt) {
        console.log($(evt.target));
        var idCurrent = $(evt.target).attr("data-actualite_id");
        var idLinked = $(evt.target).attr("data-actualiteLiee_id");
        $("#card_"+idCurrent).hide();
        $("#card_"+idLinked).show();
        
    }
});