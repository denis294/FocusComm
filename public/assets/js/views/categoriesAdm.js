var ViewCategoriesAdm = Pclia.ViewCollection.extend({
    events: {

    },
    initialize: function () {
        this.listenTo(this.collection, "add remove", this.render);
    },
    render: function () {
        var container = this.$el;
        container.html(Tmpl.categoriesAdm());
        _.each(this.collection.models, function (model) {
            var view = new ViewCategorieAdm({model: model});
            var dom = view.render();
            $(".categoriesAdmList", container).append(dom);
        });
        return container;
    },
});

