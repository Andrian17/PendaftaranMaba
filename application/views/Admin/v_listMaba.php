
	<div class="card shadow mb-4">
		<div class="card-header py-3">
			<h6 class="m-0 font-weight-bold text-primary">List Mahasiswa</h6>
		</div>
		<div class="card-body">
			<div class="table-responsive">
				<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
					<thead>
						<tr>
							<th scope="col">No</th>
							<th scope="col">Nama</th>
							<th scope="col">Jenis Kelamin</th>
							<th scope="col">Alamat</th>
							<th scope="col">Tanggal</th>
							<th scope="col">No telpon</th>
							<th scope="col">Jurusan</th>
							<th scope="col">Aksi</th>
						</tr>
					</thead>
					<tbody>
						<?php $no=1; ?>
						<?php foreach ($maba as $key) : ?>
							<tr>
								<td><?php echo $no++; ?></td>
								<td><?php echo $key->nama ?></td>
								<td><?php echo $key->jenisKelamin ?></td>
								<td><?php echo $key->alamat ?></td>
								<td><?php echo $key->tanggal ?></td>
								<td><?php echo $key->noHp ?></td>
								<td><?php echo $key->jurusan ?></td>
							<?php if ($key->confirm == 0){ ?>
								<td><a href="<?php echo site_url('admin/getById/'.$key->id) ?>" class="badge badge-danger" style="width: 70px;">confirmasi</a></td>
							<?php }else{ ?>
								<td><span class="badge badge-success">Lulus</span></td>
							<?php } ?>
								
							</tr>
						<?php endforeach; ?>


					</tbody>

				</table>
			</div>


		</div>
	</div>