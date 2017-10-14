<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_admin');
        $this->load->library('session');
    }
    public function index()
    {
        if (isset($_SESSION['loggedIn'])){
            if ($_SESSION['level'] == 1){
                $data = $this->m_admin->getDatatable();
                $this->load->view('superadmin/adminView', array('data' => $data));
            } else {
                echo 'Access Forbidden';
            }
        } else {
            redirect('/login');
        }
    }
    public function formAdd()
    {
        if (isset($_SESSION['loggedIn'])){
            if ($_SESSION['level'] == 1){
                $job = $this->m_admin->getJob();
                $this->load->view('superadmin/adminAdd', array('job' => $job));
            } else {
                echo 'Access Forbidden';
            }
        } else {
            redirect('/login');
        }
    }
    public function formEdit($id)
    {
        if (isset($_SESSION['loggedIn'])){
            if ($_SESSION['level'] == 1){
                $data = $this->m_admin->getDataedit($id);
                $job = $this->m_admin->getJob();
                $this->load->view('superadmin/adminEdit', array('job' => $job, 'data' => $data));
            } else {
                echo 'Access Forbidden';
            }
        } else {
            redirect('/login');
        }
    }
    public function add()
    {
        $nama = $_POST['nama'];
        $level = 2;
        $nip = $_POST['nip'];
        $job = $_POST['job'];
        $password = $_POST['password'];
        $address = $_POST['address'];
        $this->m_admin->add($level, $nama, $nip, $job, $password, $address);
        redirect('/admin');
    }
    public function edit($id)
    {
        $nama = $_POST['nama'];
        $nip = $_POST['nip'];
        $job = $_POST['job'];
        $address = $_POST['address'];
        $this->m_admin->update($id, $nama, $nip, $job, $address);
        redirect('/admin');
    }
}
