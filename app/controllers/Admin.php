<?php

class Admin extends Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->home();
    }

    public function home() {
        $this->load->view("Template_BackEnd/header");
        $this->load->view("Template_BackEnd/left");
        $this->load->view("Template_BackEnd/home");
        $this->load->view("Template_BackEnd/footer");
    }

    public function iletisim() {
        $this->load->view("Template_BackEnd/header");
        $this->load->view("Template_BackEnd/left");
        $this->load->view("Template_BackEnd/iletisim");
        $this->load->view("Template_BackEnd/footer");
        $this->load->view("Template_BackEnd/right");
    }

}
?>

