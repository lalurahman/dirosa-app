<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Ustadz extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }

    public function index()
    {
        $data['title'] = 'Data Ustadz - DirosApp';
        $data['ustadz'] = $this->db->get('tb_ustadz')->result();

        $data['content'] = 'admin/ustadz/index';
        $this->load->view('admin/index', $data);
    }

    public function tambahUstadz()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'trim|required');
        $this->form_validation->set_rules('email', 'Email', 'trim|required');
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]', [
            'matches' => 'Password dont match',
            'min_length' => 'password too short'
        ]);
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Tambah Data Ustadz - DirosApp';
            $data['content'] = 'admin/ustadz/tambah';
            $this->load->view('admin/index', $data);
        } else {
            $data = [
                'nama' => htmlspecialchars($this->input->post('nama')),
                'email' => htmlspecialchars($this->input->post('email')),
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'user_role' => 2,
                'is_active' => 1,
                'foto' => 'default.jpg',
                'date_created' => time("Y/m/d H:iP")

            ];

            $this->db->insert('tb_ustadz', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil Ditambah!</div>');
            redirect('ustadz');
        }
    }

    public function editUstadz()
    {
        # code...
    }

    public function hapusUstadz()
    {
        # code...
    }
}
