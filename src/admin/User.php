<?php
    namespace CMS\admin;
    use CMS\Connection;
    use PDO;
    use PDOException;


class User extends Connection
    {
    private $id;
    private $name;
    private $email;
    private $password;
    private $role;
    private $stutus;



    public function set($data = array()){
        if(array_key_exists('email',$data)){
            $this->email = $data['email'];
        }
        if(array_key_exists('password',$data)){
            $this->password = $data['password'];
        }
        if(array_key_exists('name',$data)){
            $this->name = $data['name'];
        }
        if(array_key_exists('role',$data)){
            $this->role = $data['role'];
        }
        if(array_key_exists('status',$data)){
            $this->status = $data['status'];
        }


        return $this;
    }


    public function store(){

    }
}