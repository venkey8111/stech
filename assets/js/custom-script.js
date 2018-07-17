// Custom Script

jQuery(function ($) {
    // Hamburger Toggle
    $(".hamburger").click(function () {
        $(".navigation").toggleClass("open");
    });
    // Hamburger Toggle
    
    // Who we are slider
    $('.whoWeAreSlider #whoWeAreCarousel').carousel({
        interval: 4000
    })

    $('.whoWeAreSlider .carousel .item').each(function () {
        var next = $(this).next();
        if (!next.length) {
            next = $(this).siblings(':first');
        }
        next.children(':first-child').clone().appendTo($(this));

        for (var i = 0; i < 1; i++) {
            next = next.next();
            if (!next.length) {
                next = $(this).siblings(':first');
            }

            next.children(':first-child').clone().appendTo($(this));
        }
    });
// Who we are slider ends
});


// Scroll to top

// ===== Scroll to Top ====

$(window).scroll(function () {
    if ($(this).scrollTop() >= 500) {

        $('#return-to-top').fadeIn(200);

    } else {

        $('#return-to-top').fadeOut(200);

    }

});
$('#return-to-top').click(function () {

    $('body,html').animate({

        scrollTop: 0

    }, 700);

});

	// Scroll to top