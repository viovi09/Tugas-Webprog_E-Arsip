<div class="content-wrapper">

	<div class="content-header">
		<a href="#exampleModal" data-toggle="modal" class="btn btn-flat btn-primary btn-sm"><i class="fas fa-plus-square"></i> Tambah</a>
		<!-- <a href="<?php echo base_url('Excel_inbox') ?>" class="btn btn-flat btn-success btn-sm"><i class="fas fa-file-excel "></i> Simpan Ke Excel</a> -->
		<a href="<?php echo base_url('Excel_inbox/pdf') ?>" class="btn btn-flat btn-primary btn-sm"><i class="fas fa-file-pdf "></i> Simpan Ke PDF</a>
	</div>


	<!-- Isi Kontent -->
	<section class="content container-fluid">
		
		<div class="row">
			<div class="col-md-12">
				<div class="box box-solid">
					<div class="box-header bg-yellow"><i class="fas fa-envelope"></i> Arsip Surat Masuk</div>
					<div class="box-body table-responsive">
						<table class="table table-bordered table-striped data">
							<thead>
								<tr>
									<th>No</th>
									<th>Tanggal</th>
									<th>Nomor Surat</th>
                                    <th>Perihal</th>
									<th>Pengirim</th>
									<th>Disposisi</th>
									<th><i class="fas fa-cogs"></i></th>
								</tr>
							</thead>
							<tbody>
								<?php $no=1; foreach ($inbox as $key=>$row){ ?>
									<tr>
										<td><?php echo $no++ ?></td>
										<td><?php echo $row->tanggal ?></td>
										<td><?php echo $row->nomor ?></td>
                                        <td><?php echo $row->perihal ?></td>
										<td><?php echo $row->pengirim ?></td>
										<td><span class="text-success"><i class="fas fa-check-circle"></i></span> <?php echo $row->disposisi ?></td>
										<td width="20%" align="center">
											<a href="<?php echo base_url('./media/suratmasuk/'. $row->berkas) ?>" title="Download" class="btn btn-sm btn-warning"><i class="fas fa-cloud-download-alt "></i></a>

											<a href="<?php echo base_url('Inbox/detail/'. $row->id) ?>" title="Update">
												<button class="btn btn-flat btn-sm btn-primary"><i class="fas fa-eye"></i></button>
											</a>

											<a href="<?php echo base_url('Inbox/update/'. $row->id) ?>" title="Update">
												<button class="btn btn-flat btn-sm btn-success"><i class="fas fa-edit"></i></button>
											</a>

											<a href="<?php echo base_url('Inbox/delete/'. $row->id) ?>">
												<button onclick="return confirm('Apakah Anda Yakin Akan Menghapus Data Ini ?')" class="btn btn-flat btn-sm btn-danger" title="Delete"><i class="fa fa-user-times"></i></button>
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
	<!-- Akhir isi Kontent -->
</div>


<!-- Modal Tambah Surat Masuk -->
<form action="<?php echo base_url('Inbox/add') ?>" method="post" enctype="multipart/form-data" class="form-horizontal">

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-envelope"></i> Tambah Surat Masuk</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        	<div class="form-group">
        		<label for="tanggal" class="control-label col-md-3">Tanggal Masuk :</label>
        		<div class="col-md-9">
        			<input type="text" class="form-control tanggal" name="tanggal" id="tanggal" placeholder="Tanggal" autocomplete="off" required>
        		</div>
        	</div>
        	<div class="form-group">
        		<label for="nomor" class="control-label col-md-3">Nomor Surat :</label>
        		<div class="col-md-9">
        			<input type="text" class="form-control" name="nomor" id="nomor" placeholder="Nomor Surat" autocomplete="off" required>
        		</div>
        	</div>
        	<div class="form-group">
        		<label for="pengirim" class="control-label col-md-3">Pengirim :</label>
        		<div class="col-md-9">
        			<input type="text" class="form-control" name="pengirim" id="pengirim" placeholder="Pengirim" autocomplete="off" required>
        		</div>
        	</div>
        	<div class="form-group">
        		<label for="perihal" class="control-label col-md-3">Perihal :</label>
        		<div class="col-md-9">
        			<input type="text" class="form-control" name="perihal" id="perihal" placeholder="Perihal" autocomplete="off" required>
        		</div>
        	</div>
        	<div class="form-group">
        		<label for="disposisi" class="control-label col-md-3">Disposisi :</label>
        		<div class="col-md-9">
        			<select name="disposisi" id="disposisi" class="form-control" required>
        				<option value="">-- Belum Ditentukan --</option>
        				<?php foreach ($disposisi as $key => $row) {?>
                        <option value="<?php echo $row->disposisi ?>"><?php echo $row->disposisi ?></option>
                        <?php } ?>
        			</select>
        		</div>
        	</div>
        	<div class="form-group">
        		<label for="isi_disposisi" class="control-label col-md-3">Isi Disposisi :</label>
        		<div class="col-md-9">
        			<input type="text" class="form-control" name="isi_disposisi" id="isi_disposisi" placeholder="Pengirim" autocomplete="off" required>
        		</div>
        	</div>
        	<div class="form-group">
        		<label for="berkas" class="control-label col-md-3">Upload Scan Surat :</label>
        		<div class="col-md-9">
        			<input type="file" class="form-control" name="berkas" id="berkas" required>
        		</div>
        	</div>
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