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

class Mod_master extends CI_Model {

	public function add_mapel($data){
		$this->db->insert('tb_pelajaran',$data);
		return true;
	}

	public function add_disposisi($data){
		$this->db->insert('tb_disposisi',$data);
		return true;
	}	

	public function get_mapel(){
		$mapel = $this->db->order_by('id', 'DESC');
		$mapel = $this->db->get('tb_pelajaran');
		return $mapel->result();
	}

	public function get_disposisi(){
		$disposisi = $this->db->order_by('id', 'DESC');
		$disposisi = $this->db->get('tb_disposisi');
		return $disposisi->result();
	}

	public function delete_mapel($id){
		return $this->db->delete('tb_pelajaran', array('id' => $id));
	}

	public function delete_disposisi($id){
		return $this->db->delete('tb_disposisi', array('id' => $id));
	}

	public function add_jurusan($data){
		$this->db->insert('tb_jurusan',$data);
		return true;
	}	

	public function get_jurusan(){
		$jurusan = $this->db->order_by('id', 'DESC');
		$jurusan = $this->db->get('tb_jurusan');
		return $jurusan->result();
	}

	public function delete_jurusan($id){
		return $this->db->delete('tb_jurusan', array('id' => $id));
	}


	public function get_users(){
		$users = $this->db->order_by('id', 'DESC');
		$users = $this->db->get('users');
		return $users->result();
	}

	public function delete_users($id){
		return $this->db->delete('users', array('id' => $id));
	}

}

/* End of file Mod_master.php */
/* Location: ./application/models/Mod_master.php */