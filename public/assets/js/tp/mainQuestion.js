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
    // var IdR = this.$(".reponse").attr("id");
    // console.log(IdR);
    // tabIDReponse.push(IdR);
});

$(window).on("nope", function(e) {
    var rep = false;
    tabReponse.push(rep);
    // var IdR = this.$(".reponse").attr("id");
    // console.log(IdR);
    // tabIDReponse.push(IdR);
});

$("#affichageScore").hide();
$("#affichageScorePasLoge").hide();
$("#affichageScoreDejaBadge").hide();






$(window).on('end', function() {




    $("#questions").hide();
    $("#finish").hide();

    //$("#quizzEnd").show();

    $("#score").empty();
    $(".score").append(score);
    $("#total").empty();
    $(".total").append(total);


    //$("#affichageScore").show();


    sendDonnees();


});




var tabReponse = [];
// var tabIDReponse = [];

    var IDQ = $("#IdQuizzScred").text();



//---------------données--------------------------


function sendDonnees() {



    var BadgeID = $("#idBadgeScred").text();

        var tab = [tabIdQuestion,tabReponse,BadgeID];

        // var serv = jQuery.ajax({
        //             dataType: "json",
        //             type: "POST",
        //             url: "/quizzs/"+IDQ,
        //             data: { tab: tab }
        //         }).done(function( msg ) {
        //             alert( "Data Saved: ");
        //         });




            var data = jQuery.ajax({
                    type: "POST",
                    dataType: "json",
                    url: "/quizzs/"+IDQ,
                    data: { tab: tab},
                    success:function(data){
                       if(data.login != null){
                        $("#affichageScorePasLoge").show();
                       }
                       if(data.badge != null){
                        $("#affichageScoreDejaBadge").show();
                       }
                        if(data.quizz != null){
                             $("#affichageScore").show();
                        }
                    },
                });



     //    if (login==true) {
     //        if (hasbadge==true) {
     //            $("#affichageScoreDejaBadge").show();
     //        }else{
     //            $("#affichageScore").show();
     //        }
     //    }else{
     //        $("#affichageScorePasLoge").show();
     // };



         // $.getJSON( "/quizzs/"+IDQ, {"responseText": login}, function( data ) {
         //        console.log(data);
         //            });


// var reponse = '';

// $.getJSON(urlAjax,{param},success);
// alert(reponse);

//...

// function success(data, textStatus, jqXHR)
// {
//     if (data.erreur == 'ok')
//     {
//         reponse = data.rep;
//         alert(reponse);
//     }
//     else
//     {
//         alert(data.erreur);
//     }
// }












                 //console.log(log);



     //    var login = true;
     //    var hasbadge=false;








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