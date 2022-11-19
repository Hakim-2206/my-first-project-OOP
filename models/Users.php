<?php

// Creation d'une classe Users faisant référence à la table users dans la base de données

class Users
{
    private $errors = [];
    private $id;
    private $name;
    private $email;
    private $password;
    private $isAdmin;

    const NAME_INVALID = 1;
    const EMAIL_INVALID = 2;
    const PASSWORD_INVALID = 3;

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

    public function getId()
    {
        return $this->id;
    }
    public function getName()
    {
        return $this->name;
    }
    public function getEmail()
    {
        return $this->email;
    }
    public function getPassword()
    {
        return $this->password;
    }
    public function getIsAdmin()
    {
        return $this->isAdmin;
    }
    public function getErrors()
    {
        return $this->errors;
    }

// Les Setters

    public function setId($id)
    {
        $this->id = (int) $id;
    }
    public function setName($name)
    {
        $this->name = $name;
    }
    public function setEmail($email)
    {
        $this->email = $email;
    }
    public function setPassword($password)
    {
        $this->password = password_hash($password, PASSWORD_DEFAULT);

        return $this;
    }
    public function setIsAdmin($isAdmin)
    {
        $this->isAdmin = $isAdmin;
    }

}