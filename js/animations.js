$(document).ready(function(){
    $(".animated-nav").addClass("animated slideDown"); // Add slideDown class on page load
});
$(document).ready(function(){
    // Smooth scroll animation
    $('a[href^="#"]').on('click', function(event) {
        event.preventDefault();

        $('html, body').animate({
            scrollTop: $($.attr(this, 'href')).offset().top
        }, 500);
    });
});
