<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
    }
    public function index()
    {
        if (isset($_SESSION['loggedIn'])){
            $this->load->view('admin/dashboard');
        } else {
            $this->load->view('cover');
        }
    }
}
