<?php
defined('BASEPATH') or exit('No direct script access allowed');

class multikarya extends CI_Model
{
    //login
    public function getLogin($data){
        return $this->db->get_where('user', $data)->result_array();
    }
    
    //tampil semua data
    public function getAll($tabel){
        return $this->db->get($tabel)->result_array();
    }

    //tampil satu data
    public function getData($dataBase, $where){
        return $this->db->get_where($dataBase, $where)->result_array();
    }

    // tampil beberapa
    public function getFew($tabel, $short, $limit){
        $this->db->order_by('id', $short);
        return $this->db->get($tabel,0,$limit)->result_array();
    }

    //inputdata
    public function inputData($database, $things){
        return $this->db->insert($database, $things);
    }

    //update data
    public function updateData($tabel, $data, $where){
        return $$this->db->update($tabel, $data, $where);
    }

    //delete data
    public function deleteData($table, $where){
        return $this->db->delete($table, $where);
    }    
}
