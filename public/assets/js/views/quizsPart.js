var ViewQuizsPart = Pclia.ViewCollection.extend({
    events: {

    },
    initialize: function () {
        this.listenTo(this.collection, "add remove", this.render);
    },
    render: function () {
        var container = this.$el;
        container.html(Tmpl.quizsPart());
        _.each(this.collection.models, function (model) {

                var view = new ViewQuizPart({model: model});
                var dom = view.render();
                $("#quizPart", container).append(dom.html());

        });
        return container;
    },
});