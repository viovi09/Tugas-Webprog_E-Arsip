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
				<div class="panel-heading bg-merah text-center">
					<i class="fas fa-user-circle"></i> Daftar Akun Baru
				</div>
				<div class="panel-body">
					<form action="<?php echo base_url('Registration/signup') ?>" method="post">
						<div class="form-group">
							<label for="full_name">Fullname</label>
							<input type="text" class="form-control" name="full_name" id="full_name" placeholder="Enter Fullname" autocomplete="off" required>
						</div>
						<div class="form-group">
							<label for="username">Username</label>
							<input type="text" class="form-control" name="username" id="username" placeholder="Enter Username" autocomplete="off" required>
						</div>
						<div class="form-group">
							<label for="password">Password</label>
							<input type="password" class="form-control" name="password" id="password" placeholder="Enter Password" autocomplete="off" required>
						</div>
						<div class="form-group">
							<label for="password2">Confirm Password</label>
							<input type="password" class="form-control" name="password2" id="password2" placeholder="Enter Confirm Password" autocomplete="off" required>
						</div>
						<div class="form-group">
							<label for="level">Level</label>
							<select name="level" id="level" class="form-control" required>
								<option value="Admin">Admin</option>
								<option value="User">User</option>
							</select>
						</div>
						<div class="form-group text-right">
							<button type="submit" name="submit" class="btn btn-sm btn-danger"><i class="fas fa-lock"></i> Daftar</button>
						</div>
					</form>
				</div>
			</div>

			<p class="text-center">
				Copyright &copy; 2024 Ndesotech.com
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