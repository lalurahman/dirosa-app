<?php

function is_logged_in()
{
    $ci = get_instance();
    
    if (!$ci->session->userdata('email')) {
        $ci->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Silahkan Login Terlebih Dahulu!</div>');
        redirect('auth');
    }
}

function sesi($user_role, $email){
    $ci = get_instance();
    if ($user_role== 1) {
       return  $ci->db->get_where('tb_admin', ['email' => $email ])->row_array();
    } else if ($user_role == 2) {
       return  $ci->db->get_where('tb_ustadz', ['email' => $email ])->row_array();
    } else {
       return  $ci->db->get_where('tb_user', ['email' => $email ])->row_array();
    }
}