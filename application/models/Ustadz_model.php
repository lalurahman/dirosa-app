<?php

class Ustadz_model extends CI_Model
{

    public function getUstadz()
    {
        $this->db->order_by('id_ustadz', 'DESC');
        return $this->db->get('tb_ustadz')->result_array();
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

    public function editUstadz()
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
        $this->db->update('tb_ustadz', $data);

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Profil berhasil diubah</div>');
        redirect('user/profile');
    }

    public function hapus($data)
    {
        $this->db->where('id_ustadz', $data['id_ustadz']);
        $this->db->delete('tb_ustadz', $data);
    }

    
    public function get_userbyid($id)
    {
        $this->db->where('id_ustadz', $id);
        return $this->db->get('tb_ustadz')->row_array();
    }
    
    public function jumlah_ustadz()
    {
        return $this->db->get('tb_ustadz')->num_rows();
    }

    public function ustadz_terakhir()
    {
        $this->db->order_by('id_ustadz', 'DESC');
        return $this->db->get('tb_ustadz')->row_array();
    }

    public function ustadz_terakhir_pengguna()
    {
        $this->db->order_by('id_progress_belajar', 'DESC');
        return $this->db->get('tb_progress_belajar')->row_array();
    }
    
    public function jumlah_pengguna($id)
    {
        $this->db->where('id_ustadz', $id);
        return $this->db->get('tb_progress_belajar')->num_rows();
    }
}