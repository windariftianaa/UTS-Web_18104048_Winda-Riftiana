<?php
	
	$pemainbols = array(
		array(
			'nama' => 'Cristiano Messi',
			'tinggi' => '180',
			'posisi' => 'Striker'
		),
		array(
			'nama' => 'Bejo Leonardo',
			'tinggi' => '167',
			'posisi' => 'Midfielder'
		),
		array(
			'nama' => 'Alfa Midi',
			'tinggi' => '190',
			'posisi' => 'Defender'
		),
	);


?>

<!DOCTYPE html>
<html>
<head>
	<title>UAS - Winda Riftiana</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

</head>
<body>
	<div class="container-xl">
		<br/>

		<div class="border" style="padding: 20px">
			<div class="row">
				<div class="col">
					<h5>Data Informasi Pemain Bola</h5>
				</div>
			</div>

			<div class="row">
				<div class="col">
					<p class="text-muted">By Coach Bambang's</p>
				</div>
			</div>

			<table class="table table-bordered table-striped">
			<thead class="">
				<tr>
					<th scope="col">No</th>
					<th scope="col">Nama</th>
					<th scope="col">Tinggi Badan</th>
					<th scope="col">Posisi</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($pemainbols as $v => $value) {?>
					<tr>
						<td scope="row"><?=$v+1?></td>
						<td><?=$value['nama']?></td>
						<td><?=$value['tinggi']?></td>
						<td><?=$value['posisi']?></td>
					</tr>
				<?php }?>
			</tbody>
		</table>
		</div>
		
	</div>
</body>
</html>