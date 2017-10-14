<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_dimension extends CI_Model {

    public function __construct()
    {
        parent::__construct();
    }
    public function getDatatable()
    {
        $data = $this->db->query('SELECT * FROM dimension')->result_array();
        return $data;
    }
    public function getDataedit($id)
    {
        $data = $this->db->query('SELECT * FROM dimension WHERE dimension_id = '.$id)->result_array();
        return $data[0];
    }
    public function add($label, $name, $expl)
    {
        $data = array(
            'dimension_id' => null,
            'dimension_label' => $label,
            'dimension_name' => $name,
            'dimension_expl' => $expl
        );
        $this->db->insert('dimension', $data);
    }
    public function update($id, $name, $expl)
    {
        $this->db->set('dimension_name', $name);
        $this->db->set('dimension_expl', $expl);
        $this->db->where('dimension_id', $id);
        $this->db->update('dimension');
    }
}
