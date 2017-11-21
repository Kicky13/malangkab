<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Question extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_question');
        $this->load->library('session');
    }
    public function viewQuestion()
    {
        if (isset($_SESSION['loggedIn'])){
            if ($_SESSION['level'] == 1){
                $data = $this->m_question->getDatatable();
                $this->load->view('superadmin/questionView', array('data' => $data));
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
                $dimension = $this->m_question->getDimension();
                $this->load->view('superadmin/questionAdd', array('dimension' => $dimension));
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
                $data = $this->m_question->getDataedit($id);
                $this->load->view('superadmin/questionEdit', array('data' => $data));
            } else {
                echo 'Forbidden Access';
            }
        } else {
            redirect('/login');
        }
    }
    public function add()
    {
        $dimension = $_POST['dimension'];
        $code = $this->getCode($dimension);
        $question = $_POST['question'];
        $target = $_POST['target'];
        $this->m_question->add($dimension, $code, $question, $target);
        redirect('/question/viewQuestion');
    }
    public function edit($id)
    {
        $question = $_POST['question'];
        $target = $_POST['target'];
        $this->m_question->edit($id, $question, $target);
    }
    public function getCode($id)
    {
        $alpha = $this->m_question->getDimensionlabel($id);
        $index = $this->m_question->countIndex($id);
        $code = $alpha.''.($index+1);
        return $code;
    }
}
