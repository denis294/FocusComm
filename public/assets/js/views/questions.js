var ViewQuestions = Pclia.ViewCollection.extend({
    events: {

    },
    initialize: function () {
        this.listenTo(this.collection, "add remove", this.render);

        //_.each(this.collection.models, function (model) {

            //  var id = model.get("id");
            // console.log(id);
            // // $("#form_id").append(id);
            //  $(window).trigger('addID');

        //});

    },
    render: function () {
        var container = this.$el;
        container.html(Tmpl.questions());
        _.each(this.collection.models, function (model) {
            var view = new ViewQuestion({model: model});
            var dom = view.render();
            $("#questions", container).append(dom);

        });
        $(".questionsQ, #quizzEnd", container).hide();
        $(".questionsQ:first", container).show();
        return container;
    },


    getID: function (){
        var tabId = [];
        _.each(this.collection.models, function (model) {

            var id = model.get("id");
            tabId.push(id);

        });
        return tabId;

    }
});

