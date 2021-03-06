<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- My css -->
    <link rel="stylesheet" href="Style.css">
    <title>Pencegahan Covid-19</title>
</head>

<?php
	session_start(); //starts the session
	if($_SESSION['user']){ //checks if user is logged in
	}
	else{
		header("location:login.php"); // redirects if user is not logged in
	}
	$user = $_SESSION['user']; //assigns user value
	?>

<body>
    <!--Logo-->

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar">Yuk Menjaga Kebersihan Bersama-Sama</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ml-auto">
                <!--ml-auto untuk margin auto ke kanan-->
                <a class="nav-item nav-link" href="Home.html">HOME</a>
                <a class="nav-item nav-link" href="Project.html">Pencegahan Covid-19</a>
                <a class="nav-item nav-link" href="statistik.html">Data Statistik Covid-19</a>
                <a class="nav-item nav-link" href="Home.html">KUIS</a>
                <a class="nav-item nav-link" href="Home.html">KONTAK</a>
            </div>
        </div>
    </nav>

    <!--JumboTron-->
    <div class="jumbotron-fluid">
        <div class="container">
            <div class="row">
                <!-- Kolom Kiri -->
                <div class="col">
                    <img class="img-fluid" src="Doctor.png" alt="">
                </div>
                <!-- Kolom Kanan -->
                <div class="col">
                    <h1 class="display-1">Pencegahan Terhadap Covid-19</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
                            <div class="mx-auto">
                            <body>Video</head>
                                <a href="https://www.youtube.com/watch?v=X2vOp18ZlQA" target="_blank" class="btn btn-primary mx-auto">Cek Disini!</a>
                            </div>
                        </div>

        <!--Menghindari Covid 19-->
        <div class="container">
            <div class="row">
                <div class="col-sm">
                    Penerapan 5M
                </div>
                <div class="col-sm">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="Pasien1.png" alt="Card image cap">
                        <div class="card-body">
                            <a href="" class="card-text">Memakai Masker</a>
                            <p class="card-text">Setiap Keluar Rumah</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="Pasien2.png" alt="Card image cap">
                        <div class="card-body">
                            <a href="" class="card-text">Mencuci Tangan</a>
                            <p class="card-text">Sehabis Memegang Apapun</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="mobilitas.jpg" alt="Card image cap">
                        <div class="card-body">
                            <a href="" class="card-text">Mengurangi Mobilitas</a>
                            <p class="card-text">#DIRUMAH AJA</p>
                        </div>
                    </div>
                </div>
            </div>
                <div class="col-sm">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="menjaga jarak.jpg" alt="Card image cap">
                        <div class="card-body">
                            <a href="" class="card-text">Menjaga Jarak</a>
                            <p class="card-text">#DIRUMAH AJA</p>
                        </div>
                    </div>
                </div>
            </div>
                <div class="col-sm">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="kerumunan.jpg" alt="Card image cap">
                        <div class="card-body">
                            <a href="" class="card-text">Menjauhi Kerumunan</a>
                            <p class="card-text">#DIRUMAH AJA</p>
                        </div>
                    </div>
                </div>
            </div> 



            <!--Penjelasan Tentang Covid-19-->
            <div class="container">
                <div class="row">
                    <div class="col-sm">
                        <b>Penyebaran Virus Corona</b><br>
                        Virus corona merupakan keluarga besar virus yang menyebabkan penyakit flu biasa hingga penyakit
                        yang
                        lebih parah seperti MERS dan SARS. Dilansir dari cdc.gov, virus corona dapat menyebar dari orang
                        yang terinfeksi ke orang lain melalui berbagai cara, seperti: Melalui udara dengan batuk dan
                        bersin,
                        kontak pribadi seperti menyentuh dan berjabat tangan. Menyentuh benda atau permukaan dengan
                        virus di
                        atasnya, kemudian menyentuh mulut, hidung, atau mata sebelum mencuci tangan.<br>
                        <br>
                        <b>Gejala Virus Corona</b><br>
                        Sekitar 20 persen pasien mempunyai kasus penyakit yang parah atau menjadi sakit kritis. Demam
                        menjadi gejala paling umum di antara pasien yang terpapar corona. Penelitian yang melibatkan
                        hampir
                        140 pasien di Rumah Sakit Zhongnan, Universitas Wuhan, mengidentifikasi pola khas gejala yang
                        terkait dengan virus corona Covid-19.<br>

                        Melansir dari website resmi Kementerian Kesehatan terkait gejala Novel coronavirus (2019-nCoV),
                        yaitu:<br>
                        1. Demam<br>
                        2. Batuk dan Pilek<br>
                        3. Gangguan Pernapasan<br>
                        4. Sakit Tenggorokan<br>
                        5. Letih dan lesu<br>
                        <br>
                        <b>Lakukan Langkah Pencegahan</b><br>
                        Melansir dari Kemenkes mengenai hal-hal penting yang seharusnya mulai dibiasakan sebagai bentuk
                        pencegahan virus corona atau COVID-19. Oleh karena itu, sebaiknya melakukan langkah pencegahan
                        dengan cara<br>

                        1. Memakai Masker<br>
                        2. Mencuci Tangan<br>
                        3. Mengurangi Mobilitasi<br>
                        4. Menjaga Jarak<br>
                        5. Menjauhi Kerumunan<br>
                    </div>
                </div>
            </div>

        

            <!-- Optional JavaScript -->
            <!-- jQuery first, then Popper.js, then Bootstrap JS -->
            <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
                integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
                crossorigin="anonymous">
            </script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
                integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
                crossorigin="anonymous">
            </script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
                integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
                crossorigin="anonymous">
            </script>
</body>

</html>