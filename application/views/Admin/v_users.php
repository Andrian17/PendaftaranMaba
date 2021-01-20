<div class="container-fluid">
	
	<div class="card shadow mb-4">
		<div class="card-header py-3">
			<h6 class="m-0 font-weight-bold text-primary">List USer</h6>
		</div>
		<div class="card-body">
			<div class="table-responsive">
				<table class="table table-striped text-dark" id="dataTable" width="100%" cellspacing="0">
					<thead>
						<tr>
							<th>No</th>
							<th>ID User</th>
							<th>Username</th>
							<th>Kontak</th>
							<th>Hak Akses</th>
						</tr>
					</thead>
					<tbody>
						<?php $no=1; ?>
						<?php foreach ($user as $key) : ?>
							<tr>
								<td><?php echo $no++; ?></td>
								<td><?php echo $key->id_user ?></td>
								<td><?php echo $key->username ?></td>
								<td><?php echo $key->kontak ?></td>
								<?php if ($key->HakAkses == 'maba'){ ?>
									<td><a href="<?php echo site_url('admin/deleteUser/'.$key->id_user) ?>" class="badge badge-danger tombol-hapus">Hapus</a></td>
								<?php } ?>
								
							</tr>
						<?php endforeach; ?>


					</tbody>

				</table>
			</div>


		</div>
	</div>
</div>