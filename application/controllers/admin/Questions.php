<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Questions extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("question_model");
        $this->load->library('form_validation');

        //untuk mengecek apakah user sudah login atau belum.
        // $this->load->model("user_model");
        // if($this->user_model->isNotLogin()) redirect(site_url('admin/login'));
    }

    public function index()
    {
        $data["question"] = $this->question_model->getAll();
        $this->load->view("admin/question/list", $data);
    }

    // api get data untuk mobile
    public function index_get()
    {
        $data["question"] = $this->question_model->getAll();
        echo json_encode($data);
    }

    public function add()
    {
        $question = $this->question_model;
        $validation = $this->form_validation;
        $validation->set_rules($question->rules());

        if ($validation->run()) {
            $question->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $this->load->view("admin/question/new_form");
    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect('admin/questions');

        $question = $this->question_model;
        $validation = $this->form_validation;
        $validation->set_rules($question->rules());

        if ($validation->run()) {
            $question->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["question"] = $question->getById($id);
        if (!$data["question"]) show_404();

        $this->load->view("admin/question/edit_form", $data);
    }

    public function delete($id = null)
    {
        if (!isset($id)) show_404();

        if ($this->question_model->delete($id)) {
            redirect(site_url('admin/questions'));
        }
    }
}
