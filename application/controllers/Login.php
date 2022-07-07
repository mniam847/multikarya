<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('status') == "login") {
            $tempVar = $this->multikarya->getData("user", array('name' => $this->session->userdata('name')));
            $tempVar = $tempVar[0]["role"];
            redirect('admin');
        }
    }

    public function index()
    {
        $this->load->view('auth/login');
    }

    //validasi login
    public function validate()
    {
        $user = $this->input->post('username');
        $pass = $this->input->post('password');

        $dataPenunjuk = array(
            'name' => $user,
            'password' => $pass
        );

        $dataUser = count($this->multikarya->getLogin($dataPenunjuk));

        // echo $dataUser;
        if ($dataUser == 1) {
            // $accountUser = $this->scsc->getData("user",$dataPenunjuk);
            $accountSession = array(
                'name' => $user,
                'status' => 'login'
            );


            $this->session->set_userdata($accountSession);
            redirect('admin');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger text-center">Data salah input, coba lagi!</div>');
            redirect('login');
        }
    }
}
