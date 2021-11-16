<?php

class User
{
    private $id;
    private $nombre;
    private $apellido;
    private $email;
    private $password;
    private $rol;
    private $image;
    private $db;

    public function __construct()
    {
        $database = new Database;
        $this->db = $database->connect();
    }

    public function save()
    {
        $sql = "Insert into usuarios values(null,'{$this->getNombre()}','{$this->getApellido()}','{$this->getEmail()}','{$this->getPassword()}','user',null)";
        $save = $this->db->query($sql);
        if ($save) {
            return true;
        }else{
            return false;
        }
    }


    public function delete()
    {
        $sql = "DELETE FROM `usuarios` WHERE id=".$this->getId();
        $delete = $this->db->query($sql);
        if ($delete) { 
            return true;
        }else{
            return false;
        }
    }

    public function update()
    {
        $sql = "UPDATE `usuarios` SET `nombre`='{$this->getNombre()}',`apellido`='{$this->getApellido()}',`email`='{$this->getEmail()}',`password`='{$this->getPassword()}',`rol`='{$this->getRol()}' WHERE id=".$this->getId();

        $update = $this->db->query($sql);
        if ($update) {
            return true;
        }else{
            return false;
        }
    }

    
    public function login()
    {
        $email = $this->getEmail();
        $pass = $this->password;


        $sql = "select * from usuarios where email like '$email';";
        $login = $this->db->query($sql);

        if ($login && $login->num_rows==1) {
            $user = $login->fetch_object();
        }else{
            return false;
        }
        if (password_verify($pass,$user->password)) {
            return $user;
        }else{
            return false;
        }
    }

    
    public function getAll()
    {
        $sql = "select * from usuarios;";
        $all = $this->db->query($sql);

        $usersList = [];

        if ($all && $all->num_rows>=1) {
            while($user = $all->fetch_object()){
                $users = $user;
                array_push($usersList,$users);
            }
            return $usersList;
        }else{
            return false;
        }
    }

    


    /**
     * Get the value of image
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set the value of image
     *
     * @return  self
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get the value of id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of nombre
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set the value of nombre
     *
     * @return  self
     */
    public function setNombre($nombre)
    {
        $this->nombre = $this->db->real_escape_string($nombre);
        return $this;
    }

    /**
     * Get the value of apellido
     */
    public function getApellido()
    {
        return $this->apellido;
    }

    /**
     * Set the value of apellido
     *
     * @return  self
     */
    public function setApellido($apellido)
    {
        $this->apellido = $this->db->real_escape_string($apellido);
        return $this;
    }

    /**
     * Get the value of email
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */
    public function setEmail($email)
    {
        $this->email = $this->db->real_escape_string($email);
        return $this;
    }

    /**
     * Get the value of password
     */
    public function getPassword()
    {
        return password_hash($this->db->real_escape_string($this->password), PASSWORD_BCRYPT, ['cost' => 4]);
    }

    /**
     * Set the value of password
     *
     * @return  self
     */
    public function setPassword($password)
    {
        $this->password = $password;
        return $this;
    }

    /**
     * Get the value of rol
     */
    public function getRol()
    {
        return $this->rol;
    }

    /**
     * Set the value of rol
     *
     * @return  self
     */
    public function setRol($rol)
    {
        $this->rol = $rol;

        return $this;
    }
}
