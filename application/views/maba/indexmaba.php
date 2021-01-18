<div class="container">
	<div class="card ">
		<div class="card card-header">
			<h5>Selamat datang <?php echo $username; ?></h5>
		</div>
		<div class="card-body">
			<?php if ($key['confirm'] == 0) { ?>
				<div class="alert alert-danger" role="alert">
					Silahkan Lakukan Pendaftran Ulang..!!
					<a href="" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fas fa-angle-double-right"></i></a>
				</div>
			<?php }else{ ?>
				<div class="alert alert-success" role="alert">
					Selamat Anda Diterima di Universitas Bumigora..!!
				</div>
			<?php } ?>

			<table class="table">
				<thead>
					<tr>
						<th scope="col">Data</th>
						<th scope="col">Pengguna</th>
						<?php if ($key['confirm'] == 0): ?>
							<th scope="col"><a href="" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><span class="ml-2 mr-2">Edit</span><i class="fas fa-user-edit"></i></a>
							</th>
						<?php endif; ?>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>Nama</td>
						<td><?php echo $key['nama'] ?></td>
					</tr>
					<tr>
						<td>Jenis Kelamin</td>
						<td><?php echo $key['jenisKelamin'] ?></td>
					</tr>
					<tr>
						<td>Alamat</td>
						<td><?php echo $key['alamat'] ?></td>
					</tr>
					<tr>
						<td>Taanggal Lahir</td>
						<td><?php echo $key['tanggal'] ?></td>
					</tr>
					<tr>
						<td>No hp :</td>
						<td><?php echo $key['noHp'] ?></td>
					</tr>
					<tr>
						<td>Jurusan</td>
						<td><?php echo $key['jurusan'] ?></td>
					</tr>
				</tbody>
			</table>
			<?php if ($this->session->flashdata('notif')): ?>
				<div class="alert alert-danger" role="alert">
					<?php echo $this->session->flashdata('notif') ?>
				</div>
			<?php endif ?>
		</div>
		<div class="card-footer">
			<a href="<?php echo site_url('Auth\logout') ?>" class="btn btn-danger" onclick="confirmation()">logout</a>
		</div>
	</div>
	
	

	

	<!-- Modal form edit -->
	<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="staticBackdropLabel">Edit Data</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<form action="<?php echo site_url('maba/edit') ?>" method="post">
						<input type="hidden" value="<?php echo $key['id'] ?>" name="id">
						<div class="mb-3">
							<label for="Nama" class="form-label">Nama</label>
							<input type="text" class="form-control" id="Nama" name="nama" autocomplete="off" value="<?php echo $key['nama'] ?>">
							<small class="form-text text-danger"><?php echo form_error('nama'); ?></small>
						</div>
						<div class="mb-3">
							<label for="Jenis Kelamin" class="form-label">Jenis Kelamin</label>
							<select class="form-select form-select-sm" aria-label="Default select example" name="JenisKelamin">
								<option selected><?php echo $key['jenisKelamin'] ?></option>
								<option value="Laki-Laki">Laki-Laki</option>
								<option value="Perempuan">Perempuan</option>

							</select>
						</div>

						<div class="mb-3">
							<label for="Alamat" class="form-label">Alamat</label>
							<input type="text" class="form-control" id="Alamat" name="alamat" value="<?php echo $key['alamat'] ?>">
							<small class="form-text text-danger"><?php echo form_error('alamat'); ?></small>
						</div>
						<div class="mb-3">
							<label>Date</label>
							<input type="text" class="form-control" id="datepicker" name="tanggal" autocomplete="off" value="<?php echo $key['tanggal'] ?>">
							<small class="form-text text-danger"><?php echo form_error('tanggal'); ?></small>   
						</div>

						<div class="mb-3">
							<label for="No HP" class="form-label">No HP</label>
							<input type="number" class="form-control" id="No HP" name="noHP" value="<?php echo $key['noHp']; ?>">
							<small class="form-text text-danger"><?php echo form_error('noHP'); ?></small>
						</div>
						<div class="mb-3">
							<label for="Nama" class="form-label">Jurusan</label>
							<select class="form-select form-select-sm" aria-label="Default select example" name="Jurusan">
								<option selected><?php echo $key['jurusan'] ?></option>
								<?php foreach ($prodi as $key) : ?>
									<option value="<?php echo $key->jurusan ?>"><?php echo $key->jurusan ?></option>
								<?php endforeach; ?>
							</select>
						</div>
						<!-- <button class="btn btn-success">simpan</button> -->
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
							<button type="submit" class="btn btn-primary" onclick="confirmation()">simpan</button>
						</div>
					</form>
				</div>
				
			</div>
		</div>
	</div>


	<!-- Modal daftar Ulang-->
	<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Attention!</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<h2 class="text-info">Pendaftan Ulang</h2>
					<p>Silahkan datang di Kampus pada tanggal yang di tentukan untuk mengikuti tes, jika anda lulus anda bisa langksung melakukan pembayaran yang sesuai dengan Jurusan yang anda Pilih.</p>
					<div class="card">
						<div class="card-header">
							Rincian Pembayaran		
						</div>
						<div class="card-body">
							<table class="table table-info">
								<thead>
									<tr>
										<th>Jurusan</th>
										<th>Harga</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($prodi as $key) { ?>
										<tr>
											<td><?php echo $key->jurusan ?></td>
											<td><?php echo $key->harga ?></td>
										</tr>
									<?php	} ?>

								</tbody>
							</table>
						</div>
					</div>

				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>

</div>