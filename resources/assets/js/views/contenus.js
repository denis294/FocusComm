var ViewContenus = Pclia.ViewCollection.extend({
    events: {

    },
    initialize: function () {
        this.listenTo(this.collection, "add remove", this.render);
    },
    render: function () {
        var container = this.$el;
        container.html(Tmpl.contenus());
        _.each(this.collection.models, function (model) {
            var view = new ViewContenu({model: model});
            var dom = view.render();
            $("#ContenusList", container).append(dom);
        });
        return container;
    }

});