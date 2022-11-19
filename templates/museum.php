<h1>Museum</h1>

<div class="carte">

<?php

// Affichage des véhicules presents dans la base de données, puis redirection vers un site en fonction du véhicule

foreach ($Vehicule as $value) : ?>
    <div class="card text-white bg-dark mb-3" style="width: 18rem;">
        <img src="public/img/<?= $value['picture'] ?>" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Marque : <span class='card-caract'><?= ucfirst($value['marque']) ?></span></h5>
            <h5 class="card-title">Model : <span class='card-caract'><?= ucfirst($value['model']) ?></span></h5>
            <h5 class="card-title">Année : <span class='card-caract'><?= ucfirst($value['annee']) ?></span></h5>
            <h5 class="card-title">Moteur : <span class='card-caract'><?= ucfirst($value['moteur']) ?></span></h5>
            <h5 class="card-title">Places : <span class='card-caract'><?= ucfirst($value['places']) ?></span></h5>
            <h6>Commentaires : <span class='card-caract'><?= ucfirst($value['commentaires']) ?></span></h6>
            
            
        </div>
        <div class="card-body">
            <a href="https://www.<?= $value['marque']?>.fr" class="card-link" target="_blank">See More</a>
        </div>
    </div>
<?php endforeach; ?>

</div>





