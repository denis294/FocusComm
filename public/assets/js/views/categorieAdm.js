var ViewCategorieAdm = Pclia.View.extend({
    events: {

    },
    initialize: function () {
        this.listenTo(this.model, "change", this.render);
    },
    render: function () {
        this.$el.html(Tmpl.categorieAdm(this.model.attributes));
        return this.$el;
    },
});