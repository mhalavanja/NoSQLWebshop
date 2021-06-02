<?php


class User extends Model
{
    private $id;
    private $username;
    private $password_hash;
    private $email;
    private $registration_sequence;
    private $has_registered;
    private $isAdmin;
    private $name;
    private $lastname;
    private $recommendations;
    private $favoriteCategories;
    protected static $table = "dz2_users";
    protected static $columns = [];

    public function __construct(){}

    public static function staticInit()
    {
        User::setColumns();
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getUsername()
    {
        return $this->username;
    }

    public function setUsername($username)
    {
        $this->username = $username;
    }

    public function getPassword_hash()
    {
        return $this->password_hash;
    }

    public function setPassword_hash($password_hash)
    {
        $this->password_hash = $password_hash;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getRegistration_sequence()
    {
        return $this->registration_sequence;
    }

    public function setRegistration_sequence($registration_sequence)
    {
        $this->registration_sequence = $registration_sequence;
    }

    public function getHas_registered()
    {
        return $this->has_registered;
    }

    public function setHas_registered($has_registered)
    {
        $this->has_registered = $has_registered;
    }

    public function getIsAdmin()
    {
        return $this->isAdmin;
    }

    public function setIsAdmin($isAdmin)
    {
        $this->isAdmin = $isAdmin;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getLastname()
    {
        return $this->lastname;
    }

    public function setLastname($lastname)
    {
        $this->lastname = $lastname;
    }

    public function getRecommendations()
    {
        return $this->recommendations;
    }

    public function setRecommendations($recommendations)
    {
        $this->recommendations = $recommendations;
    }

    public function getFavoriteCategories()
    {
        return $this->favoriteCategories;
    }

    public function setFavoriteCategories($favoriteCategories)
    {
        $this->favoriteCategories = $favoriteCategories;
    }
}

User::staticInit();
