<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Aplikasi e-Arsip Untuk Sekolah versi GRATIS 
 * untuk sekolah SD/Sederajat, SMP/Sederajat, SMA/Sederajat
 * @version    1.0
 * @author     Puguh Sulistyo Pambudi | https://facebook.com/puguhsulistyo.pambudi | puguh.polijen@gmail.com | 0822 7440 4756
 * @copyright  (c) 2018
 * @link       https://codepackid.com
 * @since      Version 1.0
 *
 * PERINGATAN :
 * 1. TIDAK DIPERKENANKAN MEMPERJUALBELIKAN APLIKASI INI TANPA SEIZIN DARI PIHAK PENGEMBANG APLIKASI.
 * 2. TIDAK DIPERKENANKAN MENGHAPUS KODE SUMBER APLIKASI.
 */

class Mod_nilai extends CI_Model {

	public function add($data){
		$this->db->insert('nilai', $data);
		return true;
	}	

	public function update($data){
		$this->db->update('nilai', $data);
	}

	public function read(){
		$nilai = $this->db->order_by('id', 'DESC');
		$nilai = $this->db->get('nilai');
		return $nilai->result();
	}

	public function detail($id){
		return $this->db->get_where('nilai', array('id' => $id));
	}

	public function delete($id){
		return $this->db->delete('nilai', array('id' => $id));
	}	

	public function count_nilai()
	{
		$query = $this->db->query("SELECT * FROM nilai");
        $nilai = $query->num_rows();
        return $nilai;
	}

}

/* End of file Mod_nilai.php */
/* Location: ./application/models/Mod_nilai.php */