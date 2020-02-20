<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Ustadz extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // is_logged_in();
        $this->load->model('ustadz_model');
    }

    public function index()
    {
        $data['title'] = 'Data Ustadz - DirosApp';
        $data['ustadz'] = $this->db->get('tb_ustadz')->result();

        $data['content'] = 'admin/ustadz/index';


        $data['user'] = sesi($this->session->userdata('role_id'), $this->session->userdata('email'));

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
            $data['user'] = sesi($this->session->userdata('role_id'), $this->session->userdata('email'));
            login_admin($data['user']['user_role']);
            $this->load->view('admin/index', $data);
        } else {
            $this->ustadz_model->tambah_ustadz();
            redirect('ustadz');
        }
    }

    public function editUstadz()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'trim|required');
        $this->form_validation->set_rules('email', 'Email', 'trim|required');

        if ($this->form_validation->run() == false) {

            $data['title'] = 'Edit Data Ustadz - DirosApp';
            $data['content'] = 'admin/ustadz/edit-ustadz';
            $data['ustadz'] = $this->ustadz_model->getUstadz();
            $data['user'] = sesi($this->session->userdata('role_id'), $this->session->userdata('email'));
            // login_admin($data['user']['user_role']);
            $this->load->view('admin/index', $data);
        } else {
            $nama  = $this->input->post('nama');
            $email = $this->input->post('email');

            // jika ada gambar yang akan di upload
            $upload_image = $_FILES['image']['name'];

            if ($upload_image) {
                $config['upload_path'] = './assets/img/user/';
                $config['allowed_types'] = 'jpg|png';
                $config['max_size']     = '2048';
                // $config['max_width'] = '1024';
                // $config['max_height'] = '768';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('image')) {
                    $old_image = $data['user']['image'];

                    if ($old_image != 'default.jpg') {
                        unlink(FCPATH . 'assets/img/profile/' . $old_image);
                    }

                    $new_image = $this->upload->data('file_name');
                    $this->db->set('image', $new_image);
                } else {
                    echo $this->upload->display_errors();
                }
            }

            $this->db->set('nama', $nama);
            $this->db->where('email', $email);
            $this->db->update('tb_ustadz');

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Your profile has been updated!</div>');
            redirect('user/profile');
        }
    }

    public function hapusUstadz($id_ustadz)
    {
        $data['id_ustadz'] = $id_ustadz;
        $this->ustadz_model->hapus($data);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil Dihapus!</div>');
        redirect('ustadz');
    }
}
