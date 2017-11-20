<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sites extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->model('m_sites');
    }
    public function index()
    {
        if (isset($_SESSION['loggedIn'])){
            if ($_SESSION['level'] == 1){
                $data = $this->m_sites->getSites();
                $this->load->view('superadmin/sitesView', array('data' => $data));
            } else {
                echo 'Forbidden Access';
            }
        } else {
            redirect('/login');
        }
    }
    public function formEdit($id)
    {
        if (isset($_SESSION['loggedIn'])){
            if ($_SESSION['level'] == 1){
                $data = $this->m_sites->getDetailSites($id);
                $this->load->view('superadmin/sitesEdit', array('data' => $data));
            } else {
                echo 'Forbidden Access';
            }
        } else {
            redirect('/login');
        }
    }
    public function formAdd()
    {
        if (isset($_SESSION['loggedIn'])){
            if ($_SESSION['level'] == 1){
                $this->load->view('superadmin/sitesAdd');
            } else {
                echo 'Forbidden Access';
            }
        } else {
            redirect('/login');
        }
    }
    public function add()
    {
        $name = $_POST['nama'];
        $city = $_POST['city'];
        $province = $_POST['province'];
        $description = $_POST['description'];
        $url = $_POST['url'];
        $this->m_sites->add($name, $city, $province, $description, $url);
        redirect('/sites');
    }
    public function edit($id)
    {
        $name = $_POST['nama'];
        $city = $_POST['city'];
        $province = $_POST['province'];
        $description = $_POST['description'];
        $url = $_POST['url'];
        $this->m_sites->edit($id, $name, $city, $province, $description, $url);
        redirect('/sites');
    }
}
