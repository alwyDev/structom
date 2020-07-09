<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Overview extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        // untuk mengecek apakah user sudah login atau belum.
        // $this->load->model("user_model");
        // if($this->user_model->isNotLogin()) redirect(site_url('admin/login'));
    }

    public function index()
    {
        // load view admin/overview.php
        $this->load->view("admin/overview");
    }
}
