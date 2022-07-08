<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Product extends CI_Controller
{

    public function index()
    {
        // template
        // ------------------------------------------------------------------------------------------------------------
        $tempVar = $this->multikarya->getData("about", array('name' => 'company'));
        $tempVar = $tempVar[0]["value"];
        $data['company'] = $tempVar;

        $tempVar = $this->multikarya->getData("about", array('name' => 'cs'));
        $tempVar = $tempVar[0]["value"];
        $data['cs'] = $tempVar;

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
        $data['product'] = $this->multikarya->getAll("product");
        $this->load->view('shop/shop', $data);
    }

    public function detail($id)
    {
        // template
        // ------------------------------------------------------------------------------------------------------------
        $tempVar = $this->multikarya->getData("about", array('name' => 'company'));
        $tempVar = $tempVar[0]["value"];
        $data['company'] = $tempVar;

        $tempVar = $this->multikarya->getData("about", array('name' => 'cs'));
        $tempVar = $tempVar[0]["value"];
        $data['cs'] = $tempVar;

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
        $data['product'] = $this->multikarya->getData("product", array('id' => $id));
        $this->load->view('shop/detail', $data);
    }
    public function kategori($category)
    {
        // template
        // ------------------------------------------------------------------------------------------------------------
        $tempVar = $this->multikarya->getData("about", array('name' => 'company'));
        $tempVar = $tempVar[0]["value"];
        $data['company'] = $tempVar;

        $tempVar = $this->multikarya->getData("about", array('name' => 'cs'));
        $tempVar = $tempVar[0]["value"];
        $data['cs'] = $tempVar;

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
        $data['product'] = $this->multikarya->getData("product", array('category' => $category));
        $this->load->view('shop/kategori', $data);
    }
}
