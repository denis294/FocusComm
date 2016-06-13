var ViewActualiteAdm = Pclia.View.extend({
    events: {
        "click .removeArticle": "del",
        "click .actionMod": "modForm",
        "click .modArticle": "mod",
    },
    initialize: function () {
        this.listenTo(this.model, "change", this.render);
    },
    render: function () {
        this.$el.html(Tmpl.actualiteAdm(this.model.attributes));
        return this.$el;
    },
    renderZoom: function () {
        this.$el.html(Tmpl.actualiteZoomAdm(this.model.attributes));
        return this.$el;
    },
    del: function () {
        if (confirm("Are you sure ?")) {
            this.model.destroy();
        }
    },
    modForm: function () {
        $(".formMod", this.$el).show();
    },
    mod: function () {
        var title = $("#newTitreInput", this.$el).val();
        var date = $("#newDateInput", this.$el).val();
        this.model.set({
            task: title,
            time: date
        });
        this.model.save();
        $(".formMod", this.$el).hide();
    },
});