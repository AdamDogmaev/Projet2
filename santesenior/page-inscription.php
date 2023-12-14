<?php get_header(); ?> 


<section class="form_cont">
<div id="form_color">
    <div class="form">

      <form action="#">

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
            <div id="text_val"><a href="#">J'ai déjâ un compte</a></div>
            <div id="btn_val"><button class="btn" id="bouton_insc">Inscription</button></div>
        </div>
          
        </div>
        
        
      </form>
    </div>  
    <img class="img_insc" src="<?php echo get_template_directory_uri(); ?>/assets/img/inscription.png" alt="inscription">


    </div>

    
</section>

<?php get_footer(); ?>

