var ViewActualite = Pclia.View.extend({
//    écoute les evenements    
    events: {
        "click .card": "viewActu"
    },
    initialize: function () {
        this.listenTo(this.model, "change", this.render);
    },
    render: function () {
        var linkedId = this.model.get("actualiteLiee_id");
        if (linkedId) {
            var linkedNews = _.filter(NEWS, function (news) {
                return news.id == linkedId;
            })[0];
            this.model.set("link", linkedNews);
        }
        this.$el.html(Tmpl.actualite(this.model.attributes));
        return this.$el;
        
    },
//    affiche l'actu complète
    viewActu: function(){
        $(".fondnoir").fadeIn();
        $(".actualite", this.$el).fadeIn();
//        permet de fixer l'arrière plan quand l'actualité est affiché
        $('html, body').css({
            'overflow': 'hidden',
        });
    }
});