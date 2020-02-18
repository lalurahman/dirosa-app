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


function login_admin($user_role)
{
    $ci = get_instance();
    
    if ($user_role != 1) {
        $ci->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Maaf khusus User Admin</div>');
        redirect('user/profile');
    }
}

function tanggal(){
    $hari = date('l');

    switch ($hari){
        case "Monday":
            $hari = "Senin";
            break;
        case "Tuesday":
            $hari = "Selasa";
            break;
        case "Wednesday":
            $hari = "Rabu";
            break;
        case "Thursday":
            $hari = "Kamis";
            break;
        case "Friday":
            $hari = "Jum'at";
            break;
        case "Saturday":
            $hari = "Sabtu";
            break;
        case "Sunday":
            $hari = "Minggu";
            break;
    }

    $bulan = Date('m');
    switch ($bulan) {
        case 1:
            $bulan = "Januari";
            break;
        case 2:
            $bulan = "Februari";
            break;
        case 3:
            $bulan = "Maret";
            break;
        case 4:
            $bulan = "April";
            break;
        case 5:
            $bulan = "Mei";
            break;
        case 6:
            $bulan = "Juni";
            break;
        case 7:
            $bulan = "Juli";
            break;
        case 8:
            $bulan = "Agustus";
            break;
        case 9:
            $bulan = "September";
            break;
        case 10:
            $bulan = "Oktober";
            break;
        case 11:
            $bulan = "November";
            break;
        case 12:
            $bulan = "Desember";
            break;
        default:
            $bulan = Date('F');
            break;
    }
    
    $tanggal = $hari. ", ". Date('d') . " " .$bulan. " ".Date('Y');
    return $tanggal;
}