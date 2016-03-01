<?php
    class Login extends Controller{
        public function __construct() {
            parent::__construct();
        }
   
        public function index() {
            $this->login();
        }
        //daha önce login oldu ise
        function login() {
             Session::init();
            if(Session::get("login")==true){
               header("Location:".SITE_URL."/panel");
            }
            $this->load->view("Entry/loginForm");
            
        }
    
        public  function runLogin() {
          $data=array(
               ":kadi"    =>$_POST["username"],
               ":password"=>$_POST["password"]
          );
          
          $admin_model=$this->load->model("admin_model");
          $result=$admin_model->userControl($data);
          
          if($result==false){
              //yanlış bilgi
                header("Location:".SITE_URL);
          }else{
             
              //kullanıcı işlemleri başarılı
            Session::init();
            //login olarak session tanımlıyoruz admin panelini girerken login true ise diye
            Session::set("login", "true");
            Session::set("username", $result[0]["fwkullaniciAd"]);
            Session::set("userId", $result[0]["fwkullaniciSifre"]);

            //yönlendirme
            header("Location:".SITE_URL."/panel");
          } 
         }
         
         //Çıkış Yap
         public function logout() {
             Session::init();
             Session::destroy();
             header("Location:".SITE_URL);
         }
     }
?>

 
