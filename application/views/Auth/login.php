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
				<?php if ( $this->session->flashdata('notif') ) : ?>
					<div class="alert alert-success">
						<?php echo $this->session->flashdata('notif'); ?>
					</div>
				<?php endif; ?>
				<?php if ( $this->session->flashdata('danger') ) : ?>
					<div class="alert alert-danger">
						<?php echo $this->session->flashdata('danger'); ?>
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
					<button type="submit" class="btn btn-success btn-block">Login</button>
				</form>
				<button type="button" class=" mt-3 btn btn-primary btn-block" data-bs-toggle="modal" data-bs-target="#mendaftar">
					Daftar
				</button>
			</div>
			
		</div>




	</div>
</div>


<!-- modal -->

		<!-- modal -->
		<div class="modal fade" id="mendaftar">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <form action="<?php echo base_url('Auth/daftar') ?>" method="post">
                <div class="modal-header">
                    <h5 class="modal-title">Daftar Akun baru</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="alert alert-danger" style="display: none" role="alert" id="alertdaftar"></div>
                    <span id="alertusername"></span>
                    <div class="input-group mb-3">
                        <input type="text" name="kontak" class="form-control" placeholder="no Hp/Email" name="kontak">
                        
                    </div>
                    <small class="form-text text-danger"><?php echo form_error('kontak'); ?></small>
                    <div class="input-group mb-3">
                        <input type="text" id="usernamedaftar" name="username" class="form-control usernamedaftar" placeholder="Username">
                        
                    </div>
                    <small class="form-text text-danger"><?php echo form_error('username'); ?></small>
                    <div class="input-group mb-3">
                        <input type="password" name="password1" id="password1" class="form-control" placeholder="Password">

                    </div>
                    <small class="form-text text-danger"><?php echo form_error('password'); ?></small>
                    <div class="input-group mb-3">
                        <input type="password" name="password2" id="password2" class="form-control" placeholder="Konfirmasi Password">
                    </div>
                    <button type="submit" id="daftar" name="daftar" class="btn btn-primary btn-block btn-flat">Daftar</button>
                </div>
            </form>
        </div>
    </div>
</div>