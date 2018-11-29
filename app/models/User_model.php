<?php

class User_model
{
    public function __construct()
    {
        $this->db = new Database;
    }


    public function getUserById($id)
    {
        $this->db->query('SELECT * FROM anggota WHERE id_anggota = :id');
        $this->db->bind('id',$id);
        return $this->db->single();
    }

    public function getUser()
    {
        $this->db->query('SELECT * FROM anggota');
        return $this->db->resultSet();
    }

    public function insertAnggota($dAnggota)
    {
        $query1 = "INSERT INTO anggota VALUES(
        '',
        :nama,
        :alamat,
        :jk,
        :tempat_lahir,
        :tanggal_lahir,
        :agama,
        :no_hp,
        :email
        )";
        $this->db->query($query1);
        $this->db->bind('nama',$dAnggota['nama']);
        $this->db->bind('alamat',$dAnggota['alamat']);
        $this->db->bind('jk',$dAnggota['jk']);
        $this->db->bind('tempat_lahir',$dAnggota['tempat_lahir']);
        $this->db->bind('tanggal_lahir',$dAnggota['tanggal_lahir']);
        $this->db->bind('agama',$dAnggota['agama']);
        $this->db->bind('no_hp',$dAnggota['no_hp']);
        $this->db->bind('email',$dAnggota['email']);
        $this->db->eksekusi();
        $query2 = "INSERT INTO unpw VALUES(
            '',
            LAST_INSERT_ID(),
            :username,
            :password
            )";
        $this->db->query($query2);
        $pwHash = password_hash($dAnggota['password'],PASSWORD_DEFAULT);
        $this->db->bind('username',$dAnggota['username']);
        $this->db->bind('password',$pwHash);
        $this->db->eksekusi();

        return $this->db->rowCount();
    }

}
