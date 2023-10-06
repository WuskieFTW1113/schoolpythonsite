<script>
    $(document).ready(function(){
        // Smooth scroll animation
        $('a[href^="#"]').on('click', function(event) {
            event.preventDefault();

            $('html, body').animate({
                scrollTop: $($.attr(this, 'href')).offset().top
            }, 500);
        });
    });
</script>
