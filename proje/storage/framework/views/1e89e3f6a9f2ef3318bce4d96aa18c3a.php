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
            margin-bottom: 60px;
        }
    </style>
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

<script>
    function validateForm() {
        var isim = document.getElementById("isim").value;
        var kart_numarasi = document.getElementById("kart_numarasi").value;
        var son_kullanma_tarihi = document.getElementById("son_kullanma_tarihi").value;
        var guvenlik_kodu = document.getElementById("guvenlik_kodu").value;

        if (isim == "" || kart_numarasi == "" || son_kullanma_tarihi == "" || guvenlik_kodu == "") {
            alert("Lütfen tüm bilgileri doldurunuz.");
            return false;
        } else {
            var encodedIsim = encodeURIComponent(isim);
            var encodedKartNumarasi = encodeURIComponent(kart_numarasi);
            var encodedSonKullanmaTarihi = encodeURIComponent(son_kullanma_tarihi);
            var encodedGuvenlikKodu = encodeURIComponent(guvenlik_kodu);
            var url = "bilet_satin_al.php?isim=" + encodedIsim + "&kart_numarasi=" + encodedKartNumarasi + "&son_kullanma_tarihi=" + encodedSonKullanmaTarihi + "&guvenlik_kodu=" + encodedGuvenlikKodu;
            alert("Biletiniz satın alınmıştır. İyi seyirler!");
            return true;
        }
    }
</script>

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
                        <li><a class="dropdown-item" href="#">Öneri Ve Şikayet</a></li>
                        <li><a class="dropdown-item" href="/iletisim">İletişim</a></li>
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
<div class="container mt-3 rounded">
    <div class="row">
        <div class="col-md-6">
            <img src="Resimler/ödeme.png" class="rounded img-fluid" width="400" height="400">
        </div>
        <div class="col-md-6 d-flex justify-content-center align-items-center bg-light rounded">
            <div class="w-75">
                <h3>CinemaMSB'ye hoşgeldiniz!</h3>
                <p>Satın almak istediğiniz bilet için aşağıdaki bilgileri doldurun.</p>
                <form action="/biletsatinal" method="get" onsubmit="return validateForm()">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="isim" name="isim" placeholder="İsim">
                        <label for="isim">İsim Soyisim</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="kart_numarasi" name="kart_numarasi" placeholder="Kart Numarası">
                        <label for="kart_numarasi">Kart Numarası</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="son_kullanma_tarihi" name="son_kullanma_tarihi" placeholder="Son Kullanma Tarihi (Ay/Yıl)">
                        <label for="son_kullanma_tarihi">Son Kullanma Tarihi (Ay/Yıl)</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="guvenlik_kodu" name="guvenlik_kodu" placeholder="Güvenlik Kodu">
                        <label for="guvenlik_kodu">Güvenlik Kodu</label>
                    </div>
                    <div class="d-grid gap-3">
                        <input type="submit" class="btn btn-primary" value="ÖDEME YAP">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

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
<?php /**PATH C:\xampp\htdocs\proje\resources\views/project/ödemeyap.blade.php ENDPATH**/ ?>