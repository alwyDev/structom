<?php defined('BASEPATH') or exit('No direct script access allowed');

class Score_model extends CI_Model
{
    private $_table = "score";

    public $student_id;
    public $nis;
    public $name;
    public $score;

    public function rules()
    {
        return [
            [
                'field' => 'nis',
                'label' => 'NIS',
                'rules' => 'required'
            ],
            [
                'field' => 'name',
                'label' => 'Name',
                'rules' => 'required'
            ],

            [
                'field' => 'score',
                'label' => 'Score',
                'rules' => 'required'
            ]
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["student_id" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->student_id = '';
        $this->nis = $post["nis"];
        $this->name = $post["name"];
        $this->score = $post["score"];
        return $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->student_id = $post["id"];
        $this->nis = $post["nis"];
        $this->name = $post["name"];
        $this->score = $post["score"];
        return $this->db->update($this->_table, $this, array('student_id' => $post['id']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("student_id" => $id));
    }
}
