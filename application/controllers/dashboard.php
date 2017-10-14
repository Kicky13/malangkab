<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_sites');
        $this->load->library('session');
    }

    public function index()
    {
        if (isset($_SESSION['loggedIn'])){
            if ($_SESSION['level'] == 1){
                $this->load->view('superadmin/dashboard');
            } else if ($_SESSION['level'] == 2){
                $site = $this->m_sites->getSites();
                $this->load->view('admin/dashboard', array('sites' => $site));
            } else {
                echo 'Forbidden Access';
            }
        } else {
            redirect('/login');
        }
    }
}
