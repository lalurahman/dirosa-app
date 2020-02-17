<?php

class Materi_model extends CI_Model
{
    public function hapus($data)
    {
        $this->db->where('id_materi', $data['id_materi']);
        $this->db->delete('tb_materi', $data);
    }

    public function get_progress_belajar($id_user){
        $this->db->select('id_materi');
        $this->db->where('id_user', $id_user);
        return $this->db->get('tb_progress_belajar')->row_array();
    }

    public function get_materi($id){
        $this->db->where('id_materi', $id);
        return $this->db->get('tb_materi')->result();
    }
}
