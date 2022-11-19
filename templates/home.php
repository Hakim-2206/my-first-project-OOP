<h1>Welcome to the Museum Car</h1>

<!-- Affichage du nom de l'utilisateur si il est connecté, affichage d'un alerte
    puis lien direct vers la page d'ajout de véhicule, en fonction du statut -->

<?php if ($user = getLogged()) : ?>

    <h2 id="namepage">Hello, <?= ucfirst($user['name']) ?>. Tu peux
    <a href="index.php?page=cars" class="addcars">ajouter</a> un véhicule au musée</h2>

<?php endif; ?>

<?php
if ($_SESSION) {
    echo '<div class="alert alert-primary" role="alert" style="display:block;">
    Vous êtes connecté!
    </div>';
} else {
    echo'<div class="alert alert-secondary" role="alert" style="display:block;">
    Vous êtes deconnecté
    </div>';
}