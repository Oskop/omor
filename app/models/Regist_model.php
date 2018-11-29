<?php

class Regist_model
{
    public function __construct()
    {
        $this->db = new Database;
    }

    public function registrasi()
    {
       $this->db->query('SELECT * FROM unpw');
       return $this->db->resultSet();
    }
}