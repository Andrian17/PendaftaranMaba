<div class="card mb-4">
	<div class="card-header py-3">
		Detail Mahasiswa Baru
	</div>
	<div class="card-body m-auto col-md-8">
		

		<table class="table table-bordered">
			<thead>
				<tr>
					<th>Data</th>
					<th>Mahasiswa Baru</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>Id Mahasiswa</td>
					<td><?php echo $key['id']; ?></td>
				</tr>
				<tr>
					<td>Nama</td>
					<td><?php echo $key['nama']; ?></td>
				</tr>
				<tr>
					<td>Jenis Kelamin</td>
					<td><?php echo $key['jenisKelamin']; ?></td>
				</tr>
				<tr>
					<td>Alamat</td>
					<td><?php echo $key['alamat']; ?></td>
				</tr>
				<tr>
					<td>Tanggal Lahir</td>
					<td><?php echo $key['tanggal']; ?></td>
				</tr>
				<tr>
					<td>Jurusan</td>
					<td><?php echo $key['jurusan']; ?></td>
				</tr>
				<tr>
					<td>No Hp</td>
					<td><?php echo $key['noHp']; ?></td>
				</tr>
				<tr>
					<td>Status</td>
					<?php if ($key['confirm'] == 0) { ?>
						<td><span class="badge badge-danger">belum lulus</span></td>
					<?php }else{ ?>
						<td><span class="badge badge-success">lulus</span></td>
				    <?php } ?>
				</tr>
				<?php if ($key['confirm'] == 0): ?>
				<tr>
					<td colspan="2"> <a href="<?php echo site_url('admin/getById/'.$key['id']) ?>" class="container badge badge-danger tombol-confirm">confirmasi</a></td>
				</tr>
				<?php endif ?>
				

			</tbody>
		</table>
	</div>
</div>