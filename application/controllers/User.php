<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    function __construct()
    {
        parent::__construct();

        $this->load->model('user_model');
        $this->load->model('materi_model');

        $data['user'] = sesi($this->session->userdata('role_id'), $this->session->userdata('email') );
    }


    public function index()
    {
        is_logged_in();
        
        $data['user'] = sesi($this->session->userdata('role_id'), $this->session->userdata('email') );

        $data['title'] = 'Data Pengguna - DirosApp';
        $data['pengguna'] = $this->db->get('tb_user')->result();
        $data['content'] = 'admin/user/index';
        $this->load->view('admin/index', $data);
    }

    public function tambahUser()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'trim|required');
        $this->form_validation->set_rules('email', 'Email', 'trim|required');
        $this->form_validation->set_rules('jk', 'Jenis Kelamin', 'trim|required');
        $this->form_validation->set_rules('pekerjaan', 'Pekerjaan', 'trim|required');
        $this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir', 'trim|required');
        $this->form_validation->set_rules('tanggal_lahir', 'Tanggal Lahir', 'trim|required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'trim|required');
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]', [
            'matches' => 'Password dont match',
            'min_length' => 'password too short'
        ]);
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');
        if ($this->form_validation->run() == false) {
            $data['title'] = 'Daftar Pengguna - DirosApp';
            
            $data['user'] = sesi($this->session->userdata('role_id'), $this->session->userdata('email') );
            
            $this->load->view('admin/register', $data);
        } else {
            $this->user_model->tambah_user();
        }
    }

    public function editUser()
    {
        # code...

    }

    public function hapusUser()
    {
        # code...
    }

    public function profile()
    {
        $data['title'] = 'Profile - DirosApp';
        $data['user'] = sesi($this->session->userdata('role_id'), $this->session->userdata('email') );

        
        
        if ($this->session->userdata('role_id') == 3) {
            $data['progress_belajar'] = $this->materi_model->get_progress_belajar($data['user']['id_user']);
            $data['content'] = 'admin/user/profile';
        }else{
            $data['content'] = 'admin/profile';
        }

        

        $this->load->view('admin/index', $data);
    }
}
