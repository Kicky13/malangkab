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
    public function getDimensionGraph($site)
    {
        $data = array();
        $dimension = $this->getDimensionData();
        foreach ($dimension as $value){
            $tmp = $this->countAlldata($value['dimension_id'], $site);
            $pp = $tmp['primary']*30;
            $ps = $tmp['secondary']*20;
            $pt = $tmp['tersier']*0;
            $poin = $pp + $ps + $pt;
            $data[] = array(
                'dimension_label' => $value['dimension_label'],
                'dimension_name' => $value['dimension_name'],
                'dimension_point' => $poin,
                'dimension_primary' => $pp,
                'dimension_secondary' => $ps,
                'dimension_tersier' => $pt
            );
        }
        return $data;
    }
    public function getGAPGraph($site)
    {
        $this->load->model('m_periode');
        $periode = $this->m_periode->getNowperiode();
        $data = $this->db->query('SELECT * FROM question_analysis qa JOIN question q ON qa.question_id = q.question_id WHERE site_id = '.$site.' AND periode_id = '.$periode.' ORDER BY qual_gap DESC LIMIT 5')->result_array();
        return $data;
    }
    public function getGFGraph($site)
    {
        $this->load->model('m_periode');
        $periode = $this->m_periode->getNowperiode();
        $data = $this->db->query('SELECT ROUND(AVG(qa.qual_fact), 2) AS avg_f, ROUND(AVG(qa.qual_goal), 2) AS avg_g, d.dimension_name, d.dimension_label FROM question_analysis qa JOIN question q ON qa.question_id = q.question_id JOIN dimension d ON q.dimension_id = d.dimension_id WHERE qa.site_id = '.$site.' AND qa.periode_id = '.$periode.' GROUP BY d.dimension_id')->result_array();
        return $data;
    }
}
