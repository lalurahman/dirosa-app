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

    public function editAdmin()
    {
        $data = [
            'nama' => htmlspecialchars($this->input->post('nama')),
            'email' => htmlspecialchars($this->input->post('email'))
        ];

        // cek jika ada gambar yang akan diupload
        $upload_image = $_FILES['foto']['name'];

        if ($upload_image) {
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size']      = '5048';
            $config['upload_path'] = './assets/img/users/';

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('foto')) {
                $old_image = $this->input->post('nama_foto_lama');
                if ($old_image != 'default.png') {
                    unlink(FCPATH . 'assets/img/users/' . $old_image);
                }
                $new_image = $this->upload->data('file_name');
                $this->db->set('foto', $new_image);
            } else {
                echo $this->upload->dispay_errors();
            }
        }

        // $this->db->set($data);
        $this->db->where('email', $data['email']);
        $this->db->update('tb_admin', $data);

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Your profile has been updated!</div>');
        redirect('user/profile');
    }

    public function hapus($data)
    {
        $this->db->where('id_admin', $data['id_admin']);
        $this->db->delete('tb_admin', $data);
    }
}
