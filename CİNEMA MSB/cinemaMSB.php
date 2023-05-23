<!doctype html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cinema MSB</title>
    <link rel="stylesheet" href="bootstrap-5.3.0-alpha3-dist/css/bootstrap.css">

    <title>CinemaMSB</title>

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
                <img src="amblem.png" style="height: 50px" class="img-fluid" alt="..."></img>
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
                        <li><a class="dropdown-item" href="#">Aksiyon</a></li>
                        <li><a class="dropdown-item" href="#">Romantik</a></li>
                        <li><a class="dropdown-item" href="#">Komedi</a></li>
                        <li><a class="dropdown-item" href="#">Çizgi Film</a></li>
                        <li><a class="dropdown-item" href="#">Bilim Kurgu</a></li>
                        <li><a class="dropdown-item" href="#">Korku</a></li>
                    </ul>
                </li>

            </ul>
            <form class="d-flex me-2" role="search">
                <input class="form-control me-2" type="search" placeholder="aradığınız film nedir?" aria-label="Search">
                <button class="btn btn-light text-dark" type="submit">
                    <img src="popcornbüyütec.jpg" class="img-fluid" style="height: 30px;">
                </button>
            </form>
            <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                <div class="btn-group-sm me-2 mt-1" role="group" aria-label="First group">
                    <button type="button" class="btn btn-outline-light">Oturum aç</button>
                </div>
                <div class="btn-group-sm me-2 mt-1" role="group" aria-label="Second group">
                    <button type="button" class="btn btn-outline-light">Kayıt ol</button>
                </div>
            </div>
        </div>
    </div>
</nav>
<script src="bootstrap.bundle.js"></script>
<div id="carouselExampleIndicators" class="carousel slide">
    <div class="carousel-indicators bg-dark mb-auto">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner ">
        <div class="carousel-item active">
            <img src="aciliskapanis.jpg" class="d-block mx-auto img-fluid" style="height: 500px;" alt="...">
        </div>
        <div class="carousel-item">
            <img src="sale.jpg" class="d-block mx-auto img-fluid" style="height: 500px;" alt="...">
        </div>
        <div class="carousel-item">
            <img src="temp.jpg" class="d-block mx-auto img-fluid" style="height: 500px;" alt="...">
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
    <script src="bootstrap.bundle.js"></script>
    <!-- container start!-->
    <div class="container mt-4">
        <div class="row">
            <div class="col-sm-3 mt-4">
                <div class="card custom-card" >
                    <img src="hizliveofkeli10.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text" style="font-size: larger; font-weight: bold;">HIZLI VE ÖFKELİ 10</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 mt-4">
                <div class="card custom-card" >
                    <img src="galaksininkoruyuculari3.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text" style="font-size: larger; font-weight: bold;">GALAKSİNİN KORUYUCULARI</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 mt-4">
                <div class="card custom-card" >
                    <img src="araf-6-olum.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text" style="font-size: larger; font-weight: bold;">ARAF 6:ÖLÜM</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 mt-4">
                <div class="card custom-card" >
                    <img src="karanlikgece.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text" style="font-size: larger; font-weight: bold;">KARANLIK GECE</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 mt-5">
                <div class="card custom-card" >
                    <img src="neseliciftliktrenkalkiyor.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text" style="font-size: larger; font-weight: bold;">NEŞELİ ÇİFTLİK:TREN KALKIYOR</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 mt-5">
                <div class="card custom-card" >
                    <img src="kurak-gunler-.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text" style="font-size: larger; font-weight: bold;">KURAK GÜNLER</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 mt-5">
                <div class="card custom-card" >
                    <img src="mannucanakkalede.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text" style="font-size: larger; font-weight: bold;">MANNU ÇANAKKALEDE</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 mt-5">
                <div class="card custom-card" >
                    <img src="kotu-ruh-uyanis.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text" style="font-size: larger; font-weight: bold;">KÖTÜ RUH:UYANIŞ</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 mt-5">
                <div class="card custom-card" >
                    <img src="askin-bununla-ne-ilgisi-var-.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text" style="font-size: larger; font-weight: bold;">AŞKIN BUNUNLA NE İLGİSİ VAR?</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 mt-5">
                <div class="card custom-card" >
                    <img src="resmi-yarisma-.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text" style="font-size: larger; font-weight: bold;">RESMİ YARIŞMA</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 mt-5">
                <div class="card custom-card" >
                    <img src="dali-diyari.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text" style="font-size: larger; font-weight: bold;">DALİ DİYARI</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 mt-5">
                <div class="card custom-card" >
                    <img src="korsaj-.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text" style="font-size: larger; font-weight: bold;">KORSAJ</p>
                    </div>
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
                    <img src="amblem.png " width="150" height="100">
                </div>
                <div class="col-md-2">
                    <h6><br></h6>
                    <ul class="list-unstyled">
                        <li><a style="color: #ced4da" href="#">Anasayfa</a></li>
                        <li><a style="color: #ced4da" href="#">Filmler</a></li>
                        <li><a style="color: #ced4da" href="#">Vizyondakiler</a></li>


                    </ul>
                </div>
                <div class="col-md-3">
                    <h6><br></h6>
                    <ul class="list-unstyled">
                        <li><a style="color: #ced4da"" href="#">KVK Aydınlatma Bildirimi</a></li>
                        <li><a style="color: #ced4da" href="#">KVK Politikasi</a></li>
                        <li><a style="color: #ced4da" href="#">Hakkımızda</a></li>
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
                    <a href="#"><i class="fa fa-instagram mx-md-1"></i><img style="background-color: white" class="rounded-5" src="instagram.png" width="20" height="20"></a>
                    <a href="#"><i class="fa fa-facebook mx-md-1"></i><img style="background-color: white" class="rounded-5" src="facebook.png"  width="20" height="20"></a>
                    <a href="#"><i class="fa fa-twitter mx-md-1"></i><img style="background-color: white" class="rounded-5" src="twitter.png" width="20" height="20"></a>


                </div>
                <div class="clearfix"></div>
                <p class="mt-5 float-right">© CinemaMSB 2023 </p>
            </div>
        </div>
    </footer>


</div>
</body>
</html>
