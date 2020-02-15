<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tugas extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }


    public function index()
    {
        $data['title'] = 'Data Tugas - DirosApp';
        $data['tugas'] = $this->db->get('tb_tugas')->result();
        $data['content'] = 'admin/tugas/index';
        $this->load->view('admin/index', $data);
    }

    public function tambahTugas()
    {
        # code...
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
