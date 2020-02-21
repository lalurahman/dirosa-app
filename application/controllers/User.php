<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');
        $this->load->model('ustadz_model');
        $this->load->model('materi_model');
        $this->load->model('tugas_model');
        $this->load->model('admin_model');
    }


    public function index()
    {
        is_logged_in();

        $data['user'] = sesi($this->session->userdata('role_id'), $this->session->userdata('email'));

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

            $data['user'] = sesi($this->session->userdata('role_id'), $this->session->userdata('email'));

            $this->load->view('admin/register', $data);
        } else {
            $this->user_model->tambah_user();
        }
    }


    public function hapusUser($id_user)
    {
        $data['id_user'] = $id_user;
        $this->user_model->hapus($data);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil Dihapus!</div>');
        redirect('user');
    }

    public function profile()
    {
        $data['title'] = 'Profile - DirosApp';
        $data['user'] = sesi($this->session->userdata('role_id'), $this->session->userdata('email'));
        if ($this->session->userdata('role_id') == 3) {
            $data['progress_belajar'] = $this->materi_model->get_progress_belajar($data['user']['id_user']);
            $data['content'] = 'admin/user/profile';
        } else {
            $data['content'] = 'admin/profile';
        }
        $this->load->view('admin/index', $data);
    }

    public function tugas()
    {
        $data['title'] = 'Progress Belajar - DirosApp';
        $data['user'] = sesi($this->session->userdata('role_id'), $this->session->userdata('email'));
        $data['tugas_user'] = $this->tugas_model->getTugasUser($data['user']['id_user']);
        if ($this->session->userdata('role_id') == 3) {
            $data['progress_belajar'] = $this->materi_model->get_progress_belajar($data['user']['id_user']);
            $data['content'] = 'admin/user/tugas';
        } else {
            $data['content'] = 'admin/profile';
        }
        $this->load->view('admin/index', $data);
    }

    public function detailTugasUser($id_tugas)
    {
        $data['title'] = 'Data Tugas - DirosApp';

        $data['user'] = sesi($this->session->userdata('role_id'), $this->session->userdata('email'));
        $data['detail_tugas_user'] = $this->tugas_model->detailTugasUser($id_tugas);
        if ($this->session->userdata('role_id') == 3) {
            $data['progress_belajar'] = $this->materi_model->get_progress_belajar($data['user']['id_user']);
            $data['content'] = 'admin/user/detail_tugas_user';
        } else {
            $data['content'] = 'admin/profile';
        }
        $this->load->view('admin/index', $data);
    }

    public function editProfile()
    {

        if ($this->session->userdata['role_id'] == 3) {

            $this->form_validation->set_rules('nama', 'Nama', 'trim|required');
            $this->form_validation->set_rules('email', 'Email', 'trim|required');
            $this->form_validation->set_rules('jk', 'Jenis Kelamin', 'trim|required');
            $this->form_validation->set_rules('pekerjaan', 'Pekerjaan', 'trim|required');
            $this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir', 'trim|required');
            $this->form_validation->set_rules('tanggal_lahir', 'Tanggal Lahir', 'trim|required');
            $this->form_validation->set_rules('alamat', 'Alamat', 'trim|required');

            if ($this->form_validation->run() == false) {
                $data['title'] = 'Edit Pengguna - DirosApp';
                $data['user'] = $this->db->get('tb_user')->result();
                $data['content'] = 'admin/user/edit-user';
                $data['user'] = sesi($this->session->userdata('role_id'), $this->session->userdata('email'));
                $data['progress_belajar'] = $this->materi_model->get_progress_belajar($data['user']['id_user']);

                $this->load->view('admin/index', $data);
            } else {
                $this->user_model->editUser();
            }
        } else if ($this->session->userdata['role_id'] == 2) {

            $this->form_validation->set_rules('nama', 'Nama', 'trim|required');

            if ($this->form_validation->run() == false) {
                $data['title'] = 'Edit Ustadz - DirosApp';
                $data['ustadz'] = $this->db->get('tb_ustadz')->result();
                $data['content'] = 'admin/ustadz/edit-ustadz';
                $data['user'] = sesi($this->session->userdata('role_id'), $this->session->userdata('email'));
                // login_admin($data['user']['user_role']);
                $this->load->view('admin/index', $data);
            } else {
                $this->ustadz_model->editUstadz();
            }
        } else {
            $this->form_validation->set_rules('nama', 'Nama', 'trim|required');

            if ($this->form_validation->run() == false) {
                $data['title'] = 'Edit Admin - DirosApp';
                $data['admin'] = $this->db->get('tb_admin')->result();
                $data['content'] = 'admin/edit-data-admin';
                $data['user'] = sesi($this->session->userdata('role_id'), $this->session->userdata('email'));
                login_admin($data['user']['user_role']);
                $this->load->view('admin/index', $data);
            } else {
                $this->admin_model->editAdmin();
            }
        }
    }

public function detailuser($id)
{
    
    $data['title'] = 'Detail Tugas - DirosApp';

    $data['user'] = $this->user_model->get_userbyid($id);

    $data['content'] = 'admin/user/detail_user';

    $this->load->view('admin/index', $data);
}

}
