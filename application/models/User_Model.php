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
            'alamat' => htmlspecialchars('alamat'),
            'pekerjaan' => htmlspecialchars('pekerjaan'),
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
}
