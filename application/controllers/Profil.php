<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profil extends CI_Controller
{

    public function index()
    {
        $this->load->view('shop/about');
    }
    public function contact()
    {
        $this->load->view('shop/contact');
    }
}
