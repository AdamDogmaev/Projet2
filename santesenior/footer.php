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
        <a href="<?php echo home_url('mention') ?>"><p>Mention légale</p></a>
        <a href="<?php echo home_url('mention') ?>"><p>Politique de confidentialité</p></a>
    </div>

    <div>
        <p class="titre_footer">Suivez-nous</p>
        <img class="footer_reseaux" src="<?php echo get_template_directory_uri(); ?>/assets/img/reseaux.png" alt="réseaux sociaux">
    </div>

    </div>

    <img class="footer_design" src="<?php echo get_template_directory_uri(); ?>/assets/img/footer.png" alt="design du footer">

</div>

</footer>





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


<script>
    function redirectToAftInscription() {
        window.location.href = 'http://localhost/wordpress/aft_inscription/';
    }

    document.getElementById('bouton_insc').addEventListener('click', redirectToAftInscription);
</script>
<script>
    function redirectToFormulaire() {
        window.location.href = 'http://localhost/wordpress/Formulaire/';
    }

    document.getElementById('aft_btn').addEventListener('click', redirectToFormulaire);
</script>



<script>
let slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";

  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";

  dots[slideIndex-1].className += " active";

  if (slideIndex === 5) {
        document.body.style.backgroundColor = "#FFCF02";
    }
    
    
    if (slideIndex === 4) {
        document.body.style.backgroundColor = "#FFFFFF";
    } if (slideIndex === 3) {
        document.body.style.backgroundColor = "#FFFFFF";
    } if (slideIndex === 2) {
        document.body.style.backgroundColor = "#FFFFFF";
    } if (slideIndex === 1) {
        document.body.style.backgroundColor = "#FFFFFF";
    }
}

</script>



</body>
</html>

