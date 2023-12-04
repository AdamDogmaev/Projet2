<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>santesenior</title>
    <link rel="stylesheet" href="style.css">

    <?php wp_head(); ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets\img/css/app.css">
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header>
    <img class= "logo"src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="logo">

    <nav>
        <a class="rbq" href="#">Dashboard</a>
        <a class="rbq" href="#">Mon programme</a>
        <a class="rbq" href="#">A propos</a>
    </nav>
    <button class="btn">Inscription</button>
    <button class="btn">Connexion</button>
</header>