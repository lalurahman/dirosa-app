<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Testimoni extends CI_Controller
{


    public function index()
    {
        $data['title'] = 'Data Testimoni - DirosApp';
        $data['testimoni'] = $this->db->get('tb_testimoni')->result();
        $data['content'] = 'admin/testimoni/index';
        $this->load->view('admin/index', $data);
    }

    public function tambahTestimoni()
    {
        # code...
    }

    public function editTestimoni()
    {
        # code...
    }

    public function hapusTestimoni()
    {
        # code...
    }
}
