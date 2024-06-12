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

class Mod_soal extends CI_Model {

	public function add($data){
		$this->db->insert('soal', $data);
		return true;
	}	

	public function update($data){
		$this->db->update('soal', $data);
	}

	public function read(){
		$soal = $this->db->order_by('id', 'DESC');
		$soal = $this->db->get('soal');
		return $soal->result();
	}

	public function detail($id){
		return $this->db->get_where('soal', array('id' => $id));
	}

	public function delete($id){
		return $this->db->delete('soal', array('id' => $id));
	}	

	public function count_soal()
	{
		$query = $this->db->query("SELECT * FROM soal");
        $soal = $query->num_rows();
        return $soal;
	}

}

/* End of file Mod_soal.php */
/* Location: ./application/models/Mod_soal.php */