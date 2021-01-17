<div class="container mt-4">
	<div id="flash-data" data-flashdata="<?= $this->session->flashdata('pesan'); ?>"></div>
	<form action="" method="post">
		<div class="mb-3">
			<label for="kontak" class="form-label">No hp / Email</label>
			<input type="text" class="form-control" id="kontak" name="kontak">
			<small class="form-text text-danger"><?php echo form_error('kontak'); ?></small>
		</div>
		<div class="mb-3">
			<label for="username" class="form-label">Username</label>
			<input type="text" class="form-control" id="username" name="username">
			<small class="form-text text-danger"><?php echo form_error('username'); ?></small>
		</div>
		<div class="mb-3">
			<label for="password" class="form-label">password</label>
			<input type="password" class="form-control" id="username" name="password">
			<small class="form-text text-danger"><?php echo form_error('password'); ?></small>
		</div>
		<button type="submit" class="btn btn-success">daftar</button>
	</form>

</div>