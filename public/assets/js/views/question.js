var ViewQuestion = Pclia.View.extend({
    events: {
        "click .buttonQ": "validate",
        // "click #continue": "next",
        "click .GetMessage": "next"

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
        $(window).trigger('getAnswer');
        if (scoreQ == "true") {
            $(window).trigger('addScore');
            this.$(".messageJuste").show();
            //alert("Bonne réponse !")
        } else {
            this.$(".messageFaux").show();
            //alert("Mauvaise réponse :( ")
        };
        $(".questionsQ").hide();

    },

    next: function() {

        $(".messageJuste").hide();
        $(".messageFaux").hide();

        $(".questionsQ", this.$el).hide();
        if (this.$el.next().length == 0) {

            $(window).trigger('end');
        } else {
            $(".questionsQ", this.$el.next()).show();
        }

    }

});