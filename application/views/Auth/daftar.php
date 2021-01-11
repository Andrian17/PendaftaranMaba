<div class="container mt-4">
	<form action="<?php echo site_url('Auth/prosesDaftar') ?>" method="post">
		<div class="mb-3">
			<label for="namalengkap" class="form-label">Nama Lengkap</label>
			<input type="text" class="form-control" id="namalengkap" name="namalengkap">
		</div>
		<div class="mb-3">
			<label for="username" class="form-label">Username</label>
			<input type="text" class="form-control" id="username" name="username">
		</div>
		<div class="mb-3">
			<label for="password" class="form-label">password</label>
			<input type="password" class="form-control" id="username" name="password">
		</div>
		<button type="submit" class="btn btn-success">daftar</button>
	</form>

</div>