<?php get_header(); ?> 



    <h2 class="title_quiz">Formulaire de suivi</h2>

    <form class="form_quiz" action="<?php echo home_url('programme'); ?>" method="get">

        <fieldset>
            <legend>Question 1 :</legend>
            <p>Qui êtes vous ?</p>
            <input type="radio" id="q1_option1" name="q1" value="Homme">
            <label for="q1_option1">Homme</label>
            <input type="radio" id="q1_option2" name="q1" value="Femme">
            <label for="q1_option2">Femme</label>
            <input type="radio" id="q1_option3" name="q1" value="Autre">
            <label for="q1_option3">Autre</label>
        </fieldset>

        <fieldset>
            <legend>Question 2 :</legend>
            <p>Quel est votre poid actuel ?</p>
            <input type="poids en kg"
                    id="poids en kg"
                    name="poids en kg"
                    placeholder="En kg"/>
        </fieldset>

        <fieldset>
            <legend>Question 3 :</legend>
            <p>Comment se déroulent généralement vos journées ?</p>
            <select id="q3" name="q3">
                <option value="premier">assis ou couché toute la journée</option>
                <option value="deuxieme">je marche et bouge régulièrement</option>
                <option value="troisieme">je suis toujours en mouvement</option>
            </select>
        </fieldset>  
        
        <fieldset>
            <legend>Question 4 :</legend>
            <p>Quel est votre objectif ?</p>
            <select id="q3" name="q3">
                <option value="Premier">Perdre du poids</option>
                <option value="deuxieme">Gagner du poids</option>
                <option value="troisieme">Maintenir la forme</option>
            </select>
        </fieldset>

        
        <button  class="btn" onclick="window.location.href='<?php echo home_url('programme') ?>'"> Confirmer</button>
    </form>


<?php get_footer(); ?>