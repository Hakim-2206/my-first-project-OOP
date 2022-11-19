<?php

// Traitement du formulaire d'ajout de Véhicule, vérifier qu'il ne comporte pas d'erreur.


$template = 'cars';



require_once 'config/pdo.php';
require_once 'models/Vehicules.php';
require_once 'models/VehiculesManager.php';

$vehiculesManager = new VehiculesManager($bddPDO);

if (isset($_POST['cars'])) {
    
        if (!empty($_POST['marque'])
        && !empty($_POST['model'])
        && !empty($_POST['year'])
        && !empty($_POST['engine'])
        && !empty($_POST['places'])
        && !empty($_FILES['picture'])
        ) {
            if ($_POST['year'] > 1884 && $_POST['year'] < 2024) {

                $model = $_POST['model'];
                $marque = $_POST['marque'];
                $annee = $_POST['year'];
                
                
                    $extAllowed = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "png" => "image/png");
                    $ext = pathinfo($_FILES["picture"]['name'], PATHINFO_EXTENSION);

                    if (!$vehiculesManager->findbyModel($model, $annee)) {
            
                    
                        if (array_key_exists($ext, $extAllowed)) {
                        // Save file on server
                        move_uploaded_file($_FILES["picture"]["tmp_name"], "public/img/" . $_FILES["picture"]['name']);

                            $Vehicule = new Vehicules(
                        [
                            'marque' => $_POST['marque'],
                            'model' => $_POST['model'],
                            'annee' => $_POST['year'],
                            'moteur' => $_POST['engine'],
                            'places' => $_POST['places'],
                            'picture' => $_FILES['picture'],
                            'commentaires' => $_POST['comms']

                        ]
                        );
                
                            $vehiculesManager->insert($Vehicule);
                            echo '<div class="alert alert-success" role="alert">
                            Votre véhicule a bien été ajouté
                            </div>';

                } else echo '<div class="alert alert-danger" role="alert">
                Merci de choisir une photo au format suivant : png, jpg, jpeg
                </div>';

            } else echo '<div class="alert alert-danger" role="alert">
            Ce véhicule est dejà present au musée.
            </div>';

        } else echo '<div class="alert alert-danger" role="alert">
        Votre formulaire contient des erreurs.
        </div>';

    } else echo '<div class="alert alert-danger" role="alert">
    Votre formulaire n\'est pas assez complet.
    </div>';

} else echo '<div class="alert alert-danger" role="alert">
Votre formulaire n\'est pas assez complet.
</div>';