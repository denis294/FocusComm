var ViewActualite = Pclia.View.extend({
    events: {
        "click .card-action a": "viewActu"
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
    viewActu: function(){
        $(".fondnoir").fadeIn();
        $(".actualite", this.$el).fadeIn();
    }
});