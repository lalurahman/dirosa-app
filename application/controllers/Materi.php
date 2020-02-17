<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Materi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('materi_model');
        if ($this->session->userdata('role_id') == 1) {
            $data['user'] = $this->db->get_where('tb_admin', ['email' => $this->session->userdata('email')])->row_array();
        } else if ($this->session->userdata('role_id') == 2) {
            $data['user'] = $this->db->get_where('tb_ustadz', ['email' => $this->session->userdata('email')])->row_array();
        } else {
            $data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
        }
    }


    public function index()
    {
        $data['title'] = 'Data Materi - DirosApp';
        $data['materi'] = $this->db->get('tb_materi')->result();
        $data['content'] = 'admin/materi/index';
        if ($this->session->userdata('role_id') == 1) {
            $data['user'] = $this->db->get_where('tb_admin', ['email' => $this->session->userdata('email')])->row_array();
        } else if ($this->session->userdata('role_id') == 2) {
            $data['user'] = $this->db->get_where('tb_ustadz', ['email' => $this->session->userdata('email')])->row_array();
        } else {
            $data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
        }



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

    public function hapusMateri($id_materi)
    {
        $data['id_materi'] = $id_materi;
        $this->materi_model->hapus($data);

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil Dihapus!</div>');
        redirect('materi');
    }

    public function pertemuan()
    {
        $data['title'] = 'Pertemuan';
        $data['content'] = 'admin/materi';
        $data['materi'] = $this->db->get('tb_materi')->result();

        if ($this->session->userdata('role_id') == 1) {
            $data['user'] = $this->db->get_where('tb_admin', ['email' => $this->session->userdata('email')])->row_array();
        } else if ($this->session->userdata('role_id') == 2) {
            $data['user'] = $this->db->get_where('tb_ustadz', ['email' => $this->session->userdata('email')])->row_array();
        } else {
            $data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
        }

        $this->load->view('admin/index', $data);
    }
}
