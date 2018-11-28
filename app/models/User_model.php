<?php

class User_model extends Controller
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getUser()
    {
        return $this->db->query('SELECT * FROM ');
    }

}
