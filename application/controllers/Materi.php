<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Materi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('materi_model');

        $data['user'] = sesi($this->session->userdata('role_id'), $this->session->userdata('email'));
    }


    public function index()
    {
        $data['title'] = 'Data Materi - DirosApp';
        $data['materi'] = $this->db->get('tb_materi')->result();
        $data['content'] = 'admin/materi/index';
        $data['jumlah_materi'] = $this->materi_model->jumlah_materi();

        $data['user'] = sesi($this->session->userdata('role_id'), $this->session->userdata('email'));
        $this->load->view('admin/index', $data);
    }

    public function tambahMateri()
    {
        $this->form_validation->set_rules('pertemuan', 'Pertemuan', 'trim|required');
        $this->form_validation->set_rules('penjelasan_pertemuan', 'Penjelasan Pertemuan', 'trim|required');


        if ($this->form_validation->run() == false) {
            $data['title'] = 'Tambah Materi - DirosApp';
            $data['materi'] = $this->db->get('tb_materi')->result();
            $data['content'] = 'admin/materi/tambah';
            $data['user'] = sesi($this->session->userdata('role_id'), $this->session->userdata('email'));
            login_admin($data['user']['user_role']);
            $this->load->view('admin/index', $data);
        } else {
            $this->materi_model->tambah_materi();
            redirect('materi');
        }
    }

    public function editMateri()
    {
        $this->form_validation->set_rules('pertemuan', 'Pertemuan', 'trim|required');
        $this->form_validation->set_rules('penjelasan_pertemuan', 'Penjelasan Pertemuan', 'trim|required');


        if ($this->form_validation->run() == false) {
            $data['title'] = 'Edit Materi - DirosApp';
            $data['materi'] = $this->db->get('tb_materi')->result();
            $data['content'] = 'admin/materi/tambah';
            $data['user'] = sesi($this->session->userdata('role_id'), $this->session->userdata('email'));
            login_admin($data['user']['user_role']);
            $this->load->view('admin/index', $data);
        } else {
            $this->materi_model->tambah_materi();
            redirect('materi');
        }
    }


    public function pertemuan($i)
    {
        if ($this->session->userdata('role_id')) {
            $data['user'] = sesi($this->session->userdata('role_id'), $this->session->userdata('email'));
            $data['progress_belajar'] = $this->materi_model->get_progress_belajar($data['user']['id_user']);
            if ($i > $data['progress_belajar']['id_materi']) {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Selesaikan Dulu Pertemuan Ini</div>');
                redirect('materi/pertemuan/' . $data['progress_belajar']['id_materi']);
            }

            $data['title'] = 'Pertemuan';
            $data['materi'] = $this->materi_model->get_materi($i);
            $data['content'] = 'admin/pertemuan/dirosa';
            $data['cek_tugas'] = $this->materi_model->cek_tugas($data['user']['id_user'], $i);
            $data['progress_belajar_aktiv'] = $i;
            $this->load->view('admin/index', $data);
        } else {
            redirect('auth');
        }
    }
}
