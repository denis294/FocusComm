var ModelActualitesAdm = Pclia.Collection.extend({
    model: ModelActualiteAdm,
    comparator: function (model) {
        return model.get("date");
    },
});