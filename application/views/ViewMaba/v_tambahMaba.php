<div class="jumbotron jumbotron-fluid">
<div class="container-sm">
	<div class="card m-auto " style="width: 45%">
		<div class="card-body">
			<h5 class="card-title">Pendaftaran Mahasiswa Baru</h5>
			<?php $this->session->flashdata('pesan'); ?>

			<form action="<?php echo site_url('maba/prosesAdd') ?>" method="post">
				<input type="hidden" value="<?php echo $id_user ?>" name="id_user">
				<div class="mb-3">
					<label for="Nama" class="form-label">Nama</label>
					<input type="text" class="form-control" id="Nama" name="nama" autocomplete="off">
					<small class="form-text text-danger"><?php echo form_error('nama'); ?></small>
				</div>
				<div class="mb-3">
					<label for="Jenis Kelamin" class="form-label">Jenis Kelamin</label>
					<select class="form-select form-select-sm" aria-label="Default select example" name="JenisKelamin">
						<option value="Laki-Laki">Laki-Laki</option>
						<option value="Perempuan">Perempuan</option>
						
					</select>
				</div>
				
				<div class="mb-3">
					<label for="Alamat" class="form-label">Alamat</label>
					<input type="text" class="form-control" id="Alamat" name="alamat" autocomplete="off">
					<small class="form-text text-danger"><?php echo form_error('alamat'); ?></small>
				</div>
				<div class="mb-3">
					<label>Date</label>
				<input type="text" class="form-control" id="datepicker" name="tanggal" autocomplete="off">      <small class="form-text text-danger"><?php echo form_error('tanggal'); ?></small>
				</div>
				
				<div class="mb-3">
					<label for="No HP" class="form-label">No HP</label>
					<input type="number" class="form-control" id="No HP" name="noHP" autocomplete="off">
					<small class="form-text text-danger"><?php echo form_error('noHP'); ?></small>
				</div>
				<div class="mb-3">
					<label for="Nama" class="form-label">Jurusan</label>
						<select class="form-select form-select-sm" aria-label="Default select example" name="Jurusan">
						<?php foreach ($maba as $key) : ?>
							<option value="<?php echo $key->jurusan ?>"><?php echo $key->jurusan ?></option>
						<?php endforeach; ?>
					</select>
				</div>
				<button type="submit" class="btn btn-success">simpan</button>
			</form>
			
			
		</div>
	</div>
</div>
</div>