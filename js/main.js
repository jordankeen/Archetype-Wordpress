// Document ready
$(document).ready(function () {

    // Tesitimonials Carousel
    $("#quote").owlCarousel({
        navigation: true, //Show next and prev buttons
        slideSpeed: 300,
        paginationSpeed: 400,
        singleItem: true,
        navigation: false

    });

    // Mobile Menu Function
    $("#menu-btn").on("click", function() {
    	$(this).toggleClass('open');
        $('#menu-main-nav').slideToggle(250);
    });

    // Mobile nav reset
    $(window).on('resize', function(){
        // window width
        var windowWidth = $(window).width();
        if(windowWidth > 520){
            // remove inline styling from navigation
            $('#menu-main-nav').removeAttr('style');
            // remove open class 
            $('#menu-btn').removeClass('open');
        }
    });
});