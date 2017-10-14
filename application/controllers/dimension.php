<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dimension extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_dimension');
        $this->load->library('session');
    }
    public function viewDimension()
    {
        if (isset($_SESSION['loggedIn'])){
            if ($_SESSION['level'] == 1){
                $data = $this->m_dimension->getDatatable();
                $this->load->view('superadmin/dimensionView', array('data' => $data));
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
                $this->load->view('superadmin/DimensionAdd');
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
                $data = $this->m_dimension->getDataedit($id);
                $this->load->view('superadmin/DimensionEdit', array('data' => $data));
            } else {
                echo 'Access Forbidden';
            }
        } else {
            redirect('/login');
        }
    }
    public function add()
    {
        $label = $_POST['label'];
        $name = $_POST['name'];
        $expl = $_POST['expl'];
        $this->m_dimension->add($label, $name, $expl);
        redirect('/dimension/viewDimension');
    }
    public function update($id)
    {
        $name = $_POST['name'];
        $expl = $_POST['expl'];
        $this->m_dimension->update($id, $name, $expl);
        redirect('/dimension/viewDimension');
    }
}
