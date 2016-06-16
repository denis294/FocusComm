$(function (){
    var BadgeQ = new ModelBadges(badges); //questions

    var v_badges = new ViewBadges({
        collection: BadgeQ
    });
    var domNews = v_badges.render();
    $("#BadgeQuiz").append(domNews);

//---------------------------------------------


    var v_badgesID = new ViewQuestions({
    collection: BadgeQ
    });

    var tabIdBadgeID_ = v_badgesID.getID();

    $("#idBadgeScred").append(tabIdBadgeID_);

})

//style="display:none"