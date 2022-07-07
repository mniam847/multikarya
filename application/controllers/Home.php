<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    public function index()
    {
        $data['product'] = $this->multikarya->getAll("product");
        $this->load->view('shop/index', $data);
    }
    public function portofolio()
    {
        $this->load->view('shop/portofolio');
    }
}
