<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('admin_model');
    }

    public function index()
    {
        // cek jika ada session 
        if ($this->session->userdata('role_id') == 1) {
            $data['title'] = 'Dashboard - DirosApp';
            $data['content'] = 'admin/dashboard';

            $this->load->view('admin/index', $data);
        } else {
            redirect('auth');
        }
    }

    public function dataAdmin()
    {
        $data['title'] = 'Data Admin - DirosApp';
        $data['content'] = 'admin/data-admin';
        $data['admin'] = $this->db->get('tb_admin')->result();
        $this->load->view('admin/index', $data);
    }

    public function tambahAdmin()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'trim|required');
        $this->form_validation->set_rules('email', 'Email', 'trim|required');
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]', [
            'matches' => 'Password dont match',
            'min_length' => 'password too short'
        ]);
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Tambah Data Admin - DirosApp';
            $data['content'] = 'admin/tambah_data_admin';
            $this->load->view('admin/index', $data);
        } else {
            $data = [
                'nama' => htmlspecialchars($this->input->post('nama')),
                'email' => htmlspecialchars($this->input->post('email')),
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'user_role' => 1,
                'is_active' => 1,
                'foto' => 'default.jpg',
                'date_created' => time("Y/m/d H:iP")

            ];

            $this->db->insert('tb_admin', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil Ditambah!</div>');
            redirect('admin/dataadmin');
        }
    }

    public function editAdmin()
    {
        # code...

    }

    public function hapusAdmin($id_admin)
    {
        $data['id_admin'] = $id_admin;
        $this->admin_model->hapus($data);

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil Dihapus!</div>');
        redirect('admin/dataadmin');
    }
}
