<?php
defined('BASEPATH') or exit('No direct script access allowed');

class multikarya extends CI_Model
{
    //login
    public function getLogin($data){
        return $this->db->get_where('user', $data)->result_array();
    }

    public function getData($dataBase, $where)
    {
        return $this->db->get_where($dataBase, $where)->result_array();
    }

    public function getAll($tabel)
    {
        return $this->db->get($tabel)->result_array();
    }

    public function getFew($tabel, $short, $limit)
    {
        $this->db->order_by('id', $short);
        return $this->db->get($tabel,0,$limit)->result_array();
    }

    public function insertEmail($email)
    {
        return $this->db->insert("newsletter", $email);
    }

    public function inputData($things, $database)
    {
        return $this->db->insert($database, $things);
    }
}
