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
        return $data[0];
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
    public function add($dimension, $code, $question, $target)
    {
        $data = array(
            'question_id' => null,
            'dimension_id' => $dimension,
            'question_label' => $code,
            'question_target' => $target,
            'question_content' => $question
        );
        $this->db->insert('question', $data);
    }
    public function edit($id, $question, $target)
    {
        $this->db->set('question_target', $target);
        $this->db->set('question_content', $question);
        $this->db->where('question_id', $id);
        $this->db->update('question');
    }
}
