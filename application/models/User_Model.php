<?php
class User_model extends CI_Model
{

    public function tambah_user()
    {

        $data = [
            'nama' => htmlspecialchars($this->input->post('nama')),
            'jk' => htmlspecialchars($this->input->post('jk')),
            'tempat_lahir' => htmlspecialchars($this->input->post('tempat_lahir')),
            'tanggal_lahir' => htmlspecialchars($this->input->post('tanggal_lahir')),
            'alamat' => htmlspecialchars(htmlspecialchars($this->input->post('alamat'))),
            'pekerjaan' => htmlspecialchars(htmlspecialchars($this->input->post('pekerjaan'))),
            'email' => htmlspecialchars($this->input->post('email')),
            'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
            'user_role' => 3,
            'is_active' => 1,
            'foto' => 'default.png'
            // 'date_created' => time("Y/m/d H:iP")
        ];
        $this->db->insert('tb_user', $data);




        $this->db->order_by('id_user', 'DESC');
        $id_user = $this->db->get('tb_user')->row_array();


        $data2 = [
            'id_user' => $id_user['id_user'],
            'id_materi' => 1
        ];
        $this->db->insert('tb_progress_belajar', $data2);

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Selamat! anda berhasil mendaftar :)</div>');
        redirect('auth');
    }

    public function hapus($data)
    {
        $this->db->where('id_user', $data['id_user']);
        $this->db->delete('tb_user', $data);
    }

    public function editUser()
    {
        $data = [
            'nama' => htmlspecialchars($this->input->post('nama')),
            'jk' => htmlspecialchars($this->input->post('jk')),
            'tempat_lahir' => htmlspecialchars($this->input->post('tempat_lahir')),
            'tanggal_lahir' => htmlspecialchars($this->input->post('tanggal_lahir')),
            'alamat' => htmlspecialchars(htmlspecialchars($this->input->post('alamat'))),
            'pekerjaan' => htmlspecialchars(htmlspecialchars($this->input->post('pekerjaan'))),
            'email' => htmlspecialchars($this->input->post('email'))
            // 'date_created' => time("Y/m/d H:iP")
        ];

        // cek jika ada gambar yang akan diupload
        $upload_image = $_FILES['foto']['name'];

        if ($upload_image) {
            $config['allowed_types'] = 'gif|jpg|jpeg|png';
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
        $this->db->update('tb_user', $data);

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Profil berhasil diubah</div>');
        redirect('user/profile');
    }
    

    public function get_userbyid($id)
    {
        $this->db->where('id_user', $id);
        return $this->db->get('tb_user')->row_array();
    }
}
