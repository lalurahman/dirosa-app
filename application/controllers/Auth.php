<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

    public function index()
    {
        // cek jika ada session 
        if ($this->session->userdata('email')) {
            redirect('admin');
        }

        // menentukan rules 
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'User Login - DirosApp';
            $this->load->view('admin/login', $data);
        } else {
            $this->_login();
        }
    }

    private function _login()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $user = $this->db->get_where('tb_user', ['email' => $email])->row_array();
        $admin = $this->db->get_where('tb_admin', ['email' => $email])->row_array();
        $ustadz = $this->db->get_where('tb_ustadz', ['email' => $email])->row_array();

        // jika usernya ada
        if ($user) {
            // usernya aktif
            if ($user['is_active'] == 1) {
                // cek password
                if (password_verify($password, $user['password'])) {
                    // jika password benar
                    $data = [
                        'email' => $user['email'],
                        'role_id' => $user['user_role']
                    ];

                    // menyimpan data di session
                    $this->session->set_userdata($data);
                    redirect('user/profile');
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Wrong password!</div>');
                    redirect('auth');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">This email has not activated!</div>');
                redirect('auth');
            }
        } else if ($admin) {
            // usernya aktif
            if ($admin['is_active'] == 1) {
                // cek password
                if (password_verify($password, $admin['password'])) {
                    // jika password benar
                    $data = [
                        'email' => $admin['email'],
                        'role_id' => $admin['user_role']
                    ];

                    // menyimpan data di session
                    $this->session->set_userdata($data);
                    redirect('admin');
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Wrong password!</div>');
                    redirect('auth');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">This email has not activated!</div>');
                redirect('auth');
            }
        } else if ($ustadz) {
            // usernya aktif
            if ($ustadz['is_active'] == 1) {
                // cek password
                if (password_verify($password, $ustadz['password'])) {
                    // jika password benar
                    $data = [
                        'email' => $ustadz['email'],
                        'role_id' => $ustadz['user_role']
                    ];

                    // menyimpan data di session
                    $this->session->set_userdata($data);
                    redirect('user/profile');
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Wrong password!</div>');
                    redirect('auth');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">This email has not activated!</div>');
                redirect('auth');
            }
        } else {

            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email is not registered!</div>');
            redirect('auth');
        }
    }

    public function logout()
    {
        // menghapus session
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('role_id');

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berhasil Logout!</div>');
        redirect('auth');
    }

    public function blocked()
    {
        $data['title'] = 'Access Blocked';
        $this->load->view('blocked', $data);
    }
}
