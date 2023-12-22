<?php get_header(); ?> 


<section class="form_cont">
    <div id="titre_insc">
    <h2>Inscription</h2>
    <h3 id="titre_insc_h3"> - Le début d'un grand changement!</h3>
    </div>
<div id="form_color">
    
    <div class="form">

      <form action="<?php echo home_url('aft_inscription'); ?>" method="get">

        <div class="main-user-info">
            
          <div class="user-input-box">
            <label for="Nom">Nom</label>
            <input type="text"
                    id="Nom"
                    name="Nom"
                    placeholder="Entrez votre nom"/>
          </div>
          <div class="user-input-box">
            <label for="Prénom">Prénom</label>
            <input type="text"
                    id="Prénom"
                    name="Prénom"
                    placeholder="Entrez votre prénom"/>
          </div>
          <div class="user-input-box">
            <label for="email">Email</label>
            <input type="email"
                    id="email"
                    name="email"
                    placeholder="Entrez votre  adresse mail"/>
          </div>
          <div class="user-input-box">
            <label for="Numéro de téléphone">Numéro de téléphone</label>
            <input type="text"
                    id="Numéro de téléphone"
                    name="Numéro de téléphone"
                    placeholder="Entrez votre Numéro de téléphone"/>
          </div>
          <div class="user-input-box">
            <label for="Mot de passe">Mot de passe</label>
            <input type="password"
                    id="Mot de passe"
                    name="Mot de passe"
                    placeholder="Entrez votre Mot de passe"/>
          </div>
          <div class="user-input-box">
            <label for="Confirmez votre mot de passe">Confirmez votre mot de passe</label>
            <input type="password"
                    id="Confirmez votre mot de passe"
                    name="Confirmez votre mot de passe"
                    placeholder="Confirmez votre mot de passe"/>
          </div>
        </div>

        <div class="form_val">
            <div id="text_val"><a href="<?php echo home_url('connection') ?>">J'ai déjà un compte</a></div>

            <button class="btn" id="bouton_insc" onclick="window.location.href='<?php echo home_url('aft_inscription') ?>'">Confirmer</button>      

        </div>
        </div>
          
        </div>
        
        
      </form>
    </div>  
    <img class="img_insc" src="<?php echo get_template_directory_uri(); ?>/assets/img/inscription.png" alt="inscription">


    </div>

    
</section>

<?php get_footer(); ?>

