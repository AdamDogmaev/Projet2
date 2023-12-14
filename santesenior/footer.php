<?php wp_footer(); ?>


<footer>


<div class="container_footer">


<div class="footer_alignement">
    <img class="footer_logo" src="<?php echo get_template_directory_uri(); ?>/assets/img/logo_footer.png" alt="logo du footer">
    
    <div class="align_p1">
        <p class="titre_footer">Contact</p>
        <p>santesenior@gmail.com</p>
        <p>04834545454</p>
    </div>

    <div>
        <p class="titre_footer">Aide</p>
        <p>Mention légale</p>
        <p>Politique de confidentialité</p>
    </div>

    <div>
        <p class="titre_footer">Suivez-nous</p>
        <img class="footer_reseaux" src="<?php echo get_template_directory_uri(); ?>/assets/img/reseaux.png" alt="réseaux sociaux">
    </div>

    </div>

    <img class="footer_design" src="<?php echo get_template_directory_uri(); ?>/assets/img/footer.png" alt="design du footer">

</div>

</footer>


<script>
var sidenav = document.getElementById("mySidenav");
var openBtn = document.getElementById("openBtn");
var closeBtn = document.getElementById("closeBtn");

openBtn.onclick = openNav;
closeBtn.onclick = closeNav;

function openNav() {
  sidenav.classList.add("active");
}

function closeNav() {
  sidenav.classList.remove("active");
}

</script>


<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
    $(document).ready(function () {
        $(window).scroll(function () {
            var scroll = $(window).scrollTop();

            var scrollTrigger = 50;

            if (scroll > scrollTrigger) {
                var opacity = (scroll - scrollTrigger) / (200 - scrollTrigger); 

                $('header').css('background-color','rgba(255,249,228, ' +opacity+ ' )');
            } else {
                $('header').css('background-color', 'rgba(255, 255, 255, 1)');
            }
        }); 
    });
</script>

</body>
</html>