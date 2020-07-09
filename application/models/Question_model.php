<?php defined('BASEPATH') or exit('No direct script access allowed');

class Question_model extends CI_Model
{
    private $_table = "question";

    public $quiz_id;
    public $question;
    public $choice_1;
    public $choice_2;
    public $choice_3;
    public $choice_4;
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
                'field' => 'choice_1',
                'label' => 'Choice_1',
                'rules' => 'required'
            ],
            [
                'field' => 'choice_2',
                'label' => 'Choice_2',
                'rules' => 'required'
            ],
            [
                'field' => 'choice_3',
                'label' => 'Choice_3',
                'rules' => 'required'
            ],
            [
                'field' => 'choice_4',
                'label' => 'Choice_4',
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
        return $this->db->get_where($this->_table, ["quiz_id" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        // $this->quiz_id = '';
        $this->question = $post["question"];
        $this->choice_1 = $post["choice_1"];
        $this->choice_2 = $post["choice_2"];
        $this->choice_3 = $post["choice_3"];
        $this->choice_4 = $post["choice_4"];
        $this->answer = $post["answer"];
        return $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->quiz_id = $post["id"];
        $this->question = $post["question"];
        $this->choice_1 = $post["choice_1"];
        $this->choice_2 = $post["choice_2"];
        $this->choice_3 = $post["choice_3"];
        $this->choice_4 = $post["choice_4"];
        $this->answer = $post["answer"];
        return $this->db->update($this->_table, $this, array('quiz_id' => $post['id']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("quiz_id" => $id));
    }
}
