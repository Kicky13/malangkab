<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Report extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_report');
        $this->load->library('session');
    }

    public function response()
    {
        if (isset($_SESSION['loggedIn'])) {
            if ($_SESSION['level'] == 1) {
                $web = $this->m_report->getWeb();
                $this->load->view('superadmin/responseView', array('web' => $web));
            } else {
                echo 'Forbidden Access';
            }
        } else {
            redirect('/login');
        }
    }

    public function getDataRespondents($id)
    {
        $data = $this->m_report->getDataRespondents($id);
        $no = 1;
        foreach ($data as $value) {
            echo '<tr>
                    <td class="text-center">'.$no++.'</td>
                    <td>'.$value['respondent_name'].'</td>
                    <td>'.$value['respondent_age'].'</td>
                    <td>'.$value['respondent_datecreated'].'</td>
                    <td class="td-actions text-center">
                        <a href="'.base_url('index.php/report/responseDetail/'.$value['respondent_id']).'"
                            type="button" rel="tooltip" class="btn btn-success btn-simple">
                            <i class="material-icons">remove_red_eye</i>
                        </a>
                    </td>
                  </tr>';
        }
    }

    public function resultAnalysis($id)
    {
        if (isset($_SESSION['loggedIn'])) {
            if ($_SESSION['level'] == 1) {
                $count = $this->m_report->getCountresponse($id);
                $data = $this->m_report->getQualdata($id);
                $web = $this->m_report->getWeb();
                $this->load->view('superadmin/analysis', array('data' => $data, 'total' => $count, 'web' => $web, 'id' => $id));
            } else {
                echo 'Forbidden Access';
            }
        } else {
            redirect('/login');
        }
    }

    public function responseDetail($id)
    {
        if (isset($_SESSION['loggedIn'])) {
            if ($_SESSION['level'] == 1) {
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
        if (isset($_SESSION['loggedIn'])) {
            if ($_SESSION['level'] == 1) {
                $count = $this->m_report->countQual();
                if ($count == 0) {
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
