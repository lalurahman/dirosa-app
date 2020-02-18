<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tugas extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('tugas_model');
    }


    public function index()
    {
        $data['title'] = 'Data Tugas - DirosApp';
        $data['tugas'] = $this->tugas_model->getTugas();
        $data['content'] = 'admin/tugas/index';
        $data['user'] = sesi($this->session->userdata('role_id'), $this->session->userdata('email'));
        $this->load->view('admin/index', $data);
    }

    public function tambahTugas()
    {
        $data = [
            "id_user" =>   $this->input->post('id_user'),
            "id_materi" => $this->input->post('id_materi'),
            "status" => "Belum Diperiksa"
        ];
        $upload_image = $_FILES['berkas']['name'];

        if ($upload_image) {
            $config['allowed_types']        = 'mp3';
            $config['max_size']             = 5140;
            $config['upload_path']          = './assets/tugas/';

            $this->load->library('upload', $config);


            if ($this->upload->do_upload('berkas')) {
                $new_berkas = $this->upload->data('file_name');
                $this->db->set('link_tugas', $new_berkas);
            } else {
                echo $this->upload->display_errors();
            }
        }

        $this->db->insert('tb_tugas', $data);

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Tugas Berhasil Dikirim</div>');
        redirect('materi/pertemuan/1');
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
            if ($this->input->post('status' == 'Lulus')) {
                $this->tugas_model->editProgress();
            }
            $this->tugas_model->editTugas(($id_tugas));

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
