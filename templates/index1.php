<?php
// error_reporting(0);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Traffic's</title>
    <!-- <link rel="stylesheet" href="style.css"> -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous"> -->
    <!-- Bootstrap CSS -->
		<link rel="stylesheet" type="text/css" href="../static/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="../static/style.css">
       
</style> 
</head>
<body>

        <header>
			<div class="container">
				<nav class="navbar navbar-expand-lg navbar-light">
					<a class="navbar-brand" href="#"><b>Traffic's</b></a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>

					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="navbar-nav mr-auto">
							<li class="nav-item active">
								<a class="nav-link" href="index.php">Beranda</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="profil.php">Profil</a>
							</li>
						</ul>
						<a href="login" class="btn btn-outline-primary my-2 my-sm-0">Login</a>
					</div>
				</nav>
			</div>
		</header>

        <!-- Awal Jumbotron -->
		<section class="jumbotron-bg">
			<div class="jumbotron warna-bg text-white">
				<div class="container">
					<h1 class="display-4">Traffic Monitoring</h1>
					<p class="lead">Hallo user! Selamat datang di website Traffic Monitoring. Website ini dapat digunakan para pengendara yang akan bepergian agar dapat menghindari kemacetan dan tidak telat sampai tujuan. Website ini akan memberikan anda rekomendari jalan yang sebaiknya anda lalui dan anda dapat melihat langsung situasi lalu lintas pada jalur tersebut secara realtime.</p>
				</div>
			</div>
		</section>

        <div class="card">
        <div class="card-body">
            <div class="card-header mb-3">
                <div class="">
                    Silahkan masukkan lokasi anda dan tujuan anda!!!
                </div>
            </div>

            <form action="" method="POST">
                <div class="mb-3 row">
                    <label for="alamat" class="col-sm-2 col-form-label">Lokasi Anda</label>
                    <div class="col-sm-10">
                        <select name="lokasi" id="lokasi" style="width: 100%; height: 100%;">
                            <option value="" >---Pilih Lokasi Anda---</option>
                            <option value="Lubuk Minturun">Lubuk Minturun</option>
                        </select>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="alamat" class="col-sm-2 col-form-label">Tujuan Anda</label>
                    <div class="col-sm-10">
                        <select name="lokasi" id="lokasi" style="width: 100%; height: 100%;">
                            <option value="" >---Pilih Tujuan Anda---</option>
                            <option value="Lubuk Minturun">Politeknik Negeri Padang</option>
                        </select>
                    </div>
                </div>

                <a href="#" ><button type="button" class="btn btn-primary" title="Tampilkan Rekomendasi jalan dan Traffic Monitoring">OK</button></a>
                <!-- <input type="submit" name="OK" value="OK" class="btn btn-primary" title="OK" /> -->
                <a href="index1.php"><button type="button" class="btn btn-warning" title="Bersihkan INPUT TEXT">Clear</button></a>


            </form>
            <div class = "y">
                <center><h1>Vehicle Counting</h1></center>
                <div class="mb-3row"> 
                <label for="alamat" style="font-size:30px;" class="col-sm-4 col-form-label">Kuranji</label>
                <label for="alamat" style="font-size:30px;" class="col-sm-3 col-form-label">By Pass</label>
                </div>
                <img src="{{ url_for('video_feed') }}" style="width:500px;height: 400px;">
                <img src="{{ url_for('video_feed1') }}" style="width:500px;height: 400px;">
            </div>
        </div>
    </div> 
    </div>

    

		<!-- Akhir Jumbotron -->
    <div class="card-footer text-muted ">
    
				<p class="text-center">&copy; Tugas Akhir Yuliano Komanjali-Implementasi Traffic Monitoring Menggunakan Smart Surveillance dalam Inteligent Transportation System 2023-<?= date('Y') ?>
			</p>
		</div>
		<!-- Akhir Content -->

		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<!-- <script type="text/javascript" src="../static/jquery-3.4.1.slim.min.js"></script>
		<script type="text/javascript" src="../static/popper.min.js"></script>
		<script type="text/javascript" src="../static/bootstrap.min.js"></script> -->
</body>
</html>