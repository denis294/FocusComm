var ViewCategories = Pclia.ViewCollection.extend({
    events: {

    },
    initialize: function () {
        this.listenTo(this.collection, "add remove", this.render);
    },
    render: function () {
        var container = this.$el;
        container.html(Tmpl.categories());
        _.each(this.collection.models, function (model) {
            var view = new ViewCategorie({model: model});
            var dom = view.render();
            $(".categoriesList", container).append(dom);
        });
        return container;
    },
        renderListCategorie: function () {
        var container = this.$el;
        container.html(Tmpl.categoriesListe());
        _.each(this.collection.models, function (model) {
            var view = new ViewCategorie({model: model});
            var dom = view.renderListCategorie();
            $("#CategorieList", container).append(dom);
        });
        return container;
    }

});

