<?php

// Appel du fichier 'config/pdo.php' servant de connexion à la base de données
require_once 'config/pdo.php';


//Creation de classe VehiculeManager afin de gérer les vehicules

class VehiculesManager
{
    private $bddPDO;

    public function __construct(PDO $bddPDO)
    {
        $this->bddPDO = $bddPDO;
    }
    // Fonction pour ajouter un vehicule à la base de données

    public function insert(Vehicules $Vehicule)
    {

        $query = $this->bddPDO->prepare('INSERT INTO vehicules
        (marque, model, annee, moteur, places, commentaires, picture)
        VALUES (:marque, :model, :annee, :moteur, :places, :commentaires, :picture)');
        $query->bindValue(':marque', $Vehicule->getMarque());
        $query->bindValue(':model', $Vehicule->getModel());
        $query->bindValue(':annee', $Vehicule->getAnnee());
        $query->bindValue(':moteur', $Vehicule->getMoteur());
        $query->bindValue(':places', $Vehicule->getPlaces());
        $query->bindValue(':commentaires', $Vehicule->getCommentaires());
        $query->bindValue(':picture', $_FILES["picture"]['name']);
        $query->execute();
    }
    // Fonction pour supprimer le véhicule de la base de données

    public function delete($id)
    {
        $query = $this->bddPDO->exec('DELETE FROM vehicules WHERE id ='.(int)$id);
    }

    public function getAll()
    {
        $query = $this->bddPDO->prepare('SELECT * FROM vehicules');
        $query->execute();
        $Vehicule = $query->fetchAll();
        return $Vehicule;
    }

    // Fonction de vérification pour éviter les doublons (même model et meme année)
    
    public function findbyModel(string $model, int $annee)
    {
            $query = $this->bddPDO->prepare('SELECT * FROM vehicules WHERE model = :model AND annee = :annee');
            $query->execute(['model' => $model, 'annee' => $annee]);
            return $query->fetch();
        
        
    }

}