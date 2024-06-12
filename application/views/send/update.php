<div class="content-wrapper">

	<!-- Isi Kontent -->
	<section class="content container-fluid">
		
		<div class="row">
            <div class="col-md-12">
                <form action="<?php echo base_url('Send/update_send') ?>" method="post" enctype="multipart/form-data" class="form-horizontal">
                    <div class="box box-solid">
                        <div class="box-body">
                            <input type="hidden" name="id" value="<?php echo $views['id'] ?>">
                            <div class="form-group">
                                <label for="tanggal" class="control-label col-md-3 text-right">Tanggal :</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control tanggal" name="tanggal" id="tanggal" value="<?php echo $views['tanggal'] ?>" autocomplete="off" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="nomor" class="control-label col-md-3 text-right">Nomor Surat :</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" name="nomor" id="nomor" value="<?php echo $views['nomor'] ?>" autocomplete="off" required>
                                </div>
                            </div>
                             <div class="form-group">
                                <label for="pengirim" class="control-label col-md-3 text-right">Pengirim :</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" name="pengirim" id="pengirim" value="<?php echo $views['pengirim'] ?>" autocomplete="off" required>
                                </div>
                            </div>
                             <div class="form-group">
                                <label for="tertuju" class="control-label col-md-3 text-right">Tujuan Surat :</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" name="tertuju" id="tertuju" value="<?php echo $views['tertuju'] ?>" autocomplete="off" required>
                                </div>
                            </div>
                             <div class="form-group">
                                <label for="alamat" class="control-label col-md-3 text-right">Alamat :</label>
                                <div class="col-md-8">
                                    <textarea name="alamat" id="alamat" class="form-control" rows="2"><?php echo $views['alamat'] ?></textarea>
                                </div>
                            </div>
                             <div class="form-group">
                                <label for="perihal" class="control-label col-md-3 text-right">Perihal :</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" name="perihal" id="perihal" value="<?php echo $views['perihal'] ?>" autocomplete="off" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="disposisi" class="control-label col-md-3">Disposisi :</label>
                                <div class="col-md-8">
                                    <select name="disposisi" id="disposisi" class="form-control" required>
                                        <option value="<?php echo $views['disposisi'] ?>"><?php echo $views['disposisi'] ?></option>
                                        <option value="">-- Belum Ditentukan --</option>
                                        <option value="Diterima TU">Diterima TU</option>
                                        <option value="Diserahkan Ke Waka">Diserahkan Ke Waka</option>
                                        <option value="Diserahkan Ke Kepala Sekolah">Diserahkan Ke Kepala Sekolah</option>
                                    </select>
                                </div>
                            </div>
                             <div class="form-group">
                                <label for="isi_disposisi" class="control-label col-md-3 text-right">Isi Disposisi :</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" name="isi_disposisi" id="isi_disposisi" value="<?php echo $views['isi_disposisi'] ?>" autocomplete="off" required>
                                </div>
                            </div>
                             <div class="form-group">
                                <label for="berkas" class="control-label col-md-3 text-right">Berkas :</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" name="berkas" id="berkas" value="<?php echo $views['berkas'] ?>" autocomplete="off" readonly>
                                </div>
                            </div>
                             <div class="form-group">
                                <label class="control-label col-md-3 text-right"></label>
                                <div class="col-md-8">
                                   <button type="submit" name="submit" class="btn btn-success btn-flat"><i class="fas fa-sync"></i> UPDATE</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>      
        </div>

	</section>
	<!-- Akhir isi Kontent -->
</div>















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