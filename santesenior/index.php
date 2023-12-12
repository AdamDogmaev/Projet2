<?php get_header(); ?> 

<section class="prm_acc">
    <div class="logocenter">
<img id="santesenior"src="<?php echo get_template_directory_uri(); ?>/assets/img/logo_texte.svg" alt="logo">
</div>

<img id="accueil"src="<?php echo get_template_directory_uri(); ?>/assets/img/accueil.svg" alt="logo" classe="img-fluid">

</section>

<section>

<div class="triplephoto">
    
    <img  src="<?php echo get_template_directory_uri(); ?>/assets/img/altère.jpg" alt="logo" >
    <img  src="<?php echo get_template_directory_uri(); ?>/assets/img/jogging.jpg" alt="logo">
    <img  src="<?php echo get_template_directory_uri(); ?>/assets/img/échauffement.jpg" alt="logo">

    <div class="call_to_action">
        <p  id="titre_section2">Découvrez nos exercices</p>
        <p  id="phrase_section2">le chemin vers une vie active et épanouissante.</p>
        <button class="btn" id="bouton_section2">Connexion</button>
    </div>
</div>

</section>

<section>

<img class="img_section3" src="<?php echo get_template_directory_uri(); ?>/assets/img/suivi_perso.jpg" alt="logo">
<div class="section3">
    <ul>Suivi personnalisé
        <li>Accès illimité à tous les exercices. </li>
        <li>Graphique de suivi sur plusieurs mois.</li>
        <li>Suivez directement votre progression sur mobile à tout moment.</li>
    </ul>
</div>
</section>
<?php get_footer(); ?>