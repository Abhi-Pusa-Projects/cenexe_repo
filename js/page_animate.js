
$(document).ready(function() {
    $(".jumper").on("click", function( e ) {

        e.preventDefault();
        var new_body= $($(this).attr('href')).offset().top;//$( $(this).attr('href') ).offset().top();
        console.log(new_body);
        $("body, html").animate({
            scrollTop: new_body
        }, 600);

    });
})

$(window).load(function() {
	$(".loader").fadeOut("slow");
})
