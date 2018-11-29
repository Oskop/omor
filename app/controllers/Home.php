<?php

class Home extends Controller
{
    public function index()
    {
        $data['judul'] = "OMOR";
        $data['salam'] = "Ini adalah web aplikasi OMOR";
        $this->view('templates/header',$data);
        $this->view('home/index',$data);
        $this->view('templates/footer');
    }
}
