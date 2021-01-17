<div class="jumbotron jumbotron-fluid">
	<div class="container clearfix">
		
		<div class="card float-left mr-3" style="width: 16rem;">
			<img src="<?php echo base_url('assets/bootstrap/css/img/bg8.jpg') ?>" class="card-img-top prodi">
			<div class="card-body">
				<h6 class="prodi">D3 Sistem Informasi</h5>
				<p class="card-text">Web development, Desktop Programming, Database Administrator</p>
				<p class="badge badge-danger">Akreditasi : baik</p>
			</div>
		</div>
		<div class="card float-left mr-3" style="width: 16rem;">
			<img src="<?php echo base_url('assets/bootstrap/css/img/bg8.jpg') ?>" class="card-img-top prodi">
			<div class="card-body">
				<h6 class="prodi">S1 Ilmu Komputer</h5>
				<p class="card-text">Mobile Programming, Desktop Programming, Game Developer</p>
				<p class="badge badge-danger">Akreditasi : sangat baik</p>
			</div>
		</div>
		<div class="card float-left mr-3" style="width: 16rem;">
			<img src="<?php echo base_url('assets/bootstrap/css/img/bg8.jpg') ?>" class="card-img-top prodi">
			<div class="card-body">
				<h6 class="prodi">S1 Teknologi Informasi</h5>
				<p class="card-text">Internet of Thinking, Desktop Programming, Data Sciense & Machine Learning</p>
				<p class="badge badge-danger">Akreditasi : sangat baik</p>
			</div>
		</div>
		<div class="card float-left mr-3" style="width: 16rem;">
			<img src="<?php echo base_url('assets/bootstrap/css/img/bg8.jpg') ?>" class="card-img-top prodi">
			<div class="card-body">
				<h6 class="prodi">S1 Desain Komunikasi Visual</h5>
				<p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem.</p>
				<p class="badge badge-danger">Akreditasi : baik</p>
			</div>
		</div>
	</div>

	<div class="container clearfix mt-5">
		<div class="card float-left mr-3" style="width: 48%;">
		 	<div class="card-body">
				<h5 class="prodi">Gelombang Pendaftaran</h5>
				<table class="table" style="font-size: smaller;">
				 	<tr>
				 		<td>Gelombang</td>
				 		<td>Periode Pendaftaran</td>
				 		<td>Status</td>
				 	</tr>
				 	<tr>
				 		<td>1</td>
				 		<td>09 Juni 2020 s.d 30 November 2020</td>
				 		<td><span class="badge badge-danger">tutup</span></td>
				 	</tr>
				 	<tr>
				 		<td>2</td>
				 		<td>09 Desember 2020 s.d 31 Desember 2020</td>
				 		<td><span class="badge badge-danger">tutp</span></td>
				 	</tr>
				 	<tr>
				 		<td>3</td>
				 		<td>01 Januari 2020 s.d 30 April 2021</td>
				 		<td><span class="badge badge-success">buka</span></td>
				 	</tr>
				 	

				</table>
			</div>
		</div>
		<div class="card float-left " style="width: 47%;">
		 	<div class="card-body">
				<h5 class="prodi">Biaya Pendaftaran</h5>
				<table class="table" style="font-size: smaller;">
				 	<tr>
				 		<td>No</td>	
				 		<td>Jurusan</td>
				 		<td>Biaya</td>
				 	</tr>
				 	
				 	<?php $no = 1; ?>
				 	<?php foreach ($prodi as $key) : ?>
				 		<tr>
				 			<td><?php echo $no++ ?></td>
				 			<td><?php echo $key->jurusan; ?></td>
				 			<td><span><?php echo $key->harga ?></span></td>
				 		</tr>
				 	<?php endforeach; ?>
		
				</table>
			</div>
		</div>
	</div>

</div>