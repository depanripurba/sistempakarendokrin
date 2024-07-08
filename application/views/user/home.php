<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
	<link rel="shortcut icon" href="<?= base_url('assets/img/logo.png') ?>" type="image/x-icon">
	<title><?= $judul ?></title>
</head>
<style>
	body {
		background-image: url('<?= base_url('assets/img/bg.png') ?>');
		background-repeat: no-repeat;
		background-size: cover;
		width: 100%;
		font-family: 'Poppins', sans-serif;
	}

	.tombol {
		color: white !important;
		border: 1px solid white;
	}

	.sidee {
		display: flex;
		gap: 10px;
		flex-direction: row;
	}
</style>

<body>
	<div class="mask">
		<div class="header">
			<div class="header-brand">
				<img class="logo" src="<?= base_url('assets/img/logo.png') ?>" alt="">
				<p class="header-text">SISTEM PAKAR ENDOKRIN</p>
			</div>
			<div class="sidee">
				<a class="tombol" href="<?= base_url('user/info') ?>">INFORMASI</a>
				<a class="tombol" href="<?= base_url('user/diagnosa') ?>">DIAGNOSA</a>
				<a class="tombol" href="<?= base_url('login') ?>">LOGIN ADMIN</a>
			</div>

		</div>
		<div class="center">
			<p class="center-text">Selamat Datang Di Website</p>
			<br>
			<p class="center-text">Sistem Pakar Dalam Mendiagnosa Penyakit Endokrin Pada Manusia Menggunakan<br>Metode Teorema Bayes (Studi Kasus :<br>Mitra Sejati Medan)</p>
			<a style="margin-left: -1000px;" class="button-diagnosa" href="<?= base_url('user/diagnosa') ?>">
				<span>MULAI MENDIAGNOSA</span>
			</a>
		</div>

	</div>
</body>

</html>