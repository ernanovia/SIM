<?php

class  Kasir extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->helper('url');
    }

    function index(){
        $this->load->view('kasir/header_kasir');
        $this->load->view('kasir/home_kasir');
    }


    }

?>