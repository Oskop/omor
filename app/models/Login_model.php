<?php

class Login_model
{

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getLoginByName($nama,$password)
    {
        $this->db->query('SELECT * FROM unpw WHERE username = :nama');
        $this->db->bind('nama',$nama);
        $result =  $this->db->single();
        if($this->db->rowCount() == 1)
        {
            $pwHash = $result['password'];
            if(password_verify($password,$pwHash)){
                
                return true;
            }
        }
        return false;
    }
}
