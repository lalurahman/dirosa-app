<?php

class Ustadz_model extends CI_Model
{

    public function getUstadz()
    {
        return $this->db->get('tb_ustadz')->result();
    }

    public function tambah_ustadz()
    {
        $data = [
            'nama' => htmlspecialchars($this->input->post('nama')),
            'email' => htmlspecialchars($this->input->post('email')),
            'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
            'user_role' => 2,
            'is_active' => 1,
            'foto' => 'default.png'

        ];

        $this->db->insert('tb_ustadz', $data);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil Ditambah!</div>');
    }

    public function hapus($data)
    {
        $this->db->where('id_ustadz', $data['id_ustadz']);
        $this->db->delete('tb_ustadz', $data);
    }

    public function edit($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }
}
