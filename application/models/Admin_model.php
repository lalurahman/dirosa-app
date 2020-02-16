<?php

class Admin_model extends CI_Model
{
    public function hapus($data)
    {
        $this->db->where('id_admin', $data['id_admin']);
        $this->db->delete('tb_admin', $data);
    }
}
