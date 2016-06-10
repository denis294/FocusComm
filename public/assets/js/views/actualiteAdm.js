var ViewActualiteAdm = Pclia.View.extend({
    events: {

    },
    initialize: function () {
        this.listenTo(this.model, "change", this.render);
    },
    render: function () {
        el: '#li',
        this.$el.html(Tmpl.actualiteAdm(this.model.attributes));
        return this.$el;
    },
});