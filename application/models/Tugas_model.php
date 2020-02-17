<?php


class Tugas_model extends CI_Model
{
    public function getTugas()
    {
        $this->db->select('
        tb_user.nama as nama_user, tb_ustadz.id_ustadz AS nama_ustadz, tb_materi.*, tb_tugas.date_created, tb_tugas.status, tb_tugas.id_tugas
        ');
        $this->db->from('tb_tugas'); 
        $this->db->join('tb_user', 'tb_user.id_user=tb_tugas.id_user', 'left');
        $this->db->join('tb_ustadz', 'tb_ustadz.id_ustadz=tb_tugas.id_ustadz', 'left');
        $this->db->join('tb_materi', 'tb_materi.id_materi=tb_tugas.id_materi', 'left');

        return $this->db->get()->result_array(); 
    }

    public function detailTugas($id_tugas)
    {
         $this->db->select('
        tb_user.nama as nama_user, tb_ustadz.nama AS nama_ustadz, tb_materi.*, tb_tugas.date_created, tb_tugas.*
        ');
        $this->db->from('tb_tugas'); 
        $this->db->join('tb_user', 'tb_user.id_user=tb_tugas.id_user', 'left');
        $this->db->join('tb_ustadz', 'tb_ustadz.id_ustadz=tb_tugas.id_ustadz', 'left');
        $this->db->join('tb_materi', 'tb_materi.id_materi=tb_tugas.id_materi', 'left');
        $this->db->where('tb_tugas.id_tugas',$id_tugas);
        return $this->db->get()->row_array();
    }


    
    public function editProgress()
    {
        $data = [
            "id_materi" =>   $this->input->post('id_materi')
        ];

        $this->db->where('id_user', $this->input->post('id_user'));
        $this->db->update('tb_progress_belajar', $data);
    }

    public function editTugas($id_tugas)
    {
        $data = [
            "penilaian" =>   $this->input->post('penilaian'),
            "komentar" =>   $this->input->post('komentar'),
            "id_ustadz" =>  $this->input->post('id_ustadz'),
            "status" => $this->input->post('status'),
            "tgl_periksa" =>   date('Y-m-d')
        ];

        $this->db->where('id_tugas', $id_tugas);
        $this->db->update('tb_tugas', $data);

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Tugas Berhasil</div>');
    }

}
