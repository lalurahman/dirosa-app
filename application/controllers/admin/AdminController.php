<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AdminController extends CI_Controller
{

    public function index()
    {
        $data['title'] = 'Dashboard - DirosApp';
        $this->load->view('admin/inc/header', $data);
        $this->load->view('admin/inc/sidebar');
        $this->load->view('admin/index');
    }
}
