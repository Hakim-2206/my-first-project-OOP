<?php


// Creation d'une classe Vehicules faisant référence à la table vehicules de la base de données


class Vehicules
{
    private $marque;
    private $model;
    private $annee;
    private $moteur;
    private $places;
    private $commentaires;
    private $id;
    private $picture;

    public function __construct($data = [])
    {
        $this->hydrater($data);
    }

    public function hydrater(array $data)
    {
        foreach ($data as $attribut => $value) {
            $settersMethod = 'set'.ucfirst($attribut);
            $this->$settersMethod($value);
        }
        
    }

    // Les Getters

    public function getMarque()
    {
        return $this->marque;
    }
    public function getModel()
    {
        return $this->model;
    }
    public function getAnnee()
    {
        return $this->annee;
    }
    public function getMoteur()
    {
        return $this->moteur;
    }
    public function getPlaces()
    {
        return $this->places;
    }
    public function getCommentaires()
    {
        return $this->commentaires;
    }
    public function getId()
    {
        return $this->id;
    }
    public function getPicture()
    {
        return $this->picture;
    }
    

// Les Setters

    public function setMarque($marque)
    {
        $this->marque = $marque;
    }
    public function setModel($model)
    {
        $this->model = $model;
    }
    public function setAnnee($annee)
    {
        $this->annee = $annee;
    }
    public function setMoteur($moteur)
    {
        $this->moteur = $moteur;
    }
    public function setPlaces($places)
    {
        $this->places = $places;
    }
    public function setCommentaires($commentaires)
    {
        $this->commentaires = $commentaires;
    }
    public function setPicture($picture)
    {
        $this->picture = $picture;
    }


}