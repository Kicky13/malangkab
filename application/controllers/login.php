<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_login');
        $this->load->library('session');
    }
    public function index()
    {
        if (isset($_SESSION['loggedIn'])){
            redirect('/dashboard');
        } else {
            $this->load->view('login');
        }
    }
    public function login()
    {
        $nip = $_POST['nip'];
        $password = $_POST['password'];
        $count = $this->m_login->validationAdmin($nip, $password);
        if ($count >= 1) {
            $data = $this->m_login->getDataadmin($nip, $password);
            $_SESSION['nip'] = $nip;
            $_SESSION['id'] = $data['admin_id'];
            $_SESSION['level'] = $data['admin_level'];
            $_SESSION['name'] = $data['admin_name'];
            $_SESSION['address'] = $data['admin_address'];
            $_SESSION['loggedIn'] = true;
            redirect('/dashboard');
        } else {
            echo 'Cannot find any admin account, please <a href="'.base_url('index.php/login').'">CLICK HERE</a> to re-login';
        }
    }
    public function logout()
    {
        unset($_SESSION['nip']);
        unset($_SESSION['id']);
        unset($_SESSION['level']);
        unset($_SESSION['loggedIn']);
        redirect('/login');
    }
}
