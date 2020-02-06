<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

    public function index()
    {
        $data['title'] = 'Auth - DirosApp';
        // $this->load->view('admin/inc/header', $data);
        $this->load->view('admin/login', $data);
        // $this->load->view('admin/inc/footer');
    }

    public function register()
    {
        $data['title'] = 'Register - DirosApp';
        // $this->load->view('admin/inc/header', $data);
        $this->load->view('admin/register', $data);
        // $this->load->view('admin/inc/footer');
    }
}
