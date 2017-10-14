<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Report extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_report');
        $this->load->library('session');
    }
    public function response()
    {
        if (isset($_SESSION['loggedIn'])){
            if ($_SESSION['level'] == 1){
                $data = $this->m_report->getDataRespondents();
                $this->load->view('superadmin/responseView', array('data' => $data));
            } else {
                echo 'Forbidden Access';
            }
        } else {
            redirect('/login');
        }
    }
    public function resultAnalysis()
    {
        if (isset($_SESSION['loggedIn'])){
            if ($_SESSION['level'] == 1){
                $count = $this->m_report->getCountresponse();
                $data = $this->m_report->getQualdata();
                $this->load->view('superadmin/analysis', array('data' => $data, 'total' => $count));
            } else {
                echo 'Forbidden Access';
            }
        } else {
            redirect('/login');
        }
    }
    public function responseDetail($id)
    {
        if (isset($_SESSION['loggedIn'])){
            if ($_SESSION['level'] == 1){
                $data = $this->m_report->getDetailResponse($id);
                $bio = $this->m_report->getBio($id);
                $this->load->view('superadmin/responseDetail', array('data' => $data, 'bio' => $bio));
            } else {
                echo 'Forbidden Access';
            }
        } else {
            redirect('/login');
        }
    }
    public function analyzeQuestion()
    {
        if (isset($_SESSION['loggedIn'])){
            if ($_SESSION['level'] == 1){
                $count = $this->m_report->countQual();
                if ($count == 0){
                    $this->m_report->analyzeQuestion();
                } else {
                    $this->m_report->updateQual();
                }
                redirect('/report/resultAnalysis');
            } else {
                echo 'Forbidden Access';
            }
        } else {
            redirect('/login');
        }
    }
}
