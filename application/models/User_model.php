<?php

class User_model extends CI_Model
{
    private $_table = "user";

    public function doLogin()
    {
        $post = $this->input->post();

        // cari user berdasarkan email dan username
        $this->db->where('email', $post["email"])
            ->or_where('username', $post["email"]);
        $user = $this->db->get($this->_table)->row();

        // jika user terdaftar
        if ($user) {
            // periksa password-nya
            $isPasswordTrue = password_verify($post["password"], $user->password);
            // periksa role-nya
            // $isAdmin = $user->role == "admin";

            // jika password benar dan dia admin
            // if ($isPasswordTrue && $isAdmin) {
            if ($isPasswordTrue) {
                // login sukses!
                $this->session->set_userdata(['user_logged' => $user]);
                $this->_updateLastLogin($user->id);
                return true;
            }
        }

        // login gagal
        return false;
    }

    public function isNotLogin()
    {
        return $this->session->userdata('user_logged') === null;
    }

    private function _updateLastLogin($id)
    {
        $sql = "UPDATE {$this->_table} SET last_login=now() WHERE id={$id}";
        $this->db->query($sql);
    }


    // users(student) data
    public $id;
    public $nis;
    public $name;
    public $email;
    public $phone;
    // public $password;

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
                'field' => 'email',
                'label' => 'Email',
                'rules' => 'required'
            ],
            [
                'field' => 'phone',
                'label' => 'Phone',
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
        return $this->db->get_where($this->_table, ["id" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        // $this->id = '';
        $this->nis = $post["nis"];
        $this->name = $post["name"];
        $this->email = $post["email"];
        $this->phone = $post["phone"];
        // $this->password = $post["password"];
        return $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id = $post["id"];
        $this->nis = $post["nis"];
        $this->name = $post["name"];
        $this->email = $post["email"];
        $this->phone = $post["phone"];
        // $this->password = $post["password"];
        return $this->db->update($this->_table, $this, array('id' => $post['id']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("id" => $id));
    }
}
