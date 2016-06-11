$(function(){
    
    $(".fondnoir").hide();
    $(".actualite").hide();
    // Initialize collapse button
    $(".card-action a").on("click", function(){
        $(".fondnoir").fadeIn();
        $(".actualite").fadeIn();
    });
    $(".fondnoir").on("click", function(){
        $(".fondnoir").fadeOut();
        $(".actualite").fadeOut();
    });
});
    