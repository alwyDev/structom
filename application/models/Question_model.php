<?php defined('BASEPATH') or exit('No direct script access allowed');

class Question_model extends CI_Model
{
    private $_table = "questions";

    public $question_id;
    public $question;
    public $answer;

    public function rules()
    {
        return [
            [
                'field' => 'question',
                'label' => 'Question',
                'rules' => 'required'
            ],

            [
                'field' => 'answer',
                'label' => 'Answer',
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
        return $this->db->get_where($this->_table, ["question_id" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->question_id = uniqid();
        $this->question = $post["question"];
        $this->answer = $post["answer"];
        return $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->question_id = $post["id"];
        $this->question = $post["question"];
        $this->answer = $post["answer"];
        return $this->db->update($this->_table, $this, array('question_id' => $post['id']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("question_id" => $id));
    }
}
