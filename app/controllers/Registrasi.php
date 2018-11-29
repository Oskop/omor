<?php

class Registrasi extends Controller
{
    public function __construct()
    {

    }

    public function index()
    {
        $data['judul'] = "Registrasi";
        $this->view('templates/headerRegister',$data);
        $this->view('register/index');
        $this->view('templates/footer');
    }

    function registAngg()
    {
        if ($this->regist() === false) {
            echo "GAGAL REGISTER";
        }
    }

    public function regist()
    {
       if(isset($_POST['submit']))
       {
           $dAnggota['nama'] = htmlspecialchars($_POST['nama']);
           $dAnggota['alamat'] = $_POST['alamat'];
           $dAnggota['username'] = htmlspecialchars($_POST['user']);
           $dAnggota['jk'] = $_POST['jk'];
           $dAnggota['tempat_lahir'] = $_POST['tempatl'];
           $dAnggota['tanggal_lahir'] = $_POST['tanggal'];
           $dAnggota['agama'] = $_POST['agama'];
           $dAnggota['no_hp'] = $_POST['nohp'];
           $dAnggota['email'] = $_POST['email'];
           $dAnggota['password'] = htmlspecialchars($_POST['pass']);
           $confrm = htmlspecialchars($_POST['pascon']);

           if(($dAnggota['password'] === $confrm))
           {
               $result = $this->model('Regist_model')->registrasi();
               foreach ($result as $b) {
                  $user = $b['username'];
               }
               if ($dAnggota['username'] !== $user) {
                   $insert = $this->model('User_model')->insertAnggota($dAnggota);
                   if($insert>0)
                   {
                       header('Location:'. baseurl . 'login');
                       exit;
                   }
                   return false;
               }
               return false;
            }
        }
    }
}
