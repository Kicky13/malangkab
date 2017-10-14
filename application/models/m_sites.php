<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_sites extends CI_Model {

    public function __construct()
    {
        parent::__construct();
    }
    public function getSites()
    {
        $data = $this->db->query('SELECT * FROM sites')->result_array();
        return $data;
    }
}
