<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Product extends CI_Controller
{

    public function index()
    {
        $this->load->view('shop/shop');
    }

    public function detail()
    {
        $this->load->view('shop/detail');
    }
}
