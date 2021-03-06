var ViewActualites = Pclia.ViewCollection.extend({
    events: {

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
    }
});