<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

    // index
    public function index()
    {
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

        $data['user'] = $this->session->userdata('name');
        $data['totalproduct'] = count($this->multikarya->getAll("product"));
        $data['totalinvoice'] = count($this->multikarya->getAll("invoice"));
        $tempVar = $this->multikarya->getData("invoice", array('status' => 1));
        $data['percentinvoice'] = number_format( (count($tempVar) * 100) / count($this->multikarya->getAll("invoice")), 2);
        $data['totalrecord'] = count($tempVar);
        $data['totalfeedback'] = count($this->multikarya->getAll("testimoni"));
        $data['percentfeedback'] = number_format( (count($this->multikarya->getAll("testimoni")) * 100) / count($tempVar), 2);

        $this->load->view('admin/dashboard', $data);
    }

    public function logout()
    {
        // $this->session->unset_userdata('status');
        $this->session->sess_destroy();
        redirect('login');
    }
    // =========================================================================================================

    // Product
    public function createPageProduct()
    {
        $data['user'] = $this->session->userdata('name');
        $this->load->view('adminproduct/createpage', $data);
    }
    public function createProduct()
    {
        $data['user'] = $this->session->userdata('name');

        $submit_data = array(
            'name' => $this->input->post('name'),
            'category' => $this->input->post('category'),
            'price' => $this->input->post('price'),
            'describe' => $this->input->post('describe'),
            'picture' => "default.jpg"
        );
        $this->multikarya->inputData("product", $submit_data);
        redirect('admin/showProduct', 'refresh');
    }
    public function showProduct()
    {
        $data['user'] = $this->session->userdata('name');

        $data['products'] = $this->multikarya->getAll("product");
        $this->load->view('adminproduct/index', $data);
    }
    public function detailProduct($id)
    {  //sekaligus update
        $data['user'] = $this->session->userdata('name');
        $submit_data = array('id' => $id);
        $data['product'] = $this->multikarya->getData("product", $submit_data);
        // var_dump($data['product']);
        $this->load->view('adminproduct/detail', $data);
    }

    public function updateProduct()
    {
        $data['user'] = $this->session->userdata('name');

        $submit_data = array(
            'name' => $this->input->post('name'),
            'category' => $this->input->post('category'),
            'price' => $this->input->post('price'),
            'describe' => $this->input->post('describe'),
            'picture' => $this->input->post('picture'),
        );
        $index = array('id' => $this->input->post('id'));
        // var_dump($submit_data);
        $this->multikarya->updateData("product", $submit_data, $index);
        redirect('admin/showProduct', 'refresh');
    }
    public function deleteProduct($id)
    {
        $submit_data = array('id' => $id);
        $this->multikarya->deleteData("product", $submit_data);
        $data['user'] = $this->session->userdata('name');
        redirect('admin/showProduct', 'refresh');
    }

    // ====================================================================================================
    // Invoice

    public function showInvoice()
    {
        $data['user'] = $this->session->userdata('name');

        $data['invoice'] = $this->multikarya->getAll("invoice");
        $this->load->view('admininvoice/index', $data);
    }

    public function createPageInvoice()
    {
        $data['user'] = $this->session->userdata('name');
        $this->load->view('admininvoice/createpage', $data);
    }
    public function createInvoice()
    {
        $data['user'] = $this->session->userdata('name');

        $submit_data = array(
            'name' => $this->input->post('name'),
            'product' => $this->input->post('product'),
            'message' => $this->input->post('message'),
            'date_input' => $this->input->post('date_input'),
            'dateline' => $this->input->post('dateline'),
            'status' => $this->input->post('status'),
            'price' => $this->input->post('price')
        );
        $this->multikarya->inputData("invoice", $submit_data);
        redirect('admin/showInvoice', 'refresh');
    }

    public function detailInvoice($id)
    {  //sekaligus update
        $data['user'] = $this->session->userdata('name');
        $submit_data = array('id' => $id);
        $data['invoice'] = $this->multikarya->getData("invoice", $submit_data);
        // var_dump($data['invoice']);
        $this->load->view('admininvoice/detail', $data);
    }

    public function updateInvoice()
    {
        $data['user'] = $this->session->userdata('name');

        $submit_data = array(
            'name' => $this->input->post('name'),
            'product' => $this->input->post('product'),
            'message' => $this->input->post('message'),
            'date_input' => $this->input->post('date_input'),
            'dateline' => $this->input->post('dateline'),
            'status' => $this->input->post('status'),
            'price' => $this->input->post('price')
        );
        $index = array('id' => $this->input->post('id'));
        // var_dump($submit_data);
        $this->multikarya->updateData("invoice", $submit_data, $index);
        redirect('admin/showInvoice', 'refresh');
    }
    public function deleteInvoice($id)
    {
        $submit_data = array('id' => $id);
        $this->multikarya->deleteData("invoice", $submit_data);
        $data['user'] = $this->session->userdata('name');
        redirect('admin/showInvoice', 'refresh');
    }

    // ============================================================================================
    // record
    public function showRecord()
    {
        $data['user'] = $this->session->userdata('name');

        $data['record'] = $this->multikarya->getData("invoice", array('status' => '1'));
        $this->load->view('adminRecord/index', $data);
    }
    // ====================================================================================================
    // Contact

    public function showContact()
    {
        $data['user'] = $this->session->userdata('name');

        $data['contacts'] = $this->multikarya->getAll("contact");
        $this->load->view('admincontact/index', $data);
    }
    
    public function deleteContact($id)
    {
        $data['user'] = $this->session->userdata('name');
        $submit_data = array('id' => $id);
        $this->multikarya->deleteData("contact", $submit_data);
        redirect('admin/showInvoice', 'refresh');
    }

    // ============================================================================================
}
