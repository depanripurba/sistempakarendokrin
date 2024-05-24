<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="<?=base_url('assets/css/style.css')?>">
	<link rel="shortcut icon" href="<?=base_url('assets/img/logo.png')?>" type="image/x-icon">
	<title><?=$judul?></title>
</head>
<style>
	body{
		background-image: url('<?=base_url('assets/img/bg.png')?>');
		background-repeat: no-repeat;
		background-size: cover;
		width: 100%;
	    font-family: 'Poppins', sans-serif;
	}
</style>
<body>
	<div class="mask">
		<div class="header">
			<div class="header-brand">
				<img class="logo" src="<?=base_url('assets/img/logo.png')?>" alt="">
				<p class="header-text">SISTEM PAKAR ENDOKRIN</p>
			</div>
			<a href="<?=base_url('login')?>">ADMIN</a>
		</div>
		<div class="center">
			<p class="center-text">Selamat Datang Di Sistem Pakar Mendiagnosa Penyakit Endokrin Pada Manusia Menggunakan Metode Teorema Bayes</p>
			<a class="button-diagnosa" href="<?=base_url('user/diagnosa')?>">
				<span>MULAI MENDIAGNOSA</span>
			</a>
		</div>
	</div>
</body>
</html>
