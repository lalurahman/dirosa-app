<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }

    public function index()
    {
        // cek jika ada session 
        if ($this->session->userdata('role_id') == 1) {
            $data['title'] = 'Dashboard - DirosApp';
            $data['content'] = 'admin/dashboard';

            $this->load->view('admin/index', $data);
        } else {
            redirect('auth');
        }
    }

    public function dataAdmin()
    {
        $data['title'] = 'Data Admin - DirosApp';
        $data['content'] = 'admin/data-admin';
        $data['admin'] = $this->db->get('tb_admin')->result();
        $this->load->view('admin/index', $data);
    }

    public function tambahAdmin()
    {
        # code...

    }

    public function editAdmin()
    {
        # code...

    }

    public function hapusAdmin()
    {
        # code...
    }
}
