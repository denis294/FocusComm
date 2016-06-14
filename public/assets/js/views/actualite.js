var ViewActualite = Pclia.View.extend({
    events: {
        "click .card-action a": "viewActu"
    },
    initialize: function () {
        this.listenTo(this.model, "change", this.render);
    },
    render: function () {
        this.$el.html(Tmpl.actualite(this.model.attributes));
        return this.$el;
        
    },
    viewActu: function(){
        $(".fondnoir").fadeIn();
        $(".actualite", this.$el).fadeIn();
    }
});