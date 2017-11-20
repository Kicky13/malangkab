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
    public function getDetailSites($id)
    {
        $data = $this->db->query('SELECT * FROM sites WHERE site_id = '.$id)->result_array();
        return $data[0];
    }
    public function add($name, $city, $province, $description, $url)
    {
        $data = array(
            'site_id' => null,
            'site_name' => $name,
            'site_description' => $description,
            'site_city' => $city,
            'site_province' => $province,
            'site_url' => $url
        );
        $this->db->insert('sites', $data);
    }
    public function edit($id, $name, $city, $province, $description, $url)
    {
        $this->db->set('site_name', $name);
        $this->db->set('site_description', $description);
        $this->db->set('site_city', $city);
        $this->db->set('site_province', $province);
        $this->db->set('site_url', $url);
        $this->db->where('site_id', $id);
        $this->db->update('sites');
    }
}
