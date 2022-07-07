<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Contact extends CI_Controller
{
    public function index(){
        // template
        // ------------------------------------------------------------------------------------------------------------
        $tempVar = $this->multikarya->getData("about", array('name' => 'foreword'));
        $tempVar = $tempVar[0]["value"];
        $data['foreword'] = $tempVar;

        $tempVar = $this->multikarya->getData("about", array('name' => 'telp'));
        $tempVar = $tempVar[0]["value"];
        $data['telp'] = $tempVar;

        $tempVar = $this->multikarya->getData("about", array('name' => 'email'));
        $tempVar = $tempVar[0]["value"];
        $data['email'] = $tempVar;

        $tempVar = $this->multikarya->getData("about", array('name' => 'address'));
        $tempVar = $tempVar[0]["value"];
        $data['address'] = $tempVar;
        // ------------------------------------------------------------------------------------------------------------
        $this->load->view('shop/contact', $data);
    }    

    public function createContact(){
        // $data['user'] = $this->session->userdata('name');

        $submit_data = array(
            'name' => $this->input->post('name'),
            'email' => $this->input->post('email'),
            'message' => $this->input->post('message'),
            'subject' => $this->input->post('subject'),
        );
        $this->multikarya->inputData("contact", $submit_data);
        redirect('contact', 'refresh');
    }
}
