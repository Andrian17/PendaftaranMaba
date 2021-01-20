<div class="container container-fluid">
	<div class="card">
		<form action="" method="post">
			<input type="hidden" value="<?php echo $jurusan['id'] ?>" name="id">
			<div class="input-group mb-3">
				<span class="input-group-text" id="Jurusan">Jurusan</span>
				<input type="text" class="form-control" name="jurusan" value="<?php echo $jurusan['jurusan'] ?>">

			</div>
			<small class="text-danger"><?php echo form_error('jurusan') ?></small>
			<div class="input-group mb-3">
				<span class="input-group-text" id="id_jurusan">Harga</span>
				<input type="text" class="form-control" name="harga" value="<?php echo $jurusan['harga'] ?>">
			</div>
			<small class="text-danger"><?php echo form_error('harga') ?></small>
			<button type="submit" class="btn btn-primary">ubah</button>
		</form>
	</div>
</div>