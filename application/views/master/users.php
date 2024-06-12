<div class="content-wrapper">

	<div class="content-header">
		<a href="#exampleModal" data-toggle="modal" class="btn btn-flat btn-primary btn-sm"><i class="fas fa-plus-square"></i> Tambah</a>
	</div>

	<section class="content container-fluid">
		<div class="row">
			<div class="col-md-12">
				<div class="box">
					<div class="box-header bg-yellow">Data User</div>
					<div class="box-body table-responsive">
						<table class="table table-bordered table-striped data">
							<thead>
								<tr>
									<th>No</th>
									<th>Nama Lengkap</th>
									<th>Level</th>
									<th>Username</th>
									<th>Password</th>
									<th><i class="fas fa-cogs"></i></th>
								</tr>
							</thead>
							<tbody>
								<?php $no=1; foreach($users as $key=>$row){ ?>
								<tr>
									<td><?php echo $no++ ?></td>
									<td><?php echo $row->full_name ?></td>
									<td><?php echo $row->level ?></td>
									<td><?php echo $row->username ?></td>
									<td><?php echo $row->password ?></td>
									<td width="10%" align="center">
										<a href="<?php echo base_url('Master/del_users/'. $row->id) ?>">
											<button onclick="return confirm('Apakah Anda Yakin Akan Menghapus Data Ini ?')" class="btn btn-flat btn-sm btn-danger" title="Delete"><i class="fa fa-user-times"></i> Hapus</button>
										</a>
									</td>
								</tr>
								<?php } ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>



<!-- Modal Tambah Surat Masuk -->
<form action="<?php echo base_url('Master/add_users') ?>" method="post" enctype="multipart/form-data" class="form-horizontal">

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="exampleModalLabel"><i class="fas fa-file"></i> Tambah Users</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      	<div class="form-group">
        		<label for="full_name" class="control-label col-md-3">Nama Lengkap :</label>
        		<div class="col-md-9">
        			<input type="text" class="form-control" name="full_name" id="full_name" placeholder="Nama Lengkap" autocomplete="off" required>
        		</div>
        	</div>
        	<div class="form-group">
        		<label for="username" class="control-label col-md-3">Username :</label>
        		<div class="col-md-9">
        			<input type="text" class="form-control" name="username" id="username" placeholder="Username" autocomplete="off" required>
        		</div>
        	</div>
        	<div class="form-group">
        		<label for="password" class="control-label col-md-3">Password :</label>
        		<div class="col-md-9">
        			<input type="password" class="form-control" name="password" id="password" placeholder="Password" autocomplete="off" required>
        		</div>
        	</div>
        	<div class="form-group">
        		<label for="password2" class="control-label col-md-3">Confirm Password :</label>
        		<div class="col-md-9">
        			<input type="password" class="form-control" name="password2" id="password2" placeholder="Confirm Password" autocomplete="off" required>
        		</div>
        	</div>
        	<input type="hidden" class="form-control" name="level" value="Admin" autocomplete="off" required>

      </div>
      <div class="modal-footer">
        <button type="submit" name="submit" class="btn btn-flat btn-primary"><i class="fas fa-save"></i> SIMPAN</button>
      </div>
    </div>
  </div>
</div>
</form>












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