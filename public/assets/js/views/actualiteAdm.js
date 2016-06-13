var ViewActualitesAdm = Pclia.ViewCollection.extend({
    events: {
        "click #boutonAjouter": "add",
    },
    initialize: function () {
        this.listenTo(this.collection, "add remove", this.render);
    },
    render: function () {
        var container = this.$el;
        container.html(Tmpl.actualitesAdm());
        _.each(this.collection.models, function (model) {
            var view = new ViewActualiteAdm({model: model});
            var dom = view.render();
            $("#actualiteAdm", container).append(dom);
        });
        return container;
    },
    add: function () {
        var title = $("#titreInput", this.$el).val();
        var date = $("#dateArticleAAjouter", this.$el).val();
        this.collection.create({
            title: title,
            date: date,
        });
    },
});