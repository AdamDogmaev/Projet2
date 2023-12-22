<?php get_header(); ?> 

<div class="logocenter">
        <img id="santesenior"src="<?php echo get_template_directory_uri(); ?>/assets/img/logo_texte.svg" alt="logo">
 </div>

<div class="container">
    <div class="contenu">

    <video class="full_video" id="video" autoplay muted loop>
    <source src="<?php echo get_template_directory_uri(); ?>/assets/img/video_accueil.mp4" type="video/mp4">
    </video>
           
      <div class="text_contenu">
            <h3>"Depuis que j'ai découvert SantéSenior, 
                je suis plus attentif à ma santé. 
                Une ressource précieuse pour améliorer votre bien-être!"</h3>
            
            <h2> Pourquoi ne pas vous aussi faire partie de l'aventure?</h2>
            <a class="btn bouton_sec_1"  href="<?php echo home_url('inscription') ?>"> Inscription</a> 
        </div>
    </div>
</div>

<section>

<div class="triplephoto">
    
    <img  src="<?php echo get_template_directory_uri(); ?>/assets/img/altère.jpg" alt="logo" >
    <img  src="<?php echo get_template_directory_uri(); ?>/assets/img/jogging.jpg" alt="logo">
    <img  src="<?php echo get_template_directory_uri(); ?>/assets/img/échauffement.jpg" alt="logo">

    <div class="call_to_action">
        <h1>Découvrez nos exercices</h1>
        <h2>le chemin vers une vie active et épanouissante.</h2>
        <button class="btn" id="bouton_section2" onclick="window.location.href='<?php echo home_url('inscription') ?>'">Inscription</button>
    </div>
</div>

</section>

<section class="image_suivi">


<img class="img_section3" src="<?php echo get_template_directory_uri(); ?>/assets/img/suivi_perso.jpg" alt="logo">

<div class="section3_texte">
<h1>Suivi personnalisé</h1>
    
        <p>Accès illimité à tous les exercices. </p>
        <p>Graphique de suivi sur plusieurs mois.</p>
        <p>Suivez votre progression sur mobile.</p>
    

    <button class="btn" id="bouton_section3" onclick="window.location.href='<?php echo home_url('inscription') ?>'" ?>Inscription</button>

</div>
</section>
<?php get_footer(); ?>