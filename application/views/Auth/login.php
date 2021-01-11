<div class="jumbotron">
	<div class="container mt-5">
		<div class="card mt-5 m-auto" style="width: 45%">
			<div class="card-header">
				Login
				<?php if ( $this->session->flashdata('pesan') ) : ?>
					<div class="alert alert-danger">
						<?php echo $this->session->flashdata('pesan'); ?>
					</div>
				<?php endif; ?>
			</div>
			<div class="card-body">
				<form action="<?php echo site_url('Auth/prosesLogin') ?>" method="post">
					<div class="mb-3">
						<label for="username" class="form-label">Username</label>
						<input type="text" class="form-control" id="username" name="username" autocomplete="off">
					</div>
					<div class="mb-3">
						<label for="password" class="form-label">Password</label>
						<input type="password" class="form-control" id="password" name="password">
					</div>
					<button type="submit" class="btn btn-success">Login</button>
				</form>
				<span class="">Belum Mempunyai akun? daftar di<a href="<?php echo site_url('Auth/daftar') ?>">sini</a></span>
			</div>
			
		</div>
	</div>
</div>