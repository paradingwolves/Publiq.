$(document).ready(function (){
    /* Modal Shenanigans */
    $('html').css("overflow-y","hidden");
    $("main").css("opacity","50%");
    $("#myModal").css("opacity", "100%");
    $("#myModal").show();
    $(".btn-close").on('click', function (){
        $("#myModal").hide();
        $('html').css("overflow-y","scroll");
        $("main").css("opacity","100%");
    });
    $("#closeButton").on('click', function (){
        $("#myModal").hide();
        $('html').css("overflow-y","scroll");
        $("main").css("opacity","100%");
    });
    /* END OF Modal Shenanigans */

    /* Location API  Shenanigans */
});
