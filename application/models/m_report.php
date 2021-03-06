<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_report extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function getDataRespondents($id)
    {
        $data = $this->db->query('SELECT * FROM respondents rp JOIN response r ON rp.respondent_id = r.respondent_id WHERE r.site_id = ' . $id . ' GROUP BY rp.respondent_id ORDER BY respondent_label')->result_array();
        return $data;
    }

    public function getDetailresponse($id)
    {
        $data = $this->db->query('SELECT * FROM response r JOIN question q ON r.question_id = q.question_id WHERE respondent_id = ' . $id . ' ORDER BY q.dimension_id')->result_array();
        return $data;
    }

    public function getBio($id)
    {
        $data = $this->db->query('SELECT * FROM respondents WHERE respondent_id = ' . $id)->result_array();
        return $data[0];
    }

    public function getCountresponse($id)
    {
        $this->load->model('m_periode');
        $periodeID = $this->m_periode->getNowperiode();
        $periode = $this->db->query('SELECT * FROM periode WHERE periode_id = ' . $periodeID)->result_array();
        if ($periode[0]['periode_month'] == 'JAN - JUN') {
            $start = $periode[0]['periode_years'] . '-01-01';
            $end = $periode[0]['periode_years'] . '-06-30';
        } else {
            $start = $periode[0]['periode_years'] . '-07-01';
            $end = $periode[0]['periode_years'] . '-12-31';
        }
        $pub = $this->db->query('SELECT * FROM respondents rp JOIN response r ON rp.respondent_id = r.respondent_id WHERE (rp.respondent_datecreated >= "' . $start . '" AND rp.respondent_datecreated <= "' . $end . '") AND rp.respondent_label = "PUB" AND r.site_id = ' . $id . ' GROUP BY rp.respondent_id')->num_rows();
        $adm = $this->db->query('SELECT * FROM respondents rp JOIN response r ON rp.respondent_id = r.respondent_id WHERE (rp.respondent_datecreated >= "' . $start . '" AND rp.respondent_datecreated <= "' . $end . '") AND rp.respondent_label = "ADM" AND r.site_id = ' . $id . ' GROUP BY rp.respondent_id')->num_rows();
        $data = array(
            'fact' => $pub,
            'goal' => $adm
        );
        return $data;
    }

    public function getQualdata($id)
    {
        $this->load->model('m_periode');
        $question = $this->db->query('SELECT * FROM question ORDER BY dimension_id')->result_array();
        $periode = $this->m_periode->getNowperiode();
        foreach ($question as $value) {
            $analysis = $this->db->query('SELECT * FROM question_analysis WHERE question_id = ' . $value['question_id'] . ' AND periode_id = ' . $periode . ' AND site_id = ' . $id)->result_array();
            $x = count($analysis);
            if ($x >= 1) {
                $data[] = array(
                    'id' => $value['question_id'],
                    'label' => $value['question_label'],
                    'fact' => $analysis[0]['qual_fact'],
                    'goal' => $analysis[0]['qual_goal'],
                    'gap' => $analysis[0]['qual_gap']
                );
            } else {
                $data[] = array(
                    'id' => $value['question_id'],
                    'label' => $value['question_label'],
                    'fact' => 'Not Calculated',
                    'goal' => 'Not Calculated',
                    'gap' => 'Not Calculated'
                );
            }
        }
        return $data;
    }

    public function countQual($id)
    {
        $this->load->model('m_periode');
        $periode = $this->m_periode->getNowperiode();
        $data = $this->db->query('SELECT * FROM question_analysis WHERE periode_id = ' . $periode . ' AND site_id = ' . $id)->num_rows();
        return $data;
    }

    public function updateQual($id)
    {
        $this->load->model('m_periode');
        $periode = $this->m_periode->getNowperiode();
        $this->db->where('periode_id', $periode);
        $this->db->where('site_id', $id);
        $this->db->delete('question_analysis');
        $this->analyzeQuestion($id);
    }

    public function analyzeQuestion($id)
    {
        $this->load->model('m_periode');
        $periode = $this->m_periode->getNowperiode();
        $question = $this->db->query('SELECT * FROM question ORDER BY dimension_id')->result_array();
        foreach ($question as $value) {
            $fact = $this->db->query('SELECT SUM(response_value)/COUNT(*) AS fact FROM response r JOIN respondents rt ON r.respondent_id = rt.respondent_id WHERE r.site_id = ' . $id . ' AND question_id = ' . $value['question_id'] . ' AND periode_id = ' . $periode . ' AND respondent_label = "PUB"')->result_array();
            $goal = $this->db->query('SELECT SUM(response_value)/COUNT(*) AS goal FROM response r JOIN respondents rt ON r.respondent_id = rt.respondent_id WHERE r.site_id = ' . $id . ' AND question_id = ' . $value['question_id'] . ' AND periode_id = ' . $periode . ' AND respondent_label = "ADM"')->result_array();
            $data = array(
                'qual_id' => null,
                'site_id' => $id,
                'question_id' => $value['question_id'],
                'periode_id' => $periode,
                'qual_fact' => $fact[0]['fact'],
                'qual_goal' => $goal[0]['goal'],
                'qual_gap' => $goal[0]['goal'] - $fact[0]['fact']
            );
            $this->db->insert('question_analysis', $data);
        }
    }

    public function getWeb()
    {
        $data = $this->db->query('SELECT * FROM sites')->result_array();
        return $data;
    }
}
