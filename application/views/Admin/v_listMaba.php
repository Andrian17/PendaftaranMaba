<div class="container-fluid">
	
	<div class="card shadow mb-4">
		<div class="card-header py-3">
			<h6 class="m-0 font-weight-bold text-primary">List Mahasiswa</h6>
		</div>
		<div class="card-body">
			<div class="table-responsive">
				<table class="table table-striped text-dark" id="dataTable" width="100%" cellspacing="0">
					<thead>
						<tr>
							<th>No</th>
							<th>ID Mahasiswa</th>
							<th>Nama</th>
							<th>Jurusan</th>
							<th>Aksi</th>
							<th>Detail</th>
						</tr>
					</thead>
					<tbody>
						<?php $no=1; ?>
						<?php foreach ($maba as $key) : ?>
							<tr>
								<td><?php echo $no++; ?></td>
								<td><?php echo $key->id ?></td>
								<td><?php echo $key->nama ?></td>
								<td><?php echo $key->jurusan ?></td>
							<?php if ($key->confirm == 0){ ?>
								<td><a href="<?php echo site_url('admin/getById/'.$key->id) ?>" class="badge badge-danger">confirmasi</a></td>
							<?php }else{ ?>
								<td><span class="badge badge-success">Lulus</span></td>
							<?php } ?>
								<td><a href="<?php echo site_url('admin/detail/'.$key->id); ?>" class="badge badge-info">Detail</a> <a href="<?php echo site_url('admin/delete/'.$key->id) ?>" class="badge badge-danger">Hapus</a></td>
								
							</tr>
						<?php endforeach; ?>


					</tbody>

				</table>
			</div>


		</div>
	</div>
</div>