$(function (){

var  url = window.location.pathname.replace(/^\/([^\/]*).*$/, '$1');

console.log(url);

if(url == "") {
    $("#home").addClass("active");
}else {
    $("#"+url).addClass("active");
}

var figure = $(".test").hover( hoverVideo, hideVideo );

});



function hoverVideo(e) { $('video', this).get(0).play(); }
function hideVideo(e) { $('video', this).get(0).pause(); }



