<?php
    include 'header.php';
?>

<section class="benefits">
    <h2>Why Learn Python?</h2>
    <div class="benefit" id="benefit1">
        <img src="images/python.png" alt="Easy to Learn">
        <h3>Easy to Learn</h3>
        <p>Python has a simple and intuitive syntax which makes it a great language for beginners.</p>
    </div>
    <div class="benefit" id="benefit2">
        <img src="images/python.png" alt="Versatile">
        <h3>Versatile</h3>
        <p>Python is widely used in various domains such as web development, data analysis, AI, and more.</p>
    </div>
    <div class="benefit" id="benefit3">
        <img src="images/python.png" alt="Active Community">
        <h3>Active Community</h3>
        <p>The Python community is vibrant, providing support and resources for learners and developers.</p>
    </div>
</section>

<script>
    $(document).ready(function(){
        $(".benefit").mouseenter(function(){
            $(this).addClass("animated pulse");
        });
        $(".benefit").mouseleave(function(){
            $(this).removeClass("animated pulse");
        });
    });
</script>

<?php
    include 'footer.php';
?>
