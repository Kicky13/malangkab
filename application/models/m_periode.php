<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_periode extends CI_Model {

    public function __construct()
    {
        parent::__construct();
    }
    public function getDatatable()
    {
        $data = $this->db->query('SELECT * FROM periode')->result_array();
        return $data;
    }
    public function add($month, $year)
    {
        $data = array(
            'periode_id' => null,
            'periode_month' => $month,
            'periode_years' => $year
        );
        $this->db->insert('periode', $data);
    }
    public function authen()
    {
        $data = $this->db->query('SELECT MONTH(now()) AS mnt, YEAR(now()) AS yrs FROM periode LIMIT 1')->result_array();
        if ($data[0]['mnt'] > 0 && $data[0]['mnt'] <= 6){
            $month = 'JAN - JUN';
        } else {
            $month = 'JUL - DES';
        }
        $now = $this->db->query('SELECT * FROM periode WHERE periode_month = "'.$month.'" AND periode_years = '.$data[0]['yrs'])->num_rows();
        if ($now < 1){
            $this->add($month, $data[0]['yrs']);
            $result = 'success';
        } else {
            $result = 'failed';
        }
        return $result;
    }
    public function getNowperiode()
    {
        $data = $this->db->query('SELECT MONTH(CURDATE()) AS mnt, YEAR(CURDATE()) AS yrs FROM periode')->result_array();
        if ($data[0]['mnt'] > 0 && $data[0]['mnt'] <= 6){
            $month = 'JAN - JUN';
        } else {
            $month = 'JUL - DES';
        }
        $now = $this->db->query('SELECT * FROM periode WHERE periode_month = "'.$month.'" AND periode_years = '.$data[0]['yrs'])->result_array();
        return $now[0]['periode_id'];
    }
}