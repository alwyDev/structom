<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Scores extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("score_model");
        $this->load->library('form_validation');

        // //untuk mengecek apakah user sudah login atau belum.
        // $this->load->model("user_model");
        // if($this->user_model->isNotLogin()) redirect(site_url('admin/login'));
    }

    public function index()
    {
        $data["scores"] = $this->score_model->getAll();
        $this->load->view("admin/score/list", $data);
    }

    public function add()
    {
        $score = $this->score_model;
        $validation = $this->form_validation;
        $validation->set_rules($score->rules());

        if ($validation->run()) {
            $score->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $this->load->view("admin/score/new_form");
    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect('admin/scores');

        $score = $this->score_model;
        $validation = $this->form_validation;
        $validation->set_rules($score->rules());

        if ($validation->run()) {
            $score->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["score"] = $score->getById($id);
        if (!$data["score"]) show_404();

        $this->load->view("admin/score/edit_form", $data);
    }

    public function delete($id = null)
    {
        if (!isset($id)) show_404();

        if ($this->score_model->delete($id)) {
            redirect(site_url('admin/scores'));
        }
    }


    // API untuk mobile
    public function index_get()
    {
        $data["scores"] = $this->score_model->getAll();
        echo json_encode($data);
    }

    public function index_post()
    {
        // $post = $this->input->post();

        $data = array(
            // 'nis' => $post['nis'],
            // 'name' => $post['name'],
            // 'score' => $post['score']

            'nis' => $this->input->post('nis'),
            'name' => $this->input->post('name'),
            'score' =>$this->input->post('score')
        );
        $insert = $this->db->insert('score', $data);

        if ($insert) {
            echo json_encode($data);
        }
    }
}
