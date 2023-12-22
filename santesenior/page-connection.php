<?php get_header(); ?> 

<section class="form_cont" id="form_cont_co">
    <div id="titre_co">
    <h2>Heureux de vous revoir!</h2>
    </div>
<div id="form_color">

    <div class="form_co">

      <form action="<?php echo home_url('dashboard'); ?>" method="get">

        <div class="main-user-co">
            
          <div class="user-input-box-co">
            <label for="email">Email</label>
            <input type="email"
                    id="email"
                    name="email"
                    placeholder="Entrez votre  adresse mail"/>
          </div>
          <div class="user-input-box-co">
            <label for="Mot de passe">Mot de passe</label>
            <input type="password"
                    id="Mot de passe"
                    name="Mot de passe"
                    placeholder="Entrez votre Mot de passe"/>
          </div>
        </div>

        <div class="co_form">
            <div id="co_form_text"><a href="<?php echo home_url('inscription') ?>">Je n'ai pas encore de compte</a></div>
            <div id="co_form_btn"><button class="btn" href="<?php echo home_url('dashboard') ?>">Confirmer</button></div>
        </div>
          
        </div>
        
        
      </form>
    </div>  
    <img class="img_co" src="<?php echo get_template_directory_uri(); ?>/assets/img/connection.png" alt="inscription">


    </div>

    
</section>
<?php get_footer(); ?>
