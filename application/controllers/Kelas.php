<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kelas extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('tugas_model');
        $this->load->model('materi_model');
        $this->load->model('kelas_model');
        $this->load->model('ustadz_model');
    }

    public function index()
    {
        is_logged_in();

        $data['user'] = sesi($this->session->userdata('role_id'), $this->session->userdata('email'));

        $data['title'] = 'Data Kelas - DirosApp';
        $data['kelas'] = $this->kelas_model->getKelas();
        $data['content'] = 'admin/kelas/index';
        $this->load->view('admin/index', $data);
    }

    public function ubah($id)
    {
        $this->form_validation->set_rules('nama_user', 'Nama User', 'trim|required');
        if ($this->form_validation->run() == false) {

            $data['user'] = sesi($this->session->userdata('role_id'), $this->session->userdata('email'));
    
            $data['title'] = 'Ubah Data Kelas - DirosApp';
            $data['kelas'] = $this->kelas_model->getKelasById($id);
            $data['ustadz'] = $this->ustadz_model->getUstadz();
    
            $data['content'] = 'admin/kelas/ubah_kelas'; 
            login_admin($data['user']['user_role']);
            $this->load->view('admin/index', $data);
        } else {
            $this->kelas_model->ubah_kelas();
            redirect('kelas');
        }
    }

    public function ubah2($id)
    {
            $this->kelas_model->ubah_kelas();
            redirect('materi/pertemuan/'.$id);
    }

}
