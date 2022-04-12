<?php

include_once 'db.php';
class User extends DB
{
    private $nombre;
    private $nomusuario;
    private $apellidos;

    public function userExists($user, $pass)
    {
        //$md5pass = md5($pass);

        $query = $this->connect()->prepare('SELECT * FROM usuario WHERE nomusuario = :user AND pass = :pass');
        $query->execute(['user'=> $user, 'pass' => $pass]);

        if($query->rowCount())
        {
            return true;
        }else{
            return false;
        }
    }

    public function setUser ($user)
    {
        $query = $this->connect()->prepare('SELECT * FROM usuario WHERE nomusuario = :user');
        $query->execute(['user' => $user]);

        foreach ($query as $currentUser) {
            $this->nombre = $currentUser['nombre'];
            $this->apellidos =$currentUser['apellidos'];
            $this->nomusuario = $currentUser['nomusuario'];
        }
    }
    public function getNombre()
    {
        return $this->nombre;
    }
    public function getApellido()
    {
        return $this->apellidos;
    }
}

?>