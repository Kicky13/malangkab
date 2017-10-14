<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_question extends CI_Model {

    public function __construct()
    {
        parent::__construct();
    }
    public function getDatatable()
    {
        $data = $this->db->query('SELECT * FROM question q JOIN dimension d ON q.dimension_id = d.dimension_id ORDER BY q.dimension_id')->result_array();
        return $data;
    }
    public function getDimension()
    {
        $data = $this->db->query('SELECT * FROM dimension')->result_array();
        return $data;
    }
    public function getDataedit($id)
    {
        $data = $this->db->query('SELECT * FROM question WHERE question_id = '.$id)->result_array();
        return $data;
    }
    public function getDimensionlabel($id)
    {
        $data = $this->db->query('SELECT * FROM dimension WHERE dimension_id = '.$id)->result_array();
        return $data[0]['dimension_label'];
    }
    public function countIndex($id)
    {
        $data = $this->db->query('SELECT * FROM question WHERE dimension_id = '.$id)->num_rows();
        return $data;
    }
    public function add($dimension, $code, $question)
    {
        $data = array(
            'question_id' => null,
            'dimension_id' => $dimension,
            'question_label' => $code,
            'question_content' => $question
        );
        $this->db->insert('question', $data);
    }
}
