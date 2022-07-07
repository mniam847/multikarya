<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
    public function __construct(){
        parent::__construct();
        if($this->session->userdata('status') != 'login'){
            redirect('login');
        }
    }

    // index
    public function index(){
        $data['user'] = $this->session->userdata('name');
		$this->load->view('admin/dashboard', $data);
	}

    public function logout(){
        // $this->session->unset_userdata('status');
        $this->session->sess_destroy();
        redirect('login');
    }
    // =========================================================================================================

    // Product
    public function createPageProduct(){
        $data['user'] = $this->session->userdata('name');
		$this->load->view('adminproduct/createpage', $data);
	}
    public function createProduct(){
        $data['user'] = $this->session->userdata('name');
        redirect('adminproduct/showProduct');
    }
    public function showProduct(){
        $data['user'] = $this->session->userdata('name');
		$this->load->view('adminproduct/index', $data);
	}
    public function detailProduct(){  //sekaligus update
        $data['user'] = $this->session->userdata('name');
		$this->load->view('adminproduct/detail', $data);
	}
    public function deleteProduct(){
        $data['user'] = $this->session->userdata('name');
		redirect('adminproduct/showProduct');
	}

}
