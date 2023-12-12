<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>santesenior</title>
    <link rel="stylesheet" href="style.css">

    <?php wp_head(); ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/img/css/app.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>

</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header>
    <img class= "logo"src="<?php echo get_template_directory_uri(); ?>/assets/img/Fichier 3.svg" alt="logo">

    <nav class="desktop-nav">
        <a class="rbq" href="#">Dashboard</a>
        <a class="rbq" href="#">Mon programme</a>
        <a class="rbq" href="#">A propos</a>
        <a class="rbq" id="inscription">Inscription</a>
        <button class="btn">Connexion</button>
</nav>

<div class="menu-toggle" id="mobile-menu">&#9776;</div>


        <nav class="mobile-nav">
            <a href="#">Accueil</a>
            <a href="#">Services</a>
            <a href="#">Contact</a>
        </nav>
</header>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const mobileMenuToggle = document.getElementById('mobile-menu');
        const mobileNav = document.querySelector('.mobile-nav'); 

        mobileMenuToggle.addEventListener('click', function () {
            mobileNav.classList.toggle('show');
        });
    });
</script>

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
    $(document).ready(function () {
        $(window).scroll(function () {
            var scroll = $(window).scrollTop();

            // Ajustez la valeur selon le point où vous voulez que le fondu commence
            var scrollTrigger = 50;

            if (scroll > scrollTrigger) {
                // Calcul de l'opacité en fonction du défilement
                var opacity = (scroll - scrollTrigger) / (200 - scrollTrigger); // Ajustez la valeur pour le fondu désiré

                // Affecter la nouvelle couleur de fond avec l'opacité
                $('header').css('background-color','rgba(255,249,228, ' +opacity+ ' )');
            } else {
                // Si en haut de la page, la couleur est blanche
                $('header').css('background-color', 'rgba(255, 255, 255, 1)');
            }
        }); 
    });
</script>
