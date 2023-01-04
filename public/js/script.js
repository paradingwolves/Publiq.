$(document).ready(function (){
    /* Opening Modal Shenanigans */
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
    /* END OF Opening Modal Shenanigans */

    /* Hours Modal */
    
    $("a.hoursLink").click(function(event) {
        event.preventDefault();
        $("#hoursModal").show();
        $(".btn-close2").on('click', function (){
            $("#hoursModal").hide();
            $('html').css("overflow-y","scroll");
            $("main").css("opacity","100%");
        });
        $("#closeButton2").on('click', function (){
            $("#hoursModal").hide();
            $('html').css("overflow-y","scroll");
            $("main").css("opacity","100%");
        });
    })
    

    /* Location API  Shenanigans */
});
