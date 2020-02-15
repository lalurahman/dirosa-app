<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Materi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }


    public function index()
    {
        $data['title'] = 'Data Materi - DirosApp';
        $data['materi'] = $this->db->get('tb_materi')->result();
        $data['content'] = 'admin/materi/index';
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

            $this->load->view('admin/index', $data);
        } else {
            $data = [
                'pertemuan' => htmlspecialchars($this->input->post('pertemuan')),
                'penjelasan_pertemuan' => htmlspecialchars($this->input->post('penjelasan_pertemuan')),
                'gambar' => 'default.jpg',
                'link_video' => htmlspecialchars($this->input->post('link_video'))

            ];

            $this->db->insert('tb_materi', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil Ditambah</div>');
            redirect('materi');
        }
    }

    public function editMateri()
    {
        # code...
    }

    public function hapusMateri()
    {
        # code...
    }

    public function pertemuan()
    {
        $data['title'] = 'Pertemuan';
        $data['content'] = 'admin/materi';
        $this->load->view('admin/index', $data);
    }
}
