<?php


class Tugas_model extends CI_Model
{
    public function getTugas()
    {
        $this->db->select('tb_tugas.*,
						   tb_user.id_user')
            ->join('tb_user', 'tb_user.id_user = tb_tugas.id_user', 'LEFT');
        return $this->db->get('tb_tugas')->result();
    }
}
