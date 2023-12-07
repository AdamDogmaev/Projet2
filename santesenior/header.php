<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>santesenior</title>
    <link rel="stylesheet" href="style.css">

    <?php wp_head(); ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/img/css/app.css">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
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