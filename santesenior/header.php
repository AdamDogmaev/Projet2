
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>santesenior</title>
    <link rel="stylesheet" href="style.css">

    <?php wp_head(); ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/img/css/app.css">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>


</head>

<body <?php body_class(); ?>>

  

<?php wp_body_open(); ?>

<header>
    <a class="logo" id="logo-link" href="<?php echo home_url() ?>">
    <img class= "logo" src="<?php echo get_template_directory_uri(); ?>/assets/img/Fichier 3.svg" alt="logo">
    </a>
    <nav class="desktop-nav">
        <a class="rbq" href="<?php echo home_url('dashboard') ?>">Dashboard</a>
        <a class="rbq" href="<?php echo home_url('programme') ?>">Mon programme</a>
        <a class="rbq" href="<?php echo home_url('a_propos') ?>">A propos</a>
        <a class="rbq" id="inscription" href="<?php echo home_url('inscription') ?>">Inscription</a>
        <a class="btn" id="btn_padre" href="<?php echo home_url('connection') ?>"> Connexion</a>
    </nav>

<div id="mySidenav" class="sidenav">
  <a id="closeBtn" href="#" class="close">×</a>
  <ul>
    <li><a href="<?php echo home_url('Dashboard') ?>">Dashboard</a></li>
    <li><a href="<?php echo home_url('Programme') ?>">Mon programme</a></li>
    <li><a href="<?php echo home_url('a_propos') ?>">A propos</a></li>
  </ul>
</div>

<a href="#" id="openBtn">
  <span class="burger-icon">
    <span></span>
    <span></span>
    <span></span>
  </span>
</a>

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

<script>
$(document).ready(function(){
    $("#logo-link").click(function(e){
        e.preventDefault(); 

        $("#logo-link img").addClass("logo-animation");

        setTimeout(function() {
            $("#logo-link img").removeClass("logo-animation");
        }, 500);

        setTimeout(function() {
            window.location.href = $("#logo-link").attr("href");
        }, 1000);
    });
});
</script>

</header>

