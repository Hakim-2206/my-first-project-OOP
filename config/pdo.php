<?php 

// Fichier servant de connexion à la base de données


$user = 'root';
$pass = '';

$bddPDO = new PDO('mysql:host=localhost;dbname=site_vehicule;charset=utf8', $user, $pass);
$bddPDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
