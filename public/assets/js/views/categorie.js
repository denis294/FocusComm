var ViewCategorie = Pclia.View.extend({
    events: {

    },
    initialize: function () {
        this.listenTo(this.model, "change", this.render);
    },
    render: function () {
        this.$el.html(Tmpl.categorie(this.model.attributes));
        //this.$el.style.content=
        return this.$el;
    },
    renderListCategorie: function () {
        this.$el.html(Tmpl.categorieListe(this.model.attributes));
        return this.$el;
    }

});