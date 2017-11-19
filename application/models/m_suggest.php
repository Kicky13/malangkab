<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_suggest extends CI_Model {

    public function __construct()
    {
        parent::__construct();
    }
    public function getDimensionData()
    {
        $data = $this->db->query('SELECT * FROM dimension')->result_array();
        return $data;
    }
    public function getSites()
    {
        $data = $this->db->query('SELECT * FROM sites')->result_array();
        return $data;
    }
    public function getMaintainData($id, $site)
    {
        $this->load->model('m_periode');
        $periode = $this->m_periode->getNowperiode();
        $data = $this->db->query('SELECT * FROM question_analysis qa JOIN question q ON qa.question_id = q.question_id WHERE (qa.qual_gap < 0) AND q.dimension_id = '.$id.' AND qa.site_id = '.$site.' AND qa.periode_id = '.$periode)->result_array();
        return $data;
    }
    public function getWeakData($id, $site)
    {
        $this->load->model('m_periode');
        $periode = $this->m_periode->getNowperiode();
        $data = $this->db->query('SELECT * FROM question_analysis qa JOIN question q ON qa.question_id = q.question_id WHERE qa.qual_gap <= 0.33 AND q.dimension_id = '.$id.' AND qa.site_id = '.$site.' AND qa.periode_id = '.$periode)->result_array();
        return $data;
    }
    public function getMediumData($id, $site)
    {
        $this->load->model('m_periode');
        $periode = $this->m_periode->getNowperiode();
        $data = $this->db->query('SELECT * FROM question_analysis qa JOIN question q ON qa.question_id = q.question_id WHERE (qa.qual_gap >= 0.34 AND qa.qual_gap <= 0.66) AND q.dimension_id = '.$id.' AND qa.site_id = '.$site.' AND qa.periode_id = '.$periode)->result_array();
        return $data;
    }
    public function getStrongData($id, $site)
    {
        $this->load->model('m_periode');
        $periode = $this->m_periode->getNowperiode();
        $data = $this->db->query('SELECT * FROM question_analysis qa JOIN question q ON qa.question_id = q.question_id WHERE (qa.qual_gap > 0.66) AND q.dimension_id = '.$id.' AND qa.site_id = '.$site.' AND qa.periode_id = '.$periode)->result_array();
        return $data;
    }
    public function countAlldata($id, $site)
    {
        $this->load->model('m_periode');
        $periode = $this->m_periode->getNowperiode();
        $strong = count($this->getStrongData($id, $site));
        $medium = count($this->getMediumData($id, $site));
        $weak = $this->db->query('SELECT * FROM question_analysis qa JOIN question q ON qa.question_id = q.question_id WHERE (qa.qual_gap <= 0.33) AND q.dimension_id = '.$id.' AND qa.site_id = '.$site.' AND qa.periode_id = '.$periode)->num_rows();
        $dimension = $this->db->query('SELECT * FROM dimension WHERE dimension_id = '.$id)->result_array();
        $all = $strong + $medium + $weak;
        $data = array(
            'dimension' => $dimension[0]['dimension_name'],
            'primary' => $strong,
            'secondary' => $medium,
            'tersier' => $weak,
            'all' => $all
        );
        return $data;
    }
}
