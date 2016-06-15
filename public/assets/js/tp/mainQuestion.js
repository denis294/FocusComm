$(function (){



    var questionsQ = new ModelQuestions(QUESTIONS); //questions

    var v_questions = new ViewQuestions({
        collection: questionsQ
    });
    var domNews = v_questions.render();
    $("#question").append(domNews);


//---------------------------------------------



var score = 0;

var total = questions.length;

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

    if (score == total) {
        alert("Bravo tu as obtenu un badge !")
    };
});


//  var storage_score = new JsonStorage("score");


// storage_score = 0;

// console.log(storage_score);


//---------------------------------------------

// $('.buttonQ').on('click', function() {
// //------affichage questions---------



//     var scoreQ = $('input[name=reponse]:checked').val()
//     console.log(scoreQ);
//         if (scoreQ) {
//         score++;
//     };

//     console.log(score);

//  });






})