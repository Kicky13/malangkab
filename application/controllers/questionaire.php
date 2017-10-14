<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Questionaire extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_questionaire');
        $this->load->library('session');
    }

    public function index()
    {
        if (isset($_SESSION['loggedIn'])) {
            if ($_SESSION['level'] == 2) {
                $data = $this->m_questionaire->getQuestion();
                $profil = $this->m_questionaire->getProfile($_SESSION['id']);
//                print json_encode($profil);
                $this->load->view('admin/questionnaire', array('data' => $data, 'profile' => $profil));
            } else {
                echo 'Forbidden Access';
            }
        } else {
            $this->load->view('public/bio');
        }
    }
    public function response()
    {
        $name = $_POST['name'];
        $age = $_POST['age'];
        $address = $_POST['address'];
        $bio = array(
            'name' => $name,
            'age' => $age,
            'address' => $address
        );
        $data = $this->m_questionaire->getQuestion();
        $this->load->view('public/questionaire', array('bio' => $bio, 'data' => $data));
    }

    public function submitResponse()
    {
        $this->load->model('m_periode');
        $name = $_POST['name'];
        $age = $_POST['age'];
        $address = $_POST['address'];
        $label = $_POST['label'];
        $question = $this->m_questionaire->getQuestion();
        $periode = $this->m_periode->getNowperiode();
        $id = $this->m_questionaire->respondent($name, $age, $address, $label);
        foreach ($question as $value) {
            $response = $_POST[$value['question_label']];
            $this->m_questionaire->submitResponse($id, $periode, $value['question_id'], $response);
        }
        redirect('/questionaire');
    }
}
