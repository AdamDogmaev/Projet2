<?php get_header(); ?> 



    <h2 class="title_quiz">Formulaire de suivi</h2>

    <form class="form_quiz" action="traitement.php" method="post">

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
            <input type="poid en kg"
                    id="poid en kg"
                    name="poid en kg"
                    placeholder="En kg"/>
        </fieldset>

        <fieldset>
            <legend>Question 3 :</legend>
            <p>Comment se déroulent généralement vos journées ?</p>
            <select id="q3" name="q3">
                <option value="Pomme">assis ou couché toute la journée</option>
                <option value="Banane">je marche et bouge régulièrement</option>
                <option value="Orange">je suis toujours en mouvement</option>
            </select>
        </fieldset>  
        
        <fieldset>
            <legend>Question 4 :</legend>
            <p>Quel est votre objectif ?</p>
            <select id="q3" name="q3">
                <option value="Pomme">Perdre du poid</option>
                <option value="Banane">Gagner du poid</option>
                <option value="Orange">Maintenir la forme</option>
            </select>
        </fieldset>

        
        <input type="submit" value="Soumettre">
    </form>


<?php get_footer(); ?>