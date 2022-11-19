<?php

// Traiter le formulaire d'inscription

$template = 'login';


require 'config/pdo.php';
require 'models/Users.php';
require 'models/UsersManager.php';


$manager = new UsersManager($bddPDO);


if (isset($_POST['connexion'])) {
    
    if (isset($_POST['email']) && isset($_POST['password'])
    && !empty($_POST['email'])
    && !empty($_POST['password'])) {
        
        $email = $_POST['email'];
        $password = $_POST['password'];

        if ($manager->findbyEmail($email)) {
            $user = $manager->findbyEmail($email);
            
            if (password_verify($_POST['password'], $user['password'])) {
                $User = new Users(
                    [
                        'email' => $_POST['email'],
                        'password' => $_POST['password']
                    ]
                    );
                    

                    $_SESSION['User'] =
                    [
                        'name' => $user['name'],
                        'email' => $user['email'],
                        'admin' => $user['is_admin']
                    ];
                    header('Location:index.php');

            } else  echo '<div class="alert alert-danger" role="alert">
            Email ou mot de passe incorrect.
            </div>';
        } else  echo '<div class="alert alert-danger" role="alert">
                Email ou mot de passe incorrect.
                </div>';
    } else echo '<div class="alert alert-danger" role="alert">
    Veuillez remplir tous les champs.
    </div>';
}