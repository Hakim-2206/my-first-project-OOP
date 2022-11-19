<?php

// Appel du fichier 'config/pdo.php' servant de connexion à la base de données

require_once 'config/pdo.php';

// Création de la classe UsersManager pour faire des requetes afin de modifier, d'ajouter ou de supprimer un utilisateur

class UsersManager
{
    private $bddPDO;

    public function __construct(PDO $bddPDO)
    {
        $this->bddPDO = $bddPDO;
    }

// Fonction pour ajouter un enregistrement à la table users

    public function insert(Users $User)
    {
        
        $query = $this->bddPDO->prepare('INSERT INTO users(name, email, password) VALUES (:name, :email, :password)');
        $query->bindValue(':name', $User->getName());
        $query->bindValue(':email', $User->getEmail());
        $query->bindValue(':password', $User->getPassword());
        $query->execute();
    }
// Fonction pour supprimer un utilisateur de la base de données

    public function delete($id)
    {
        $query = $this->bddPDO->exec('DELETE FROM users  WHERE id ='.(int)$id);
    }

// Fonction pour vérifier si l'email existe déjà, lors de l'inscriprion et lors de la connexion

    public function findbyEmail(string $email)
    {
            $query = $this->bddPDO->prepare('SELECT * FROM users WHERE email = :email');
            $query->execute(['email' => $email]);
            return $query->fetch();
    }

}

