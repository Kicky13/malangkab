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
                $web = $this->m_questionaire->getWeb();
                $this->load->view('admin/web', array('web' => $web));
            } else {
                echo 'Forbidden Access';
            }
        } else {
            $web = $this->m_questionaire->getWeb();
            $this->load->view('public/bio', array('web' => $web));
        }
    }

    public function adminQuestionaire($web)
    {
        if (isset($_SESSION['loggedIn'])) {
            if ($_SESSION['level'] == 2) {
                $data = $this->m_questionaire->getQuestion();
                $profil = $this->m_questionaire->getProfile($_SESSION['id'], $web);
                $this->load->view('admin/questionnaire', array('data' => $data, 'profile' => $profil));
            } else {
                echo 'Forbidden Access';
            }
        } else {
            redirect('/login');
        }
    }

    public function response()
    {
        $name = $_POST['name'];
        $age = $_POST['age'];
        $address = $_POST['address'];
        $web = $_POST['web'];
        $url = $this->m_questionaire->getUrl($web);
        $bio = array(
            'name' => $name,
            'age' => $age,
            'address' => $address,
            'web' => $web,
            'url' => $url
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
        $web = $_POST['web'];
        $label = $_POST['label'];
        $question = $this->m_questionaire->getQuestion();
        $periode = $this->m_periode->getNowperiode();
        $id = $this->m_questionaire->respondent($name, $age, $address, $label);
        foreach ($question as $value) {
            $response = $_POST[$value['question_label']];
            $this->m_questionaire->submitResponse($web, $id, $periode, $value['question_id'], $response);
        }
        redirect('/questionaire');
    }
}
