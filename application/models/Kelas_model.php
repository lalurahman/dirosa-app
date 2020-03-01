<?php
class Kelas_model extends CI_Model
{

  public function getKelas()
  {
      $this->db->select('
      tb_progress_belajar.*, 
      tb_user.nama as nama_user, 
      tb_ustadz.nama AS nama_ustadz
      ');
      $this->db->from('tb_progress_belajar');
      $this->db->join('tb_user', 'tb_user.id_user=tb_progress_belajar.id_user', 'left');
      $this->db->join('tb_ustadz', 'tb_ustadz.id_ustadz=tb_progress_belajar.id_ustadz', 'left');

      $this->db->order_by('id_progress_belajar', 'DESC');
      return $this->db->get()->result_array();
  }

  public function getKelasById($id)
  {
      $this->db->select('
      tb_progress_belajar.*, 
      tb_user.nama as nama_user, 
      tb_ustadz.nama AS nama_ustadz
      ');
      $this->db->from('tb_progress_belajar');
      $this->db->join('tb_user', 'tb_user.id_user=tb_progress_belajar.id_user', 'left');
      $this->db->join('tb_ustadz', 'tb_ustadz.id_ustadz=tb_progress_belajar.id_ustadz', 'left');

      $this->db->where('id_progress_belajar', $id);

      $this->db->order_by('id_progress_belajar', 'DESC');
      return $this->db->get()->row_array();
  }


  public function ubah_kelas()
  {
      $data = [
          'id_ustadz' => htmlspecialchars($this->input->post('id_ustadz'))
      ];
      
      $this->db->where('id_progress_belajar', $this->input->post('id_progress_belajar'));
      $this->db->update('tb_progress_belajar', $data);
      
      $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Kelas berhasil diubah</div>');
  }


}