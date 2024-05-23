<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Home User</title>
</head>
<style>
	*{
		margin: 0px;
		padding: 0px
	}
	/* Font-Style */
	@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400&display=swap');
	body{
		background-image: url('<?=base_url('assets/img/bg.png')?>');
		background-repeat: no-repeat;
		background-size: cover;
		width: 100%;
	    font-family: 'Poppins', sans-serif;
	}
	.page{
		flex: 1;
		width: 100%;
		height: 100%;
		background-color: #ddd;
		background-position: 50%;
	}
	.mask {
		position: absolute;
		background-size: cover;
		background-position: center center;
		top: 0;
		left: 0;
		width: 100%;
		height: 100%;
		opacity: 0.8;
		overflow: hidden;
		background-image: linear-gradient(195deg, #42424a 0%, #191919 100%);
	}
	.header{
		margin-top: 30px;
		display: flex;
		align-items: center;
		padding: 10px 100px;
		background: #ffffff40;
	}
	.logo{
		width: 50px;
	}
	.header-text{
		margin-left: 10px;
		font-size: 28px;
		font-weight: 600;
		color: #fff;
		font-style: italic;
	}
	.center{
		display: flex;
		flex-direction: column;
		justify-content: center;
		align-items: center;
		width: 100%;
		height: 100%;
	}
	.center-text{
		width: 590px;
		text-align: center;
		font-size: 34px;
		font-weight: 600;
		color: white;
	}
	.button-diagnosa{
		margin-top: 30px;
		text-decoration: none;
		background: #2d2df8;
		color:white;
		padding: 15px;
		border-radius: 10px;
		font-weight: 600;
	}
</style>
<body>
	<div class="mask">
		<div class="header">
			<img class="logo" src="<?=base_url('assets/img/logo.png')?>" alt="">
			<p class="header-text">SISTEM PAKAR ENDOKRIN</p>
		</div>
		<div class="center">
			<p class="center-text">Selamat Datang Di Sistem Pakar Mendiagnosa Penyakit Endokrin Pada Manusia Menggunakan Metode Teorema Bayes</p>
			<a class="button-diagnosa" href="">
				<span>Mulai Mendiagnosa</span>
			</a>
		</div>
	</div>
</body>
</html>
