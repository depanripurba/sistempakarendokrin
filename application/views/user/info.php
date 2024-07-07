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
				<a class="tombol" href="<?= base_url('login') ?>">INFORMASI</a>
				<a class="tombol" href="<?= base_url('login') ?>">DIAGNOSA</a>
				<a class="tombol" href="<?= base_url('login') ?>">LOGIN ADMIN</a>
			</div>

		</div>
		<div>
            <h2>
                Informasi Penyakit Endokrin
            </h2>
            <p>
                Penyakit Endokrin adalah penyakit yang menyerang sistem endokrin dalam tubuh manusia. Gangguan penyakit pada sistem endokrin menyebabkan perubahan fisik akibat pengaruh dari sistem hormonal yang memengaruhi langsung fungsi organ yang terlibat penyebab umum ganggunan endokrin adalah kelenje-kelenjer ini memproduksi terlalu banyak atau terlalu sedikit hormon menyiratkan ketidakseimbangan hormon endokrin berikut jenis penyakit endokrin
            </p>
        </div>

	</div>
</body>

</html>