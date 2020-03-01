<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tugas extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('tugas_model');
        $this->load->model('materi_model');
    }


    public function index()
    {
        $data['title'] = 'Data Tugas - DirosApp';
        $data['user'] = sesi($this->session->userdata('role_id'), $this->session->userdata('email'));
        $data['tugas'] = $this->tugas_model->getTugasByUstadz($data['user']['id_ustadz']); 
        $data['content'] = 'admin/tugas/index';
        $this->load->view('admin/index', $data);
    }

    public function tambahTugas()
    {
        $this->form_validation->set_rules('nama_berkas', 'Nama Berkas', 'required');

        $data['user'] = sesi($this->session->userdata('role_id'), $this->session->userdata('email'));
        $data['progress_belajar'] = $this->materi_model->get_progress_belajar($data['user']['id_user']);
        if ($this->form_validation->run() == false) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">File tugas belum dipilih!</div>');
            redirect('materi/pertemuan/'.$data['progress_belajar']['id_materi']);
        } else {
            $this->tugas_model->tambahTugas(); 
            redirect('materi/pertemuan/'.$data['progress_belajar']['id_materi']);
        }
        
    }

    public function editTugas($id_tugas)
    {
        $this->form_validation->set_rules('penilaian', 'Penilaian', 'trim|required');
        $this->form_validation->set_rules('komentar', 'Komentar', 'trim|required');
        $this->form_validation->set_rules('status', 'Status', 'trim|required');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Data Tugas - DirosApp';
            $data['user'] = sesi($this->session->userdata('role_id'), $this->session->userdata('email'));
            $data['detail_tugas'] = $this->tugas_model->detailTugas($id_tugas);
            $data['content'] = 'admin/tugas/detail_tugas';
            $this->load->view('admin/index', $data);
        } else {
            if ($this->input->post('status') == 'Lulus') {
                $this->tugas_model->editProgress();
            }
            $this->tugas_model->editTugas($id_tugas);

            redirect('tugas');
        }
    }

    public function hapusTugas()
    {
        # code...
    }

    public function detailTugas($id_tugas)
    {
        $data['title'] = 'Data Tugas - DirosApp';
        $data['user'] = sesi($this->session->userdata('role_id'), $this->session->userdata('email'));
        $data['detail_tugas'] = $this->tugas_model->detailTugas($id_tugas);
        $data['content'] = 'admin/tugas/detail_tugas';
        $this->load->view('admin/index', $data);
    }
}
