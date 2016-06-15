var tmplQuestion;
var tmplRep;

$(function (){

var cmptTitre =1;
var cmptQuestion = 0;
var cmptRep =2;

var tmplQuestion = $(".question").clone();
var tmplRep = $(".rep").clone();

$(".titleQuestion").append(" " +cmptTitre);


$("#boutonAjouterQuestion").on("click",function(){
 cmptTitre++;
 cmptQuestion++;
 var tmpl = tmplQuestion.clone();

 $(".BoutonAjtR",tmpl).attr("id","boutonAjouterReponse" +cmptTitre);
 $(".BoutonAjtR",tmpl).addClass("boutonAjouterReponse");
 $(".BoutonAjtR",tmpl).attr("data-cmptTitre", cmptTitre);

 //-- set les name des question---
 $(".text_Question",tmpl).attr("name","question["+cmptQuestion+"][texte]");
 $(".illustration_Question",tmpl).attr("name","question["+cmptQuestion+"][illustration]");
 $(".reponse1",tmpl).attr("name","question["+cmptQuestion+"][reponse][0][texte]");
 $(".reponse1Juste",tmpl).attr("name","question["+cmptQuestion+"][reponse][0][estJuste]");
 $(".reponse2",tmpl).attr("name","question["+cmptQuestion+"][reponse][1][texte]");
 $(".reponse2Fausse",tmpl).attr("name","question["+cmptQuestion+"][reponse][1][estJuste]");
 $(".txtJuste",tmpl).attr("name","question["+cmptQuestion+"][texteJuste]");
 $(".txtFaux",tmpl).attr("name","question["+cmptQuestion+"][texteJuste]");
//---fin----------

 $(".BoutonAjtR",tmpl).addClass("btn-floating btn-large waves-effect waves-light green");
 $("#espace",tmpl).attr("class","EspaceDispo" +cmptTitre);
 $(".titleQuestion",tmpl).attr("id","tq" +cmptTitre);
 $(".titleQuestion",tmpl).append(" " +cmptTitre);
 $(".qList").append(tmpl);
 cmptRep =2;
 });

$(".qList").on("click",".boutonAjouterReponse",function(){
	var cmptTitre= $(this).attr("data-cmptTitre");
	console.log("test");
	var RepTmpl = tmplRep.clone();
	$(".EspaceDispo"+cmptTitre).append(RepTmpl);
	$(".tmpl",RepTmpl).attr("name","question["+cmptQuestion+"][reponse]["+cmptRep+"][texte]");
	$(".cachetmpl",RepTmpl).attr("name","question["+cmptQuestion+"][reponse]["+cmptRep+"][texte][estJuste]");
 	cmptRep ++;
 });


//------vues des quiz de partner -----------------
    var quizsPart = new ModelQuizsPart(QUIZSPART);
    var v_quizsPart = new ViewQuizsPart({
        collection: quizsPart
    });

    var dom = v_quizsPart.render();
    $("#quizList").append(dom);

});








