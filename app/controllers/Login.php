<?php

class Login extends Controller 
{

   public function __construct()
   {
      
   }
   public function index($cek=NULL)
   {
        $data["judul"] = "Login";
        $this->view('templates/headerLogin',$data);
        $this->view('login/index',$cek);
        $this->view('templates/footer');
   }

   public function masuk()
   {
      if(isset($_POST["submit"]))
      {
         $user = htmlspecialchars($_POST['username']);
         $password = htmlspecialchars($_POST['password']);

         $res = $this->model('Login_model')->getLoginByName($user,$password);

         if($res === true)
         {
            header('Location:'.baseurl.'base');
         }else{
            $this->index($cek=true);
         }
      }
   }
}
