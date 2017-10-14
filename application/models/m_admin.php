<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_admin extends CI_Model {

    public function __construct()
    {
        parent::__construct();
    }
    public function getDatatable()
    {
        $data = $this->db->query('SELECT * FROM administrator a JOIN job_position jp ON a.position_id = jp.position_id WHERE admin_level = 2')->result_array();
        return $data;
    }
    public function getDataedit($id)
    {
        $data = $this->db->query('SELECT * FROM administrator WHERE admin_id = '.$id)->result_array();
        return $data[0];
    }
    public function getJob()
    {
        $data = $this->db->query('SELECT * FROM job_position')->result_array();
        return $data;
    }
    public function add($level, $name, $nip, $job, $password, $address)
    {
        $data = array(
            'admin_id' => null,
            'admin_level' => $level,
            'admin_name' => $name,
            'register_number' => $nip,
            'position_id' => $job,
            'admin_password' => $password,
            'admin_address' => $address
        );
        $this->db->insert('administrator', $data);
    }
    public function update($id, $nama, $nip, $job, $address)
    {
        $this->db->set('admin_name', $nama);
        $this->db->set('register_number', $nip);
        $this->db->set('position_id', $job);
        $this->db->set('admin_address', $address);
        $this->db->where('admin_id', $id);
        $this->db->update('administrator');
    }
}
