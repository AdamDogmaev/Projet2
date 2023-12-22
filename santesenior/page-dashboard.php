<?php get_header(); ?>
<div class=" dash_titre">
        <h2>Données</h2>
    </div>

<div class="container-fluid boite_dash">
  <div class="row sous_boite">
   
    <div class=" dash_gauche">
      <h2>Dashboard</h2>
      <ul>
        <li><a href="page1.html">Données</a></li>
        <li><a href="page2.html">Calendrier</a></li>
        <li><a href="page3.html">Paramétre</a></li>
      </ul>
    </div>

    <!-- Div pour le graphique -->
    <div class="col-md-4 dash_centre">
      <h2>Graphique</h2>
      <div class="graph_dash">
      </div>
    </div>

    <!-- Div pour le contenu à droite -->
    <div class="col-md-4 dash_droite">
      <h2>Statistique</h2>
      <div class="stat_dash">
      </div>
    </div>
  </div>
</div>


<div class="popup" id="myPopup">
        <div class="popup-content">
            <!-- Contenu de votre popup -->
            <h2>Travaux en cours !</h2>
            <p>Votre tableau de bord est actuellement en cours de maintenance. Nous travaillons rapidement pour résoudre cela. Merci de votre compréhension !</p>

            <!-- Bouton pour fermer le popup -->
            <button id="closePopupBtn">Fermer</button>
        </div>
    </div>


<script>
    document.addEventListener('DOMContentLoaded', function () {
    var myPopup = document.getElementById('myPopup');

    // Afficher le popup automatiquement
    myPopup.style.display = 'flex';

    // Bouton pour fermer le popup
    var closePopupBtn = document.getElementById('closePopupBtn');
    closePopupBtn.addEventListener('click', function () {
        myPopup.style.display = 'none';
    });
});

</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<?php get_footer(); ?>
