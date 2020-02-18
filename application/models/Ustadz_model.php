<?php

class Ustadz_model extends CI_Model
{

    public function tambah_ustadz()
    {
        $data = [
          'nama' => htmlspecialchars($this->input->post('nama')),
          'email' => htmlspecialchars($this->input->post('email')),
          'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
          'user_role' => 2,
          'is_active' => 1,
          'foto' => 'default.jpg'

      ];

      $this->db->insert('tb_ustadz', $data);
      $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil Ditambah!</div>');
    }

    public function hapus($data)
    {
        $this->db->where('id_ustadz', $data['id_ustadz']);
        $this->db->delete('tb_ustadz', $data);
    }
}
