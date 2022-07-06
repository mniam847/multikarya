<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    public function index()
    {
        $this->load->view('shop/index');
    }
    public function portofolio()
    {
        $this->load->view('shop/portofolio');
    }
}
