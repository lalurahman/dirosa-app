<?php

class Admin_model extends CI_Model
{

    public function tambah_admin()
    {
        $data = [
            'nama' => htmlspecialchars($this->input->post('nama')),
            'email' => htmlspecialchars($this->input->post('email')),
            'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
            'user_role' => 1,
            'is_active' => 1,
            'foto' => 'default.png'

        ];

        $this->db->insert('tb_admin', $data);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil Ditambah!</div>');
    }

    public function hapus($data)
    {
        $this->db->where('id_admin', $data['id_admin']);
        $this->db->delete('tb_admin', $data);
    }
}
