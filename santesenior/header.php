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
<body class="page-id-12">

<?php wp_body_open(); ?>

<header>
    <img class= "logo"src="<?php echo get_template_directory_uri(); ?>/assets/img/Fichier 3.svg" alt="logo">

    <nav class="desktop-nav">
        <a class="rbq" href="#">Dashboard</a>
        <a class="rbq" href="#">Mon programme</a>
        <a class="rbq" href="#">A propos</a>
        <a class="rbq" id="inscription" href="">Inscription</a>
        <button class="btn" href="">Connexion</button>
    </nav>

<div id="mySidenav" class="sidenav">
  <a id="closeBtn" href="#" class="close">×</a>
  <ul>
    <li><a href="#">Dashboard</a></li>
    <li><a href="#">Mon programme</a></li>
    <li><a href="#">A propos</a></li>
  </ul>
</div>

<a href="#" id="openBtn">
  <span class="burger-icon">
    <span></span>
    <span></span>
    <span></span>
  </span>
</a>

</header>




