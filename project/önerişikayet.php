<!doctype html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CinemaMSB - Öneri ve Şikayet</title>
    <link rel="stylesheet" href="bootstrap-5.3.0-alpha3-dist/css/bootstrap.css">
    <script src="bootstrap-5.3.0-alpha3-dist/js/bootstrap.bundle.js"></script>
</head>
<body>

<script>
    function validateForm() {
        var form = document.querySelector("form");
        var formData = new FormData(form);

        var adSoyad = formData.get("ad_soyad");
        var eposta = formData.get("eposta");
        var mesaj = formData.get("mesaj");

        if (adSoyad === "" || eposta === "" || mesaj === "") {
            alert("Lütfen tüm bilgileri doldurunuz.");
            return false;
        } else {
            alert("Öneri veya şikayetiniz gönderilmiştir. Teşekkür ederiz!");
            return true;
        }
    }
</script>


<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
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
                <li class="nav-item">
                    <a class="nav-link text-light" href="#">Bilet İşlemleri</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="#">Öneri ve Şikayet</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="#">İletişim</a>
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

<div class="container mt-3 rounded">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h3 class="text-center">Öneri ve Şikayet</h3>
            <p class="text-center">Lütfen aşağıdaki bilgileri doldurarak öneri veya şikayetinizi bizimle paylaşın.</p>
            <form action="oneri_ve_sikayet.php" method="POST" onsubmit="return validateForm()">
                <div class="mb-3">
                    <label for="ad_soyad" class="form-label">Ad Soyad</label>
                    <input type="text" class="form-control" id="ad_soyad" name="ad_soyad" placeholder="Ad Soyad">
                </div>
                <div class="mb-3">
                    <label for="eposta" class="form-label">E-posta</label>
                    <input type="email" class="form-control" id="eposta" name="eposta" placeholder="E-posta">
                </div>
                <div class="mb-3">
                    <label for="mesaj" class="form-label">Mesajınız</label>
                    <textarea class="form-control" id="mesaj" name="mesaj" rows="5" placeholder="Mesajınız"></textarea>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary">Gönder</button>
                </div>
            </form>
        </div>
    </div>
</div>

<footer class="bg-dark">
    <div class="container text-white mt-5">
        <div class="row">
            <div class="col-md-2">
                <h3><b>CinemaMSB</b></h3>
                <img src="Resimler/amblem.png" width="150" height="100">
            </div>
            <div class="col-md-2">
                <h6><br></h6>
                <ul class="list-unstyled">
                    <li><a style="color: #ced4da" href="index.php">Anasayfa</a></li>
                    <li><a style="color: #ced4da" href="index.php#vizyondakifilmler">Vizyondaki Filmler</a></li>
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
                    <li><i style="color: #41464b" class="fa fa-map-marker"></i>Adres: Karabük, Merkez Kares AVM</li>
                    <li><i style="color: #41464b" class="fa fa-envelope"></i> Email:cinemamsb@example.com</li>
                    <li><i style="color: #41464b" class="fa fa-phone"></i> Telefon: +1234567890</li>
                </ul>
            </div>
            <div class="col-md-2">
                <h6><br></h6>
                <h6><b>SOSYAL MEDYA</b></h6>
                <a href="https://www.secure.instagram.com/accounts/login/"><i class="fa fa-instagram mx-md-1"></i><img style="background-color: white" class="rounded-5" src="Resimler/instagram.png" width="20" height="20"></a>
                <a href="https://tr-tr.facebook.com/"><i class="fa fa-facebook mx-md-1"></i><img style="background-color: white" class="rounded-5" src="Resimler/facebook.png" width="20" height="20"></a>
                <a href="https://twitter.com/"><i class="fa fa-twitter mx-md-1"></i><img style="background-color: white" class="rounded-5" src="Resimler/twitter.png" width="20" height="20"></a>
            </div>
            <div class="clearfix"></div>
            <p class="mt-5 float-right">© CinemaMSB 2023 </p>
        </div>
    </div>
</footer>

</body>
</html>

