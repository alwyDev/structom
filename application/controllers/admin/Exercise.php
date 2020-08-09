<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Exercise extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("exercise_model");
        $this->load->library('form_validation');

        //untuk mengecek apakah user sudah login atau belum.
        // $this->load->model("user_model");
        // if($this->user_model->isNotLogin()) redirect(site_url('admin/login'));
    }

    public function index()
    {
        $data["exercise"] = $this->exercise_model->getAll();
        $this->load->view("admin/exercise/list", $data);
    }

    // api get data untuk mobile
    public function index_get()
    {
        $data["exercise"] = $this->exercise_model->getAll();
        echo json_encode($data);
    }

    public function add()
    {
        $exercise = $this->exercise_model;
        $validation = $this->form_validation;
        $validation->set_rules($exercise->rules());

        if ($validation->run()) {
            $exercise->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $this->load->view("admin/exercise/new_form");
    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect('admin/exercise');

        $exercise = $this->exercise_model;
        $validation = $this->form_validation;
        $validation->set_rules($exercise->rules());

        if ($validation->run()) {
            $exercise->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["exercise"] = $exercise->getById($id);
        if (!$data["exercise"]) show_404();

        $this->load->view("admin/exercise/edit_form", $data);
    }

    public function delete($id = null)
    {
        if (!isset($id)) show_404();

        if ($this->exercise_model->delete($id)) {
            redirect(site_url('admin/exercise'));
        }
    }
}
