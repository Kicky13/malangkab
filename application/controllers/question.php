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
    public function add()
    {
        $dimension = $_POST['dimension'];
        $code = $this->getCode($dimension);
        $question = $_POST['question'];
        $this->m_question->add($dimension, $code, $question);
        redirect('/question/viewQuestion');
    }
    public function getCode($id)
    {
        $alpha = $this->m_question->getDimensionlabel($id);
        $index = $this->m_question->countIndex($id);
        $code = $alpha.''.($index+1);
        return $code;
    }
}
