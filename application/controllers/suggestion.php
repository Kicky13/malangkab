<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Suggestion extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_suggest');
        $this->load->library('session');
    }
    public function index()
    {
        if (isset($_SESSION['loggedIn'])){
            if ($_SESSION['level'] == 1){
                $data = $this->m_suggest->getDimensionData();
                $this->load->view('superadmin/suggest', array('data' => $data));
            } else {
                echo 'Forbidden Accesss';
            }
        } else {
            redirect('/login');
        }
    }
    public function dimensionDetail($dimension)
    {
        if (isset($_SESSION['loggedIn'])){
            if ($_SESSION['level']){
                $count = $this->m_suggest->countAlldata($dimension);
                $weak = $this->m_suggest->getWeakData($dimension);
                $medium = $this->m_suggest->getMediumData($dimension);
                $strong = $this->m_suggest->getStrongData($dimension);
                $this->load->view('superadmin/suggestDetail', array('count' => $count, 'weak' => $weak, 'medium' => $medium, 'strong' => $strong));
            } else {
                echo 'Forbidden Access';
            }
        } else {
            redirect('/login');
        }
    }
}
