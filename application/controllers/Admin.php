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
        $data['percentinvoice'] = number_format((count($tempVar) * 100) / count($this->multikarya->getAll("invoice")), 2);
        $data['totalrecord'] = count($tempVar);
        $data['totalfeedback'] = count($this->multikarya->getAll("testimoni"));
        $totalstar = 0;
        foreach ($this->multikarya->getAll("testimoni") as $star) {
            $totalstar += $star['star'];
        }
        $totalstar /= count($this->multikarya->getAll("testimoni"));
        $data['percentfeedback'] = $totalstar;

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

        $config['upload_path']          = './uploads/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 100;
        $config['max_width']            = 1024;
        $config['max_height']           = 768;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('picture')) {
            $error = array('error' => $this->upload->display_errors());

            $this->load->view('upload_form', $error);
        } else {
            $data = array(
                'name' => $this->input->post('name'),
                'category' => $this->input->post('category'),
                'price' => $this->input->post('price'),
                'describe' => $this->input->post('describe'),
                'picture' => $this->upload->data('file_name')
            );
            $this->multikarya->inputData("product", $data);
            redirect('admin/showProduct', 'refresh');
        }
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


        $config['upload_path']          = './uploads/';
        $config['allowed_types']        = 'gif|jpg|png|jpeg';
        $config['max_size']             = 100;
        $config['max_width']            = 1024;
        $config['max_height']           = 768;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('picture')) {
            $error = array('error' => $this->upload->display_errors());

            $this->load->view('upload_form', $error);
        } else {
            $data = array(
                'name' => $this->input->post('name'),
                'category' => $this->input->post('category'),
                'price' => $this->input->post('price'),
                'describe' => $this->input->post('describe'),
                'picture' => $this->upload->data('file_name')
            );
            $index = array('id' => $this->input->post('id'));
            $this->multikarya->updateData("product", $data, $index);
            redirect('admin/showProduct', 'refresh');
        }
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
    // ====================================================================================================
    // Testimoni

    public function showTestimoni()
    {
        $data['user'] = $this->session->userdata('name');

        $data['testimonis'] = $this->multikarya->getAll("testimoni");
        $this->load->view('admintestimoni/index', $data);
    }

    public function deleteTestimoni($id)
    {
        $data['user'] = $this->session->userdata('name');
        $submit_data = array('id' => $id);
        $this->multikarya->deleteData("testimoni", $submit_data);
        redirect('admin/showTestimoni', 'refresh');
    }

    // ============================================================================================
}
