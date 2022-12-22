<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Proyek DSS</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="semantic/dist/semantic.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer">

</head>

<body>
<header>
	<h1>SPK Penerima Bantuan PKH melalui Data Atribut Rumah Tangga
		<img src="logo/unpad.png" style="float: right; width: 75px;">
	<br>Masyarakat Sumedang Menggunakan Metode AHP</h1>	
</header>

<div class="wrapper">
	<nav id="navigation" role="navigation">
		<ul>
			<li><a class="item" href="anggota.php">Anggota Kelompok</a></li>
			<li><a class="item" href="index.php">Home</a></li>
			<li>
				<a class="item" href="kriteria.php">Kriteria
					<div class="ui blue tiny label" style="float: right;"><?php echo getJumlahKriteria(); ?></div>
				</a>
			</li>
			<li>
				<a class="item" href="alternatif.php">Alternatif
					<div class="ui blue tiny label" style="float: right;"><?php echo getJumlahAlternatif(); ?></div>
				</a>
			</li>
			<li><a class="item" href="bobot_kriteria.php">Perbandingan Kriteria</a></li>
			<li><a class="item" href="bobot.php?c=1">Perbandingan Alternatif</a></li>
				<ul>
					<?php

						if (getJumlahKriteria() > 0) {
							for ($i=0; $i <= (getJumlahKriteria()-1); $i++) { 
								echo "<li><a class='item' href='bobot.php?c=".($i+1)."'>".getKriteriaNama($i)."</a></li>";
							}
						}

					?>
				</ul>
			<li><a class="item" href="hasil.php">Hasil</a></li>
		</ul>
	</nav>