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

class Sekolah extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Mod_sekolah');

		if($this->session->userdata('level') != "Admin" && $this->session->userdata('level') != "Kepala Sekolah"){
			redirect(base_url('Login'));
		}
	}

	public function update()
	{
		$id = $this->uri->segment(3);
		$data = array(
			'title' => "E-Arsip",
			'detail' => $this->Mod_sekolah->detail($id)->row_array(),
		);

		$this->load->view('tmp_site/index', $data);
		$this->load->view('tmp_site/nav');
		$this->load->view('tmp_site/sidebar');
		$this->load->view('master/upd_sekolah');
		$this->load->view('tmp_site/footer');		
	}

	public function update_data()
	{
		$id = $this->input->post('id');
		$data = array(
			'id' => $id,
			'kepala_sekolah'	 => $this->input->post('kepala_sekolah'),
			'nip'				 => $this->input->post('nip'),
			'nama_sekolah'		 => $this->input->post('nama_sekolah'),
			'no_telp' 			 => $this->input->post('no_telp'),
			'alamat'			 => $this->input->post('alamat'),
			'website'			 => $this->input->post('website'),
		);

		$this->Mod_sekolah->update($data);
		redirect('Sekolah/update/'.'1');
	}

}

/* End of file Sekolah.php */
/* Location: ./application/controllers/Sekolah.php */