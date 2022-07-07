<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
    public function __construct(){
        parent::__construct();
        if($this->session->userdata('status') != 'login'){
            redirect('login');
        }
    }

    public function index(){
        $data['user'] = $this->session->userdata('name');
		$this->load->view('admin/dashboard', $data);
	}
}
