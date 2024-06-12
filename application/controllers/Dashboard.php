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

class Dashboard extends CI_Controller {

	function __construct(){
		parent::__construct();

		if($this->session->userdata('level') != "Admin" && $this->session->userdata('level') != "Kepala Sekolah"){
			redirect(base_url('Login'));
		}
		

        $this->load->model(['Mod_helper','Mod_surat', 'Mod_ijazah','Mod_soal', 'Mod_nilai','Mod_sekolah']);
	}

	public function index()
	{
		$data = array(
			'title' => "E-Arsip",
			'inbox' => $this->Mod_surat->count_inbox(),
			'send' => $this->Mod_surat->count_send(),
			'ijazah' => $this->Mod_ijazah->count_ijazah(),
			'soal' => $this->Mod_soal->count_soal(),
			'nilai' => $this->Mod_nilai->count_nilai(),
			'sekolah' => $this->Mod_sekolah->get_sekolah(),
		);

		$this->load->view('tmp_site/index', $data);
		$this->load->view('tmp_site/nav');
		$this->load->view('tmp_site/sidebar');
		$this->load->view('backend/index');
		$this->load->view('tmp_site/footer');
	}

	public function user()
	{
		echo "Halaman User";
	}

}

/* End of file Dashboard.php */
/* Location: ./application/controllers/Dashboard.php */