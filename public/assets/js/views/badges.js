var ViewBadges = Pclia.ViewCollection.extend({
    events: {

    },
    initialize: function () {
        this.listenTo(this.collection, "add remove", this.render);
    },
    render: function () {
        var container = this.$el;
        container.html(Tmpl.badges());
        _.each(this.collection.models, function (model) {
            var view = new ViewBadge({model: model});
            var dom = view.render();
            $("#ApparitionBadge", container).append(dom);
        });
        return container;
    },

    getIDbadge: function (){
        var tabIdBadge = [];
        _.each(this.collection.models, function (model) {

            var idBadge = model.get("id");
            tabId.push(idBadge);

        });
        return tabIdBadge;

    }
});