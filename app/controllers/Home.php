<?php

class Home extends Controller implements Apa
{
    public function index()
    {
        $data['judul'] = $this->model('User_model')->getUser();
        $this->view('templates/header',$data);
        $this->view('home/index',$data);
        $this->view('templates/footer');
    }
}
