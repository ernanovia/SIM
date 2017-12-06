<?php

class publik extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->helper('url');
    }

    function index(){
        $this->load->view('head_home');
        $this->load->view('home');
        $this->load->view('foot_home');
    }
}

?>