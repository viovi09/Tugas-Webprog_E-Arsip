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

class Registration extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model(['Mod_register','Mod_helper']);

		if($this->session->userdata('level') != "Admin"){
            redirect(base_url('Login'));
        }
	}

	public function index()
	{
		$data = array(
			'title' => "Halaman Registrasi",
		);

		$this->load->view('users/registration', $data);
	}


	public function signup()
	{
		if(isset($_POST['submit'])){

			$fullname 	= $this->input->post('full_name');
			$username 	= $this->input->post('username');
			$password 	= $this->input->post('password');
			$password2 	= $this->input->post('password2');
			$level 		= $this->input->post('level');

			if($password != $password2){
				 echo "<script> alert('Maaf, Password Tidak Sama.') </script>"; die(redirect('Registration','refresh'));
			}

			$data = array(
				'full_name' 	=> $fullname,
				'username' 		=> $username,
				'password' 		=> password_hash($password, PASSWORD_DEFAULT)."\n",
				'level' 		=> $level
			);

			$this->Mod_register->add($data);
			redirect('Login');
		}
	}

}

/* End of file Registration.php */
/* Location: ./application/controllers/Registration.php */