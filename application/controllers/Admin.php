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
        $data['totalproduct'] = count($this->multikarya->getAll("product"));
        $data['totalinvoice'] = count($this->multikarya->getAll("invoice"));
        $tempVar = $this->multikarya->getData("invoice",array('status'=>1));
        $data['percentinvoice'] = (count($tempVar)*100)/ count($this->multikarya->getAll("invoice"));
        $data['totalrecord'] = count($tempVar);
        $data['totalfeedback'] = count($this->multikarya->getAll("testimoni"));
        $data['percentfeedback'] = (count($this->multikarya->getAll("testimoni"))*100)/count($tempVar);

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
    public function createProduct($id){
        $data['user'] = $this->session->userdata('name');
        redirect('adminproduct/showProduct');
    }
    public function showProduct(){
        $data['user'] = $this->session->userdata('name');

        $data['products'] = $this->multikarya->getAll("product");
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
