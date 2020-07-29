<?php

class Usuario
{

    private $id_users;
    private $name;
    private $lastname;
    private $email;
    private $password;
    private $id_rol;

    public function getId_users()
    {
        return $this->id_users;
    }

    public function setId_users($id_users)
    {
        $this->id_users = $id_users;
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

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function setPassword($password)
    {
        $this->password = $password;
    }

    public function getId_rol()
    {
        return $this->id_rol;
    }

    public function setId_rol($id_rol)
    {
        $this->id_rol = $id_rol;
    }

}
