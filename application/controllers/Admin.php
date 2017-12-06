<?php

class  Admin extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->helper('url');
    }

    function index(){
        $this->load->view('admin/header_admin');
        $this->load->view('admin/home_admin');
        $this->load->view('admin/footer_admin');
    }

    function motor(){
    	$this->load->view('admin/header_admin');
    	$this->load->view('admin/motor');
    	$this->load->view('admin/footer_admin');
    }
    function motor_edit(){
        $this->load->view('admin/header_admin');
        $this->load->view('admin/motor_edit');
        $this->load->view('admin/footer_admin');
    }
    function motor_tambah(){
        $this->load->view('admin/header_admin');
        $this->load->view('admin/motor_tambah');
        $this->load->view('admin/footer_admin');
    }

    function kasir(){
    	$this->load->view('admin/header_admin');
    	$this->load->view('admin/kasir');
    	$this->load->view('admin/footer_admin');
    }
    
    function kasir_edit(){
    	$this->load->view('admin/header_admin');
    	$this->load->view('admin/kasir_edit');
    	$this->load->view('admin/footer_admin');
    }

    function kasir_tambah(){
        $this->load->view('admin/header_admin');
        $this->load->view('admin/kasir_tambah');
        $this->load->view('admin/footer_admin');
    }

    function pelanggan(){
        $this->load->view('admin/header_admin');
        $this->load->view('admin/pelanggan');
        $this->load->view('admin/footer_admin');
    }
    
    function pelanggan_edit(){
        $this->load->view('admin/header_admin');
        $this->load->view('admin/pelanggan_edit');
        $this->load->view('admin/footer_admin');
    }

    function pelanggan_tambah(){
        $this->load->view('admin/header_admin');
        $this->load->view('admin/pelanggan_tambah');
        $this->load->view('admin/footer_admin');
    }

    function laporan(){
        $this->load->view('admin/header_admin');
        $this->load->view('admin/laporan');
        $this->load->view('admin/footer_admin');
    }

     function transaksi(){
        $this->load->view('admin/header_admin');
        $this->load->view('admin/transaksi');
        $this->load->view('admin/footer_admin');
    }
    function logout(){
        $this->load->view('admin/login');
       
    }
}

?>