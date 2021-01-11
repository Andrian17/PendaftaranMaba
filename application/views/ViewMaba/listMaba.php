<div class="jumbotron jumbotron-fluid mt-5">
	<div class="container text-light">
		<table class="table text-light bg-success" id="mytab">
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
					<td>INi</td>
				</tr>
			<?php endforeach; ?>
				

			</tbody>
		</table>
	</div>						
</div>