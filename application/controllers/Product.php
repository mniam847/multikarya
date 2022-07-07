<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Product extends CI_Controller
{

    public function index()
    {
        $data['product'] = $this->multikarya->getAll("product");
        $this->load->view('shop/shop', $data);
    }

    public function detail($id)
    {
        $data['product'] = $this->multikarya->getData("product", array('id' => $id));
        $this->load->view('shop/detail', $data);
    }
}
