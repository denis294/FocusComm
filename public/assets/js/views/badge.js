var ViewBadge = Pclia.View.extend({
    events: {

    },
    initialize: function () {
        this.listenTo(this.model, "change", this.render);


    },
    render: function () {
        this.$el.html(Tmpl.badge(this.model.attributes));
        return this.$el;

    }

});

