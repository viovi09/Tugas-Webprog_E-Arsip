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

class Master extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model(['Mod_master','Mod_register']);

		if($this->session->userdata('level') != "Admin" && $this->session->userdata('level') != "Kepala Sekolah"){
			redirect(base_url('Login'));
		}
	}

	public function pelajaran()
	{
		$data = array(
			'title' => "E-Arsip",
			'mapel' => $this->Mod_master->get_mapel(),
		);

		$this->load->view('tmp_site/index', $data);
		$this->load->view('tmp_site/nav');
		$this->load->view('tmp_site/sidebar');
		$this->load->view('master/pelajaran');
		$this->load->view('tmp_site/footer');
	}

	public function jurusan()
	{
		$data = array(
			'title' => "E-Arsip",
			'jurusan' => $this->Mod_master->get_jurusan(),
		);

		$this->load->view('tmp_site/index', $data);
		$this->load->view('tmp_site/nav');
		$this->load->view('tmp_site/sidebar');
		$this->load->view('master/jurusan');
		$this->load->view('tmp_site/footer');
	}

	public function users()
	{
		$data = array(
			'title' => "E-Arsip",
			'users' => $this->Mod_master->get_users(),
		);

		$this->load->view('tmp_site/index', $data);
		$this->load->view('tmp_site/nav');
		$this->load->view('tmp_site/sidebar');
		$this->load->view('master/users');
		$this->load->view('tmp_site/footer');
	}

	public function disposisi()
	{
		$data = array(
			'title' => "E-Arsip",
			'disposisi' => $this->Mod_master->get_disposisi(),
		);

		$this->load->view('tmp_site/index', $data);
		$this->load->view('tmp_site/nav');
		$this->load->view('tmp_site/sidebar');
		$this->load->view('master/disposisi');
		$this->load->view('tmp_site/footer');
	}




	// proses tambah & hapus
	public function add_pelajaran()
	{
		if(isset($_POST['submit'])){
			$data = array(
				'kode' => $this->input->post('kode'),
				'mapel' => $this->input->post('mapel')
			);

			$this->Mod_master->add_mapel($data);
			redirect('Master/pelajaran');
		}
	}

	public function del_mapel()
	{
		$id = $this->uri->segment(3);
		$this->Mod_master->delete_mapel($id, 'tb_pelajaran');
		redirect('Master/pelajaran');
	}


	public function add_jurusan()
	{
		if(isset($_POST['submit'])){
			$data = array(
				'kode' => $this->input->post('kode'),
				'jurusan' => $this->input->post('jurusan')
			);

			$this->Mod_master->add_jurusan($data);
			redirect('Master/jurusan');
		}
	}

	public function del_jurusan()
	{
		$id = $this->uri->segment(3);
		$this->Mod_master->delete_jurusan($id, 'tb_jurusan');
		redirect('Master/jurusan');
	}


	public function add_users()
	{
		if(isset($_POST['submit'])){

			$fullname 	= $this->input->post('full_name');
			$username 	= $this->input->post('username');
			$password 	= $this->input->post('password');
			$password2 	= $this->input->post('password2');
			$level 		= $this->input->post('level');

			if($password != $password2){
				 echo "<script> alert('Maaf, Password Tidak Sama.') </script>"; die(redirect('Master/users','refresh'));
			}

			$data = array(
				'full_name' 	=> $fullname,
				'username' 		=> $username,
				'password' 		=> password_hash($password, PASSWORD_DEFAULT)."\n",
				'level' 		=> $level
			);

			$this->Mod_register->add($data);
			redirect('Master/users');
		}
	}

	public function del_users()
	{
		$id = $this->uri->segment(3);
		$this->Mod_master->delete_users($id, 'users');
		redirect('Master/users');
	}


	public function add_disposisi()
	{
		if(isset($_POST['submit'])){
			$data = array(
				'disposisi' => $this->input->post('disposisi'),
			);

			$this->Mod_master->add_disposisi($data);
			redirect('Master/disposisi');
		}
	}

	public function del_disposisi()
	{
		$id = $this->uri->segment(3);
		$this->Mod_master->delete_disposisi($id, 'tb_disposisi');
		redirect('Master/disposisi');
	}

}

/* End of file Master.php */
/* Location: ./application/controllers/Master.php */