<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    public function index(){
        // template
        // ------------------------------------------------------------------------------------------------------------
        // $tempVar = $this->multikarya->getData("about",array('name'=>'foreword'));
        // $tempVar = $tempVar[0]["value"];
        // $data['foreword'] = $tempVar;
        
        // $tempVar = $this->multikarya->getData("about",array('name'=>'telp'));
        // $tempVar = $tempVar[0]["value"];
        // $data['telp'] = $tempVar;
        
        // $tempVar = $this->multikarya->getData("about",array('name'=>'email'));
        // $tempVar = $tempVar[0]["value"];
        // $data['email'] = $tempVar;
        
        // $tempVar = $this->multikarya->getData("about",array('name'=>'address'));
        // $tempVar = $tempVar[0]["value"];
        // $data['address'] = $tempVar;
        // ------------------------------------------------------------------------------------------------------------
        
        $data['product'] = $this->multikarya->getAll("product");
        

        $this->load->view('shop/index', $data);
    }
    public function portofolio()
    {
        $this->load->view('shop/portofolio');
    }
}
