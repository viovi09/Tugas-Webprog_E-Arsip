<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	
	<title><?php echo $title; ?></title>

	<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.css') ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/fontawesome-all.css') ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/login.css') ?>">
</head>
<body>

	<div class="container">
		<div class="col-md-4 col-md-offset-4">
			
			<div class="panel panel-merah">
				<div class="login-header">
					<img src="<?php echo base_url('media/img/arsip-logo1.png') ?>" alt="Logo">
				</div>
				<div class="login-body">
					<form action="<?php echo base_url('Login/signin') ?>" method="post">

					<input type="text" class="form-login" name="username" placeholder="Username" autocomplete="off" required>

					<input type="password" class="form-login" name="password" placeholder="Password" autocomplete="off" required>

					<input type="hidden" class="form-login" name="level" value="Admin" required>

					<button type="submit" name="submit" class="tombol"><i class="fas fa-lock"></i> MASUK</button>

					</form>
				</div>
			</div>

			<p class="text-center">
				SMAN CITRA KARYA HUSADA
			</p>

		</div>
	</div>

	<script src="<?php echo base_url('assets/js/bootstrap.min.js') ?>"></script>
	
</body>
</html>


						
					










<!-- /**
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
 */ -->