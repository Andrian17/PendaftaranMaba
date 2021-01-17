<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	
<!-- 	<h6><?php echo $aku->jurusan; ?></h6>
	<?php foreach ($aku as $key): ?>
		<h4><?php echo $key->jurusan ?></h4>
	<?php endforeach ?> -->
	<?php $con = mysqli_connect('localhost', 'root', '', 'db_web_lanjut'); ?>
	<?php 
		$jumlah_ekonomi = mysqli_query($con,"select * from maba where jurusan='D3 Sistem Informasi'");
		echo mysqli_num_rows($jumlah_ekonomi);
	?>
</body>
</html>