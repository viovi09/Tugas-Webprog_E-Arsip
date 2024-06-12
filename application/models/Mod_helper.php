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

class Mod_helper extends CI_Model {

	public function sekolah(){
		$sekolah = $this->db->get('tb_sekolah');
		return $sekolah->result();
	}

	public function jurusan(){
		$jurusan = $this->db->get('tb_jurusan');
		return $jurusan->result();
	}

	public function pelajaran(){
		$pelajaran = $this->db->get('tb_pelajaran');
		return $pelajaran->result();
	}

}

/* End of file Mod_helper.php */
/* Location: ./application/models/Mod_helper.php */