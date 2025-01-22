$(document).ready(function(){
    $("#open-mobile-nav").click(function(){
        $("#navbar").toggleClass("hidden");
    })

    $("#close-mobile-nav").click(function(){
        $("#navbar").toggleClass("hidden");
    })

    $("#info-button").click(function(){
        $("#info-content").toggleClass("hidden");
    })
})