<!doctype html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cinema MSB</title>
    <link rel="stylesheet" href="bootstrap.css">
    <script src="bootstrap.bundle.js"></script>

    <style>
        .card-img-top {
            transition: transform 0.3s;
        }

        .card:hover .card-img-top {
            transform: scale(1.1);
        }
    </style>

    <style>
        .custom-card{
            width: 300px;
            height: 400px;
        }
    </style>

    <style>
        .custom-card {
            margin-bottom: 60px; /* Kartlar arasındaki boşluğu artırmak için kullanılan stil */
        }
    </style>




</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark" >
    <div class="container-fluid">
        <div class="row mb-0 me-2">
            <div class="col mb-0">
                <img src="Resimler/amblem.png" style="height: 50px" class="img-fluid" alt="..."></img>
            </div>
        </div>
        <span class="navbar-brand mb-0 h1">CinemaMSB</span>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-light" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        MENÜ
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Bilet İşlemleri</a></li>
                        <li><a class="dropdown-item" href="#">Öneri Ve Şikayet</a></li>
                        <li><a class="dropdown-item" href="#">İletişim</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-light" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        FİLM TÜRLERİ
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="aksiyon.php">Aksiyon</a></li>
                        <li><a class="dropdown-item" href="romantik-komedi.php">Romantik-Komedi</a></li>
                        <li><a class="dropdown-item" href="animasyon.php">Animasyon</a></li>
                        <li><a class="dropdown-item" href="biyografi.php">Biyografi</a></li>
                        <li><a class="dropdown-item" href="dram.php">Dram</a></li>
                        <li><a class="dropdown-item" href="korku.php">Korku</a></li>
                    </ul>
                </li>

            </ul>
            <form class="d-flex me-2" role="search">
                <button class="btn btn-light text-dark btn-sm rounded-start-pill" type="submit">
                    <img src="Resimler/arama.png" class="img-fluid" style="height: 30px;">
                </button>
                <input class="form-control me-auto rounded-end-pill" type="search"  placeholder="aradığınız film nedir?" aria-label="Search">
            </form>
            <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                <div class="btn-group-sm me-2 mt-1" role="group" aria-label="First group">
                    <button type="button" class="btn btn-outline-secondary" ><a href="login.php" style="text-decoration:none" class="text-light">Oturum aç</a> </button>
                </div>
                <div class="btn-group-sm me-2 mt-1" role="group" aria-label="Second group">
                    <button type="button" class="btn btn-outline-secondary"><a href="kayit.php" style="text-decoration:none" class="text-light">Kayıt ol</a> </button>
                </div>
            </div>
        </div>
    </div>
</nav>
<div id="carouselExampleIndicators" class="carousel slide">
    <div class="carousel-indicators bg-dark mb-auto">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner ">
        <div class="carousel-item active">
            <img src="Resimler/saat.png" class="d-block mx-auto img-fluid" style="height: 500px;" alt="...">
        </div>
        <div class="carousel-item">
            <img src="Resimler/sale.png" class="d-block mx-auto img-fluid" style="height: 500px;" alt="...">
        </div>
        <div class="carousel-item">
            <img src="Resimler/YAKINDAVİZYONDA!.png" class="d-block mx-auto img-fluid" style="height: 500px;" alt="...">
        </div>
    </div>
    <button class="carousel-control-prev bg-dark" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next bg-dark" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>


<div>
    <!-- container start!-->
    <div  id="vizyondakifilmler" class="container mt-4">
        <div class="row">
            <div class="col-sm-3 mt-4">
                <div class="card custom-card">
                    <a href="hizliveofkeli10.php" style="text-decoration: none;"> <!-- Update the href attribute to the PHP page -->
                        <img src="Resimler/hizliveofkeli10.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text" style="font-size: larger; font-weight: bold; color: black;">HIZLI VE ÖFKELİ 10</p>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-sm-3 mt-4">
                <div class="card custom-card">
                    <a href="galaksininkoruyuculari3.php" style="text-decoration: none;"> <!-- Update the href attribute to the PHP page -->
                        <img src="Resimler/galaksininkoruyuculari3.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text" style="font-size: larger; font-weight: bold; color: black;">GALAKSİNİN KORUYUCULARI</p>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-sm-3 mt-4">
                <div class="card custom-card">
                    <a href="araf-6-olum.php" style="text-decoration: none;"> <!-- Update the href attribute to the PHP page -->
                        <img src="Resimler/araf-6-olum.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text" style="font-size: larger; font-weight: bold; color: black;">ARAF 6:ÖLÜM</p>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-sm-3 mt-4">
                <div class="card custom-card">
                    <a href="karanlikgece.php" style="text-decoration: none;"> <!-- Update the href attribute to the PHP page -->
                        <img src="Resimler/karanlikgece.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text" style="font-size: larger; font-weight: bold; color: black;">KARANLIK GECE</p>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-sm-3 mt-5">
                <div class="card custom-card">
                    <a href="neseliciftliktrenkalkiyor.php" style="text-decoration: none;"> <!-- Update the href attribute to the PHP page -->
                        <img src="Resimler/neseliciftliktrenkalkiyor.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text" style="font-size: larger; font-weight: bold; color: black;">NEŞELİ ÇİFTLİK:TREN KALKIYOR</p>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-sm-3 mt-5">
                <div class="card custom-card">
                    <a href="kurak-gunler.php" style="text-decoration: none;"> <!-- Update the href attribute to the PHP page -->
                        <img src="Resimler/kurak-gunler-.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text" style="font-size: larger; font-weight: bold; color: black;">KURAK GÜNLER</p>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-sm-3 mt-5">
                <div class="card custom-card">
                    <a href="mannucanakkalede.php" style="text-decoration: none;"> <!-- Update the href attribute to the PHP page -->
                        <img src="Resimler/mannucanakkalede.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text" style="font-size: larger; font-weight: bold; color: black;">MANNU ÇANAKKALEDE</p>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-sm-3 mt-5">
                <div class="card custom-card">
                    <a href="kotu-ruh-uyanis.php" style="text-decoration: none;"> <!-- Update the href attribute to the PHP page -->
                        <img src="Resimler/kotu-ruh-uyanis.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text" style="font-size: larger; font-weight: bold; color: black;">KÖTÜ RUH:UYANIŞ</p>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-sm-3 mt-5">
                <div class="card custom-card">
                    <a href="askin-bununla-ne-ilgisi-var.php" style="text-decoration: none;"> <!-- Update the href attribute to the PHP page -->
                        <img src="Resimler/askin-bununla-ne-ilgisi-var-.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text" style="font-size: larger; font-weight: bold; color: black;">AŞKIN BUNUNLA NE İLGİSİ VAR?</p>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-sm-3 mt-5">
                <div class="card custom-card">
                    <a href="resmi-yarisma.php" style="text-decoration: none;"> <!-- Update the href attribute to the PHP page -->
                        <img src="Resimler/resmi-yarisma-.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text" style="font-size: larger; font-weight: bold; color: black;">RESMİ YARIŞMA</p>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-sm-3 mt-5">
                <div class="card custom-card">
                    <a href="dali-diyari.php" style="text-decoration: none;"> <!-- Update the href attribute to the PHP page -->
                        <img src="Resimler/dali-diyari.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text" style="font-size: larger; font-weight: bold; color: black;">DALİ DİYARI</p>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-sm-3 mt-5">
                <div class="card custom-card">
                    <a href="korsaj.php" style="text-decoration: none;"> <!-- Update the href attribute to the PHP page -->
                        <img src="Resimler/korsaj-.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text" style="font-size: larger; font-weight: bold; color: black;">KORSAJ</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- container end!-->
    <!-- footer start -->
    <footer class="bg-dark"  >
        <div class="container text-white mt-5">
            <div class="row">
                <div class="col-md-2">
                    <h3><b>CinemaMSB</b></h3>
                    <img src="Resimler/amblem.png " width="150" height="100">
                </div>
                <div class="col-md-2">
                    <h6><br></h6>
                    <ul class="list-unstyled">
                        <li><a style="color: #ced4da" href="index.php">Anasayfa</a></li>
                        <li><a style="color: #ced4da" href="#vizyondakifilmler">Vizyondaki Filmler</a></li>


                    </ul>
                </div>
                <div class="col-md-3">
                    <h6><br></h6>
                    <ul class="list-unstyled">
                        <li><a style="color: #ced4da" href="kvkaydınlatma.php">KVK Aydınlatma Bildirimi</a></li>
                        <li><a style="color: #ced4da" href="kvkpolitika.php">KVK Politikasi</a></li>

                    </ul>
                </div>
                <div class="col-md-3">
                    <h6><br></h6>
                    <h6><b>İLETİŞİM BİLGİLERİ</b></h6>
                    <ul class="list-unstyled">
                        <li><i style="color: #41464b class="fa fa-map-marker"></i>Adres: Karabük, Merkez Kares AVM</li>
                        <li><i style="color: #41464b class="fa fa-envelope"></i> Email:cinemamsb@example.com</li>
                        <li><i style="color: #41464b class="fa fa-phone"></i> Telefon: +1234567890</li>
                    </ul>

                </div>
                <div class="col-md-2" >
                    <h6><br></h6>
                    <h6><b>SOSYAL MEDYA</b></h6>
                    <a href="https://www.secure.instagram.com/accounts/login/"><i class="fa fa-instagram mx-md-1"></i><img style="background-color: white" class="rounded-5" src="Resimler/instagram.png" width="20" height="20"></a>
                    <a href="https://tr-tr.facebook.com/"><i class="fa fa-facebook mx-md-1"></i><img style="background-color: white" class="rounded-5" src="Resimler/facebook.png"  width="20" height="20"></a>
                    <a href="https://twitter.com/"><i class="fa fa-twitter mx-md-1"></i><img style="background-color: white" class="rounded-5" src="Resimler/twitter.png" width="20" height="20"></a>
                </div>
                <div class="clearfix"></div>
                <p class="mt-5 float-right">© CinemaMSB 2023 </p>
            </div>
        </div>
    </footer>


</div>
</body>
</html>