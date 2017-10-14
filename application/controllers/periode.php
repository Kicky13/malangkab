<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Periode extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_periode');
        $this->load->library('session');
    }

    public function index()
    {
        if (isset($_SESSION['loggedIn'])) {
            if ($_SESSION['level'] == 1) {
                $periode = $this->m_periode->getDatatable();
                $this->load->view('superadmin/periodeView', array('data' => $periode));
            } else {
                echo 'Forbidden Access';
            }
        } else {
            redirect('/login');
        }
    }

    public function add()
    {
        $value = $this->m_periode->authen();
        if ($value == 'success') {
            redirect('/periode');
        } else {
            $this->index();
        }
    }
}
