<header class="main-header">
	<!-- Logo -->
	<a href="" class="logo">
		<span class="logo-mini"><i class="fab fa-internet-explorer "></i></span>
		<span class="logo-lg"><i class="fab fa-internet-explorer"></i> - Arsip</span>
	</a>
	<!-- Akhir Logo -->

	<!-- Navbar Header -->
	<nav class="navbar navbar-static-top" role="navigation">
		<a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
			<span class="sr-only">Toggle Navigation</span>
		</a>

		<!-- Menu Kanan -->
		<div class="navbar-custom-menu">
			<ul class="nav navbar-nav">
				<!-- Pesan -->
				 <li>
		          <a href="#about" data-toggle="modal"><i class="fa fa-info-circle"></i> Tentang </a>
		        </li>
				<!-- Akhir Pesan -->

				<!-- akun user -->
				<li class="dropdown user user-menu">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<img src="https://ui-avatars.com/api/?name=<?php echo $this->session->userdata('full_name'); ?>" class="user-image" alt="Photo User">
						<span class="hidden-xs"><?php echo $this->session->userdata('full_name'); ?></span>
					</a>
					<ul class="dropdown-menu">
						<li class="user-header">
							<img src="https://ui-avatars.com/api/?name=<?php echo $this->session->userdata('full_name'); ?>" class="img-circle" alt="Photo User">
							<p>
								<?php echo $this->session->userdata('full_name'); ?>
								<small>Login Sebagai : <?php echo $this->session->userdata('level'); ?></small>
							</p>
						</li>
						<li class="user-footer">
							<div class="pull-left">
								
							</div>
							<div class="pull-right">
								<a href="<?php echo base_url('Login/logout') ?>" class="btn btn-flat btn-default">Keluar</a>
							</div>
						</li>
					</ul>
				</li>
				<!-- Akhir akun user -->
			</ul>
		</div>
		<!-- Akhir Menu Kanan -->
	</nav>
	<!-- Akhir Navbar Header -->
</header>


<div id="about" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title"><i class="fa fa-info-circle"></i> Tentang Aplikasi</h4>
            </div>
            <div class="modal-body">
              <p>
                Selamat datang di Aplikasi <b> E-Arsip v 1.0 </b>
              </p>
              <table class="table">
                <tr>
                  <th>Pengembang</th><th>:</th><td>SMAN CITRA KARYA HUSADA</td>
                </tr>
                <tr>
                  <th>Aplikasi</th><th>:</th><td>E-Arsip</td>
                </tr>
                <tr>
                  <th>Versi</th><th>:</th><td>1.0</td>
                </tr>
                <tr>
                  <th>Core</th><th>:</th><td>Codeigniter 3.1.8</td>
                </tr>
                
              </table>
            </div>
        </div>
    </div>
</div>