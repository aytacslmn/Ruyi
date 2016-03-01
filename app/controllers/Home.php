<?php

class Home extends Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->home();
    }

    public function home() {
        $this->load->view("Template_FrontEnd/header");
        $this->load->view("Template_FrontEnd/home");
        $this->load->view("Template_FrontEnd/footer");
    }
    public function about() {
        $this->load->view("Template_FrontEnd/header");
        $this->load->view("Template_FrontEnd/about");
        $this->load->view("Template_FrontEnd/footer");
    }

    public function contact() {
        $this->load->view("Template_BackEnd/header");
        $this->load->view("Template_BackEnd/contact");
        $this->load->view("Template_BackEnd/footer");
    }

}
?>

