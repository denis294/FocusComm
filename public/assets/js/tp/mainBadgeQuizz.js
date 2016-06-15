$(function (){
    var BadgeQ = new ModelBadges(badges); //questions

    var v_badges = new ViewBadges({
        collection: BadgeQ
    });
    var domNews = v_badges.render();
    $("#BadgeQuiz").append(domNews);

})