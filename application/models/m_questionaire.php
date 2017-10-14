<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_questionaire extends CI_Model {

    public function __construct()
    {
        parent::__construct();
    }
    public function getQuestion()
    {
        $data = $this->db->query('SELECT * FROM question ORDER BY dimension_id')->result_array();
        return $data;
    }
    public function respondent($name, $age, $address, $label)
    {
        $now = $this->db->query('SELECT CURDATE() AS date FROM periode LIMIT 1')->result_array();
        $data = array(
            'respondent_id' => null,
            'respondent_label' => $label,
            'respondent_name' => $name,
            'respondent_age' => $age,
            'respondent_address' => $address,
            'respondent_datecreated' => $now[0]['date']
        );
        $this->db->insert('respondents', $data);
        $id = $this->db->query('SELECT * FROM respondents ORDER BY respondent_id DESC')->result_array();
        return $id[0]['respondent_id'];
    }
    public function getProfile($id, $web)
    {
        $profile = $this->db->query('SELECT * FROM administrator WHERE admin_id = '.$id)->result_array();
        $cek = $this->db->query('SELECT * FROM respondents rp JOIN response r ON rp.respondent_id = r.respondent_id WHERE respondent_name = "'.$profile[0]['admin_name'].'" AND respondent_label = "ADM" AND site_id = '.$web)->num_rows();
        if ($cek >= 1){
            $status = 'Nonactive';
        } else {
            $status = 'Active';
        }
        $data = array(
            'name' => $profile[0]['admin_name'],
            'age' => 0,
            'address' => $profile[0]['admin_address'],
            'status' => $status,
            'web' => $web
        );
        return $data;
    }
    public function submitResponse($site, $respondent, $periode, $question, $value)
    {
        $data = array(
            'response_id' => null,
            'site_id' => $site,
            'respondent_id' => $respondent,
            'periode_id' => $periode,
            'question_id' => $question,
            'response_value' => $value
        );
        $this->db->insert('response', $data);
    }
    public function getWeb()
    {
        $data = $this->db->query('SELECT * FROM sites')->result_array();
        return $data;
    }
    public function getUrl($site)
    {
        $data = $this->db->query('SELECT * FROM sites WHERE site_id = '.$site)->result_array();
        return $data[0]['site_url'];
    }
}
