<aside class="main-sidebar">
	<section class="sidebar">
		<!-- user panel -->
		<<div class="user-panel">
			<div class="logo" align="center">
				<img src="<?php echo base_url() ?>media/img/tutwuri1.png" width="110" height="auto" class="img-responsive" alt="Logo" style="margin-top: -5px;margin-bottom: 10px;">
			</div>
			</div>
			<!-- Akhir user panel -->

			<!-- Sidebar Menu -->
			<ul class="sidebar-menu" data-widget="tree">
				<li class="header">MENU NAVIGATION</li>

				<li class="active"><a href="<?php echo base_url('Dashboard') ?>"><i class="fas fa-home"></i> <span>Beranda</span></a></li>
				<li><a href="<?php echo base_url('Inbox') ?>"><i class="fas fa-envelope "></i> <span>Arsip Surat Masuk</span></a></li>
				<li><a href="<?php echo base_url('Send') ?>"><i class="fas fa-envelope-open"></i> <span>Arsip Surat Keluar</span></a></li>
				<li><a href="<?php echo base_url('Ijazah') ?>"><i class="fas fa-file-archive "></i> <span>Arsip Ijazah &amp; SKHUN</span></a></li>


				<li class="treeview">
					<a href=""><i class="fas fa-cogs"></i> <span>Master Apps</span>
						<span class="pull-right-container">
							<i class="fa fa-angle-left pull-right"></i>
						</span>
					</a>
					<ul class="treeview-menu">

						<?php if ($this->session->userdata('level') == "Admin") : ?>
							<li><a href="<?php echo base_url('Master/disposisi') ?>">Master Disposisi</a></li>
							<li><a href="<?php echo base_url('Master/users') ?>">Master Users</a></li>

						<?php endif ?>
						<li><a href="<?php echo base_url('Sekolah/update/' . '1') ?>">Profil Sekolah</a></li>
					</ul>
				</li>

				<?php if ($this->session->userdata('level') == "Admin") : ?>

					<li><a href="<?php echo base_url('Backup') ?>"><i class="fas fa-database"></i> <span>Backup &amp; Restore</span></a></li>
				<?php endif ?>


			</ul>
			<!-- Akhir sidebar menu -->
	</section>
</aside>

<!-- 
<li class="treeview">
				<a href=""><i class="fas fa-university"></i> <span>Manajemen Surat</span>
					<span class="pull-right-container">
						<i class="fa fa-angle-left pull-right"></i>
					</span>
				</a>
				<ul class="treeview-menu">
					<li><a href="<?php echo base_url() ?>">Surat Masuk</a></li>
					<li><a href="<?php echo base_url('Pangkalan/siaga') ?>">Pangkalan Siaga</a></li>
					<li><a href="<?php echo base_url('Pangkalan/penggalang') ?>">Pangkalan Penggalang</a></li>
					<li><a href="<?php echo base_url('Pangkalan/penegak') ?>">Pangkalan Penegak</a></li>
					<li><a href="<?php echo base_url('Pangkalan/pandega') ?>">Pangkalan Pandega</a></li>
				</ul>
			</li>
-->