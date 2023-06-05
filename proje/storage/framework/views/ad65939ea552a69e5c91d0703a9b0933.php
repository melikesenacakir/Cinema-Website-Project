<!doctype html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cinema MSB</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" ></script>
    <script class="searchfilm" >
        function searchFilm(event) {
            event.preventDefault();

            var film = document.getElementById("filmInput").value.toLowerCase();

            var filmList = [
                { ad: "hızlı ve öfkeli 10", sayfa: "/hizliof" },
                { ad: "galaksinin koruyucuları", sayfa: "/galaksi" },
                { ad: "araf", sayfa: "/araf" },
                { ad: "karanlık gece", sayfa: "/karanlik" },
                { ad: "neşeli çiftlik", sayfa: "/neseli" },
                { ad: "kurak günler", sayfa: "/kurak" },
                { ad: "mannu", sayfa: "/mannu" },
                { ad: "kötü ruh", sayfa: "/kotu" },
                { ad: "aşkın bununla", sayfa: "/askin" },
                { ad: "resmi yarışma", sayfa: "/resmiyaris" },
                { ad: "dali diyarı", sayfa: "/dali" },
                { ad: "korsaj", sayfa: "/korsaj" },
            ];

            var filmLink = null;

            for (var i = 0; i < filmList.length; i++) {
                if (film === filmList[i].ad) {
                    filmLink = filmList[i].sayfa ;
                    break;
                }
            }

            if (filmLink) {
                window.location.href = filmLink;
            } else {
                alert("Aranan film bulunamadı!");
            }
        }
    </script>


</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark" >
    <div class="container-fluid">
        <div class="row mb-0 me-2">
            <div class="col mb-0">
                <img src="../Resimler/amblem.png" style="height: 50px" class="img-fluid" alt="..."></img>
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
                        <li><a class="dropdown-item" href="/aksiyon">Aksiyon</a></li>
                        <li><a class="dropdown-item" href="/romantik">Romantik-Komedi</a></li>
                        <li><a class="dropdown-item" href="/animasyon">Animasyon</a></li>
                        <li><a class="dropdown-item" href="/biyografi">Biyografi</a></li>
                        <li><a class="dropdown-item" href="/dram">Dram</a></li>
                        <li><a class="dropdown-item" href="/korku">Korku</a></li>
                    </ul>
                </li>

            </ul>
            <form class="d-flex me-2" role="search" onsubmit="searchFilm(event)">
                <button class="btn btn-light text-dark btn-sm rounded-start-pill" type="submit">
                    <img src="Resimler/arama.png" class="img-fluid" style="height: 30px;">
                </button>
                <input id="filmInput" class="form-control me-auto rounded-end-pill" type="search" placeholder="aradığınız film nedir?" aria-label="Search">
            </form>
            <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                <div class="btn-group-sm me-2 mt-1" role="group" aria-label="First group">
                    <button type="button" class="btn btn-outline-secondary" ><a href="/login" style="text-decoration:none" class="text-light">Oturum aç</a> </button>
                </div>
                <div class="btn-group-sm me-2 mt-1" role="group" aria-label="Second group">
                    <button type="button" class="btn btn-outline-secondary"><a href="/kayit" style="text-decoration:none" class="text-light">Kayıt ol</a> </button>
                </div>
            </div>
        </div>
    </div>
</nav>
<div class="card" style="">
    <div class="row no-gutters">
        <div class="col-md-4">
            <img src="/Resimler/mannucanakkalede.jpg" class="card-img" alt="..." style="width: 400px; height: 450px;">
        </div>
        <div class="col-md-8">
            <div class="card-body d-flex flex-column justify-content-between">
                <div>
                    <h1 class="card-title">MANNU ÇANAKKALEDE</h1>
                    <h6 class="card-text">14 Nisan 2023 Cuma</h6>
                    <h6 class="card-text">Yönetmen: Şenol Kılıç</h6>
                    <h6 class="card-text">Süre:81 dakika</h6>
                    <a href="#"><i class="fa fa-instagram mx-md-1"></i><img style="background-color: white" class="rounded-5" src="/Resimler/genel-izleyici.png" width="20" height="20"></a>
                </div>
                <div class="align-self-end">
                    <a href="#" class="btn btn-primary">Biletini Al</a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container mt-4">
    <div class="row">
        <div class="">
            <div class="">
                <h3 class="card-subtitle mb-2">ÖZET:</h3>
                <h5 class="card-text">Avustralya’dan Çanakkale’ye uzanan macera dolu bir serüven.Sevimli koala Mannu, Anzak törenlerine katılmak için yola çıkan sahibinin sırt çantasına gizlice girdiğinde başına neler geleceğinden habersizdi. Kahramanımızın sahibi William, dedesinin Çanakkale Savaşı’ndan hatıra olarak gönderdiği değerli bir madalyon takmaktadır. Madalyonun peşindeki hırsızlardan habersiz, gemide uzaktan İzmir’i seyrederken çıkan arbededede, Mannu ve hırsızlar, değerli madalyonla birlikte denize düşerler. Kıyıya çıkmayı başaran Mannu’ ya sahibini bulması için sokak kedisi Pala yardımcı olur. Hırsızlarla yolları yine kesişen Mannu’ yu bu sefer polis Ayşe ve köpeği Minik kurtarır. Avustralya dan Gelibolu’ya uzanan yolculukta yaşlı bir nine Mannu’ nun her başı derde girdiğinde yanı başında belirip onu kurtarır. Oysa gerçek çok farklıdır.</h5>
            </div>
        </div>
    </div>
</div>


<footer class="bg-dark"  >
        <div class="container text-white mt-5">
            <div class="row">
                <div class="col-md-2">
                    <h3><b>CinemaMSB</b></h3>
                    <img src="/Resimler/amblem.png " width="150" height="100">
                </div>
                <div class="col-md-2">
                    <h6><br></h6>
                    <ul class="list-unstyled">
                        <li><a style="color: #ced4da" href="/">Anasayfa</a></li>
                        <li><a style="color: #ced4da" href="/#vizyondakifilmler">Vizyondaki Filmler</a></li>



                    </ul>
                </div>
                <div class="col-md-3">
                    <h6><br></h6>
                    <ul class="list-unstyled">
                        <li><a style="color: #ced4da" href="/kvk">KVK Aydınlatma Bildirimi</a></li>
                        <li><a style="color: #ced4da" href="/kvkpol">KVK Politikasi</a></li>
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
                    <a href="https://www.secure.instagram.com/accounts/login/"><i class="fa fa-instagram mx-md-1"></i><img style="background-color: white" class="rounded-5" src="../Resimler/instagram.png" width="20" height="20"></a>
                    <a href="https://tr-tr.facebook.com/"><i class="fa fa-facebook mx-md-1"></i><img style="background-color: white" class="rounded-5" src="../Resimler/facebook.png"  width="20" height="20"></a>
                    <a href="https://twitter.com/"><i class="fa fa-twitter mx-md-1"></i><img style="background-color: white" class="rounded-5" src="../Resimler/twitter.png" width="20" height="20"></a>


                </div>
                <div class="clearfix"></div>
                <p class="mt-5 float-right">© CinemaMSB 2023 </p>
            </div>
        </div>
    </footer>







</body>
</html>
<?php /**PATH C:\xampp\htdocs\proje\resources\views/project/filmler/mannucanakkalede.blade.php ENDPATH**/ ?>