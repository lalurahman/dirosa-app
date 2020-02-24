<?php

class Materi_model extends CI_Model
{
    public function hapus($data)
    {
        $this->db->where('id_materi', $data['id_materi']);
        $this->db->delete('tb_materi', $data);
    }

    public function get_progress_belajar($id_user)
    {
        $this->db->select('id_materi');
        $this->db->where('id_user', $id_user);
        return $this->db->get('tb_progress_belajar')->row_array();
    }

    public function get_materi($id)
    {
        $this->db->where('id_materi', $id);
        return $this->db->get('tb_materi')->result();
    }
    public function get_materi_byid($id)
    {
        $this->db->where('id_materi', $id);
        return $this->db->get('tb_materi')->row_array();
    }

    public function tambah_materi()
    {
        $data = [
            'pertemuan' => htmlspecialchars($this->input->post('pertemuan')),
            'penjelasan_pertemuan' => htmlspecialchars($this->input->post('penjelasan_pertemuan')),
            'link_video' => htmlspecialchars($this->input->post('link_video'))

        ];
        $this->db->insert('tb_materi', $data);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil Ditambah</div>');
    }

    public function jumlah_materi()
    {
        $this->db->from('tb_materi');
        return $this->db->count_all_results();
    }


    public function cek_tugas($id_user, $id_materi)
    {
        $this->db->order_by('id_tugas', 'DESC');
        $this->db->where('id_user', $id_user);
        $this->db->where('id_materi', $id_materi);
        return $this->db->get('tb_tugas')->row_array();
    }

    public function edit_materi()
    {
        $data = [
            'pertemuan' => htmlspecialchars($this->input->post('pertemuan')),
            'penjelasan_pertemuan' => htmlspecialchars($this->input->post('penjelasan_pertemuan')),
            'link_video' => htmlspecialchars($this->input->post('link_video'))
        ];
        
        $this->db->where('id_materi', $this->input->post('id_materi'));
        $this->db->update('tb_materi', $data);
        
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Materi berhasil diubah</div>');
    }
}