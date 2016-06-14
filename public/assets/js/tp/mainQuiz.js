$(function (){



//------affichage quizs---------

    var quizs = new ModelQuizs(QUIZ);

    var v_quizs = new ViewQuizs({
        collection: quizs
    });


    var domQuizs = v_quizs.render();


    $("#quizozo").append(domQuizs);





//--------initialisation de la page-------

// $("#contenu_quizz").hide()
// $("#questionQuiz").empty()



// //------gestion clique sur liste Quizz--------

// $('.lienCat').on('click', function() {

//             // switchSection("#contenu_quizz");
//             // $("#titreCat").empty();
//             // //alert("cobra");
//             // var idCat = $(this).attr('id');
//             // $("#titreCat").append(idCat);

//              // if ($(this).attr('id')==) {};

//             $('#ListCatQuiz').hide();
//             $('#contenu_quizz').show();
//             $('.ListeQuestions').hide();

//             //  var json = '[{"id":"1","pid":"0","type":"Individual","code":"i","status":"1"},{"id":"2","pid":"0","type":"Group","code":"g","status":"1"},{"id":"15","pid":"0","type":"asdasd","code":"asd","status":"1"},{"id":"16","pid":"0","type":"asdas","code":"asd","status":"1"},{"id":"17","pid":"0","type":"my check","code":"mt","status":"1"}]';
//             // $.each($.parseJSON(json), function() {
//             //     alert(this.id + " " + this.type);
//             // });


//             // var idCat = $(this).attr('id');
//             // console.log(idCat);

//             // var idCatQ = $('.idCategory').attr('id');
//             // console.log(idCatQ);

//             // //quizs.toJSON();
//             // console.log(quizs);

//             //  $.each($.parseJSON(quizs), function(){
//             //     console.log("test")
//             // });





//         //          if ($(section).length == 0) {
//         //              section = "#ListCatQuiz";
//         //          }



         //});



// $('.lienQuiz').on('click', function() {
// //------affichage questions---------

//     var questions = new ModelQuestions(questions);

//     var v_questions = new ViewQuestions({
//         collection: questions
//     });
//     var domNews = v_questions.render();
//     $("#AffichageQuestions").append(domNews);


//     $('#questionQuizz').show();

//  });





//--------fonction-------

// $(window).on("popstate", function(e) {
//                 $("section").hide();
//                 var section = location.hash;
//                 if ($(section).length == 0) {
//                     section = "#ListCatQuiz";
//                 }
//                 $(section).show();
//             });

// $(window).trigger('popstate');

//--------initialisation de la page-------
// $(".listQuiz").hide()

// $(".questionQuiz").hide()


//-----choix categorie

// $('.lienCat').on('click', function() {

//             // switchSection("#contenu_quizz");
//             $("#titreCat").empty();
//             //alert("cobra");
//             var idCat = $(this).attr('id');
//             $("#titreCat").append(idCat);

//             $('#questionQuizz').show();

//         });

// //-----choix du quizz--------

// $('.lienQuiz').on('click', function() {

//             //switchSection("#questionQuizz");
//             //$("#titreCat").empty();
//             var idQuiz = $(this).attr('id');
//             //$("#titreCat").append(idQuiz);
//             console.log(idQuiz);

//             //$(".idpourJS").hide();



//             var idQuestion = $('.idpourJS li:first-child').text();
//             console.log(idQuestion);

//             $(".question").hide();

//             showQuestion(idQuestion);

//         });


// $('#valide').on('click', function() {
//     var idQuestion = $(".question").attr("id");
//     var id= "#"+idQuestion
//     $(id).empty();
//     var idQuestion = $(".question").attr("id");
//     idQuestion++;
//     console.log(idQuestion);
//     showQuestion(idQuestion);


//         });

// $('#continue').on('click', function() {

//    switchSection("#questionQuizz");

// });

// function switchSection(section) {
//     history.pushState(null, null, section);
//     $(window).trigger('popstate');
// }




// function showQuestion(idQuestion) {
//     var id= "#"+idQuestion
//     //console.log(id);
//     $(id).show();
//         // if ($(".question div").attr('id') != idQuestion) {
//         // $(".question div").hide();
//     //};



// }


})