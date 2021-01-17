
<div class="container container-fluid">
	

	<div class="card">
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>No</th>
					<th>Jurusan</th>
					<th>Nama</th>
				</tr>
			</thead>
			<tbody>
				<?php $no =1; ?>
				<?php foreach ($aku as $key): ?>
					<tr>
						<td><?php echo $no++ ?></td>
						<td><?php echo $key->jurusan ?></td>
						<td><?php echo $key->nama ?></td>
					</tr>
				<?php endforeach ?>

			</tbody>
		</table>
	</div>

</div>