$(function (){



    var questionsQ = new ModelQuestions(questions); //questions

    var v_questions = new ViewQuestions({
        collection: questionsQ
    });
    var domNews = v_questions.render();
    $("#question").append(domNews);


//---------------------------------------------


    var v_questionsID = new ViewQuestions({
    collection: questionsQ
    });

    var tabIdQuestion = v_questionsID.getID();







 //url: /quizzs/id
    //id reponse
    //valeur reponse
    //id badge







    // console.log(id);
    // // $("#form_id").append(id);
    //  $(window).trigger('addID');





//---------------------------------------------



var score = 0;

var total = questionsQ.length;

// for (i = 0; i < total; i++) {

// }

$(".messageJuste").hide();
$(".messageFaux").hide();




$(window).on("addScore", function(e) {
    score++;
    var rep = true;
    tabReponse.push(rep);
});

$(window).on("nope", function(e) {
    var rep = false;
    tabReponse.push(rep);
});

$("#affichageScore").hide();


$(window).on('end', function() {



    $("#questions").hide();
    $("#finish").hide();

    $("#quizzEnd").show();

    $("#score").empty();
    $("#score").append(score);
    $("#total").empty();
    $("#total").append(total);
    $("#affichageScore").show();

    sendDonnees();

    // if (score == total) {
    //     alert("Bravo tu as obtenu un badge !")
    // };
});

// $(window).on("addID", function() {

//     console.log("sida");

//     var Id = $(".infoQuiz").attr('id');
//     console.log(Id);

//     tabIdQuestion.push(Id);


// });

// $(window).on("getAnswer", function(e) {
//     this.$('')
// });



var tabReponse = [];

    var IDQ = $("#IdQuizzScred").text();



//---------------données--------------------------


function sendDonnees() {


    var BadgeID = $("#idBadgeScred").text();

        var tab = [tabIdQuestion,tabReponse,BadgeID];

        jQuery.ajax({
                    type: "POST",
                    url: "/quizzs/"+IDQ,
                    data: { tab: tab }
                }).done(function( msg ) {
                    alert( "Data Saved: ");
                });

}

 //url: /quizzs/id
    //id reponse
    //valeur reponse
    //id badge







//     var scoreQ = $('input[name=reponse]:checked').val()
//     console.log(scoreQ);
//         if (scoreQ) {
//         score++;
//     };

//     console.log(score);

//  });






})