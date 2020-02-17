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
        if ($this->session->userdata('role_id') == 1) {
            $data['user'] = $this->db->get_where('tb_admin', ['email' => $this->session->userdata('email')])->row_array();
        } else if ($this->session->userdata('role_id') == 2) {
            $data['user'] = $this->db->get_where('tb_ustadz', ['email' => $this->session->userdata('email')])->row_array();
        } else {
            $data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
        }
        $this->load->view('admin/index', $data);
    }

    public function tambahTugas()
    {
        $data = [
            "id_user" =>  1,
            "id_materi" =>  1
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

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Tugas Berhasil</div>');
        redirect('materi/pertemuan');
    }

    public function editTugas()
    {
        # code...
    }

    public function hapusTugas()
    {
        # code...
    }
}
