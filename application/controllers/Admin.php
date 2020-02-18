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
        $data['title'] = 'Dashboard - DirosApp';
        $data['content'] = 'admin/dashboard';
        $data['user'] = sesi($this->session->userdata('role_id'), $this->session->userdata('email') );
        login_admin($data['user']['user_role']);
        $data['jumlah_admin'] = $this->db->get('tb_admin')->num_rows();
        $data['jumlah_user'] = $this->db->get('tb_user')->num_rows();
        $data['jumlah_ustadz'] = $this->db->get('tb_ustadz')->num_rows();
        $this->load->view('admin/index', $data);
    }

    public function dataAdmin()
    {
            $data['title'] = 'Data Admin - DirosApp';
            $data['content'] = 'admin/data-admin';
            $data['admin'] = $this->db->get('tb_admin')->result();
            $data['user'] = sesi($this->session->userdata('role_id'), $this->session->userdata('email') );
            login_admin($data['user']['user_role']);
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
            $data['user'] = sesi($this->session->userdata('role_id'), $this->session->userdata('email') );
            login_admin($data['user']['user_role']);
            $this->load->view('admin/index', $data);
        } else {
            $this->admin_model->tambah_admin();
            redirect('admin/dataadmin');
        }
    }

    public function editAdmin()
    {

    }

    public function hapusAdmin($id_admin)
    {
        $data['id_admin'] = $id_admin;
        $this->admin_model->hapus($data);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil Dihapus!</div>');
        redirect('admin/dataadmin');
    }
    
}
