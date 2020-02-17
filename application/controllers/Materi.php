<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Materi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('materi_model');
        
        $data['user'] = sesi($this->session->userdata('role_id'), $this->session->userdata('email') );

    }


    public function index()
    {
        $data['title'] = 'Data Materi - DirosApp';
        $data['materi'] = $this->db->get('tb_materi')->result();
        $data['content'] = 'admin/materi/index';
        
        $data['user'] = sesi($this->session->userdata('role_id'), $this->session->userdata('email') );




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

            $data['user'] = sesi($this->session->userdata('role_id'), $this->session->userdata('email') );
            $this->load->view('admin/index', $data);
        } else {
            $data = [
                'pertemuan' => htmlspecialchars($this->input->post('pertemuan')),
                'penjelasan_pertemuan' => htmlspecialchars($this->input->post('penjelasan_pertemuan')),
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

    public function pertemuan($i)
    {
        if ($this->session->userdata('role_id')){
        $data['title'] = 'Pertemuan';
        $data['materi'] = $this->materi_model->get_materi($i);
        $data['content'] = 'admin/pertemuan/dirosa'.$i;

        
        $data['user'] = sesi($this->session->userdata('role_id'), $this->session->userdata('email') );


        $data['progress_belajar_aktiv'] = $i;
        $data['progress_belajar'] = $this->materi_model->get_progress_belajar($data['user']['id_user']);

        $this->load->view('admin/index', $data);
        }else{
            redirect('auth');
        }
    }
}
