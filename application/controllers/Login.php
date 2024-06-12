<?php defined('BASEPATH') or exit('No direct script access allowed');

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

class Login extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('Mod_login');
		$this->load->model('Mod_helper');
	}


	// Memanggil Halaman Login
	public function index()
	{
		$data = array(
			'title' => "Halaman Login",
		);

		$this->load->view('users/login', $data);
	}


	// Proses Login
	public function signin()
	{
		$username   = $this->input->post('username');
		$password   = $this->input->post('password');
		$level      = $this->input->post('level');



		$mysession = $this->Mod_login->check($username, $password, $level);
		if (!empty($mysession)) {
			$session = array(
				'full_name' => $mysession['full_name'],
				'level' => $mysession['level'],
				'status' => "login"
			);

			$this->session->set_userdata($session);

			if ($mysession['level'] == 'Admin') {
				redirect('Dashboard');
				die();
			} elseif ($mysession['level'] == 'User') {
				redirect('Dashboard/user');
				die();
			}
		} else {
			$mysession = $this->Mod_login->check($username, $password, 'Kepala Sekolah');
			if (!empty($mysession)) {
				$session = array(
					'full_name' => $mysession['full_name'],
					'level' => $mysession['level'],
					'status' => "login"
				);

				$this->session->set_userdata($session);

				redirect('Dashboard');
				die();
			} else {
				redirect('Login');
			}
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('Login');
	}
}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */