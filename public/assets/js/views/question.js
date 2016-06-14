var ViewQuestion = Pclia.View.extend({
    events: {
        "click .buttonQ": "validate",
        "click #continue": "next"
    },
    initialize: function () {
        this.listenTo(this.model, "change", this.render);


    },
    render: function () {
        this.$el.html(Tmpl.question(this.model.attributes));
        return this.$el;

    },

    validate: function () {

        var scoreQ = this.$('input[name=reponse]:checked').val()
        console.log(scoreQ);
        if (scoreQ == "true") {
            $(window).trigger('addScore');
            alert("Bonne réponse !")
        } else {
            alert("Mauvaise réponse :( ")
        };

    },

    next: function() {
        $(".questionsQ", this.$el).hide();
        if (this.$el.next().length == 0) {
            $("#quizzEnd").show();
        } else {
            $(".questionsQ", this.$el.next()).show();
        }

    }

});