<?php

// Traiter le formulaire de connexion

require_once 'config/pdo.php';
require_once 'models/UsersManager.php';
require_once 'models/Users.php';

$manager = new UsersManager($bddPDO);


if (isset($_POST['inscription'])) {
    
    if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['password'])
    && !empty($_POST['name'])
    && !empty($_POST['email'])
    && !empty($_POST['password'])) {

        $User = new Users(
            [
                'name' => $_POST['name'],
                'email' => $_POST['email'],
                'password' => $_POST['password']
            ]
            );

        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        
        if (!$manager->findbyEmail($email)) {
            $manager->insert($User);
            echo '<div class="alert alert-success" role="alert">
            Votre compte a bien été crée. Rendez-vous sur Login pour vous connecter.
            </div>';
        } elseif ($manager->findbyEmail($email)) {
            echo'<div class="alert alert-danger" role="alert">
            Cette adresse email existe dejà.
            </div>';
            }
    
    } else {
        echo '<div class="alert alert-danger" role="alert">
        L\'adresse email n\'est pas au bon format.
        </div>';
        }

    } else echo'<div class="alert alert-danger" role="alert">
    Veuillez remplir tous les champs.
    </div>';

}

$template = 'signin';
