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



        if (scoreQ == "true") {
            $(window).trigger('addScore');
            this.$(".messageJuste").show();
            //alert("Bonne réponse !")
        } else {
            $(window).trigger('nope');
            this.$(".messageFaux").show();
            //alert("Mauvaise réponse :( ")
        };

        $(".questionsQ").hide();

        // if (scoreQ=='') {scoreQ=false};
        // $("#form_reponse").append(scoreQ);



    },

    next: function() {

        $(".messageJuste").hide();
        $(".messageFaux").hide();

        $(window).trigger('addID');

        $(".questionsQ", this.$el).hide();
        if (this.$el.next().length == 0) {

            $(window).trigger('end');
        } else {
            $(".questionsQ", this.$el.next()).show();
        }

    }

});