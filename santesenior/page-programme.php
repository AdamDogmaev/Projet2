<?php get_header(); ?> 




    <div class="silhouette">

    <div class="sil_para">
      <h1>Bienvenue</h1>
      <h3>Dans votre programme silhouette légère</h3>

    </div>

    </div>


<!-- Slideshow container -->
<div class="slideshow-container">


  <div class="mySlides fade">
    <div class="numbertext">1 / 5</div>
    <div class="intro_prgm">
        <h2> 1. Echauffement</h2>
        <p>Commencez par une marche rapide ou un jogging léger pendant 5 à 10 minutes
             pour augmenter progressivement 
             votre fréquence cardiaque et améliorer la circulation sanguine.
             Cela prépare votre système cardio-respiratoire à l'activité à venir. </p>
             
        <p id="ex_warn">N'oubliez pas de chronométrer au début de chaque séance !</p>
    </div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">2 / 5</div>
    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/ex1.jpg" style="width:100%">
    <img id="prgm_mob_2" src="<?php echo get_template_directory_uri(); ?>/assets/img/ex1_mobile.jpg" style="width:100%">
    
    </div>

  <div class="mySlides fade">
    <div class="numbertext">3 / 5</div>
    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/ex2.jpg" style="width:100%">
    <img id="prgm_mob_3" src="<?php echo get_template_directory_uri(); ?>/assets/img/ex2_mobile.jpg" style="width:100%">
    </div>

  <div class="mySlides fade">
    <div class="numbertext">4 / 5</div>
    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/ex3.jpg" style="width:100%">
    <img id="prgm_mob_4" src="<?php echo get_template_directory_uri(); ?>/assets/img/ex3_mobile.jpg" style="width:100%">

</div> 
  
  <div class="prgm_bravo">
  <div class="mySlides fade ">
    <div class="numbertext">5 / 5</div>
    

    <div class="box_prgm">
        <h2>Bravo!</h2>

        <form class="form_prgm" action="<?php echo home_url('dashboard'); ?>" method="get">
   
        <label for="reussi">Avez-vous réussi à aller jusqu'au bout?</label>
        <select id="reussi" name="reussi" required>
        <option value="oui">Oui</option>
        <option value="non">Non</option>
        </select>

        <label for="temps">En combien de temps avez-vous fini?</label>
        <input type="text" id="temps" name="temps" placeholder="Entrez le temps" required>

        <button class="btn" onclick="window.location.href='<?php echo home_url('dashboard') ?>'">confirmer</button>
        </form>
    </div>
    </div>
</div>

  <!-- Next and previous buttons -->
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<!-- The dots/circles -->
<div style="text-align:center" class="dot_pack">
  <span class="dot" onclick="currentSlide(1)"></span>
  <span class="dot" onclick="currentSlide(2)"></span>
  <span class="dot" onclick="currentSlide(3)"></span>
  <span class="dot" onclick="currentSlide(4)"></span>
  <span class="dot" onclick="currentSlide(5)"></span>  
</div>






<?php get_footer(); ?>