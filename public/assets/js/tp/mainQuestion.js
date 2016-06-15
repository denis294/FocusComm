$(function (){



    var questionsQ = new ModelQuestions(questions); //questions

    var v_questions = new ViewQuestions({
        collection: questionsQ
    });
    var domNews = v_questions.render();
    $("#question").append(domNews);


//---------------------------------------------



var score = 0;

var total = questionsQ.length;

$(".messageJuste").hide();
$(".messageFaux").hide();




$(window).on("addScore", function(e) {
    score++;
    console.log(score);
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

    // if (score == total) {
    //     alert("Bravo tu as obtenu un badge !")
    // };
});


$(window).on("getAnswer", function(e) {
    console.log("tareponse");
});




//---------------Badges--------------------------






//     var scoreQ = $('input[name=reponse]:checked').val()
//     console.log(scoreQ);
//         if (scoreQ) {
//         score++;
//     };

//     console.log(score);

//  });






})