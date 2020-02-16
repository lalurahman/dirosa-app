<?php

class Materi_model extends CI_Model
{
    public function hapus($data)
    {
        $this->db->where('id_materi', $data['id_materi']);
        $this->db->delete('tb_materi', $data);
    }
}
