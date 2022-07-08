<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profil extends CI_Controller
{

    public function index()
    {
        // template
        // ------------------------------------------------------------------------------------------------------------
        $tempVar = $this->multikarya->getData("about", array('name' => 'company'));
        $tempVar = $tempVar[0]["value"];
        $data['company'] = $tempVar;

        $tempVar = $this->multikarya->getData("about", array('name' => 'vm'));
        $tempVar = $tempVar[0]["value"];
        $data['vm'] = $tempVar;

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

        $data['testimoni'] = $this->multikarya->getFew('testimoni', 'DESC', 3);
        $totalstar = 0;
        foreach($this->multikarya->getAll("testimoni") as $star){
            $totalstar+=$star['star'];
        }
        $totalstar /= count($this->multikarya->getAll("testimoni"));
        $data['percentfeedback'] = $totalstar;

        $this->load->view('shop/about', $data);
    }

    public function createTestimoni()
    {
        // $data['user'] = $this->session->userdata('name');

        $submit_data = array(
            'name' => $this->input->post('name'),
            'message' => $this->input->post('message'),
            'email' => $this->input->post('email'),
            'star' => $this->input->post('star')
        );
        $this->multikarya->inputData("testimoni", $submit_data);
        redirect('profil', 'refresh');
    }
}
