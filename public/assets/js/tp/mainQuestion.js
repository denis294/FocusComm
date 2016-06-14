$(function (){

    var questions = new ModelQuestions(QUESTIONS); //questions

    var v_questions = new ViewQuestions({
        collection: questions
    });
    var domNews = v_questions.render();
    $("#question").append(domNews);


//---------------------------------------------

     // $("#questions form").hide();

     //this.$("#questions form").show();

     // $("#questions form:first-child").show();;


var score = 0;

var total = questions.length;



$(window).on("addScore", function(e) {
    score++;
    console.log(score);
});

$("#affichageScore").hide();


$('#finish').on('click', function() {

    $("#questions").hide();
    $("#finish").hide();

    $("#score").empty();
    $("#score").append(score);
    $("#total").empty();
    $("#total").append(total);
    $("#affichageScore").show();
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