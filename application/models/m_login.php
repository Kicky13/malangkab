<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_login extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
    }
    public function validationAdmin($nip, $password)
    {
        $data = $this->db->query('SELECT * FROM administrator WHERE register_number = '.$nip.' AND admin_password = "'.$password.'"')->num_rows();
        return $data;
    }
    public function getDataadmin($nip, $password)
    {
        $data = $this->db->query('SELECT * FROM administrator WHERE register_number = '.$nip.' AND admin_password = "'.$password.'"')->result_array();
        return $data[0];
    }
}
