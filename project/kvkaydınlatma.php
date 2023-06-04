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

<div>
    <!-- container start!-->
    <div class="page-container">
        <div class="page-title">
            <div class="container">
                <h1>Kişisel Verilerin Korunması Hakkında Aydınlatma Bildirimi</h1>
            </div>
        </div>
        <div class="container m-t-20">
            <div class="page-content">
                <div id="zone-5542" class="zone ">
                    <div id="widget-5543" class="widget">
                        <div class="ui-content">
                            <p style="text-align: center;"><strong>CINEMAMSB KİŞİSEL VERİLERİN KORUNMASI HAKKINDA AYDINLATMA BİLDİRİMİ</strong></p>
                            <p style="text-align: center;"></p>
                            <p>CINEMAMSB olarak, sizlere sunduğumuz hizmetler kapsamında kişisel verilerinizi, 6698 sayılı Kişisel Verilerin Korunması Kanunu (“Kanun”) uyarınca azami özen ve hassasiyet ile işlemekteyiz. 6698 sayılı Kanun kapsamında, şirketimiz ile paylaşmış olduğunuz tarafınıza ait her türlü bilgi “Kişisel Veri” olarak kabul edilecektir.CINEMAMSB ile paylaştığınız kişisel verilerinizin işlenmesine ilişkin daha detaylı bilgiye ana sayfamız üzerinde yer alan Mars Kişisel Verilerin Korunması ve Gizlilik Politikası’ndan erişebilirsiniz.</p>
                            <p>Kişisel verilerinizin hukuka uygun olarak toplanması, saklanması, işlenmesi ve gerekmesi halinde paylaşılması sırasında kişisel verilerinizin güvenli bir şekilde muhafaza edilmesi ve gizliliğinizin korunması amacıyla mümkün olan teknolojik imkanlar dâhilinde ilgili teknik ve idari tedbirleri alıyoruz. Bu çerçevede, verilerinizi nasıl işlendiği, kimlerle ve hangi durumlarda paylaşabileceği hususunda sizleri en şeffaf şekilde bilgilendirmek istiyoruz.</p>
                            <p><strong>&nbsp;a) Veri Sorumlusu</strong></p>
                            <p>6698 sayılı Kişisel Verilerin Korunması Kanunu (“Kanun”) uyarınca kişisel verilerinizi “Veri Sorumlusu” sıfatıyla CINEMAMSB olarak aşağıda açıklanan amaçlar kapsamında işleyebilmekteyiz.</p>
                            <p><strong>&nbsp;b) Kişisel Verileriniz</strong></p>
                            <p>·&nbsp;İsim, soy isim, doğum tarihi gibi kimlik verileriniz,</p>
                            <table class="kvkk-table">
                                <tbody>
                                <tr>
                                    <td>
                                        <p><strong>Hukuki Sebepler:</strong></p>
                                        <p>Sizinle aramızdaki sözleşmenin kurulması veya ifasıyla doğrudan doğruya ilgili olması kaydıyla, açık rızanızın varlığı halinde, hukuki yükümlülüklerimizi yerine getirebilmemiz için zorunlu olması, sizin tarafınızdan alenileştirilmiş olması (alenileştirme amacınızla bağdaştığı ölçüde), bir hakkın tesisi, kullanılması veya korunması için kişisel verilerinizi işlemenin zorunlu olması, temel hak ve özgürlüklerinize zarar vermemek kaydıyla, meşru menfaatlerimiz için zorunlu olması hallerinde.</p>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                            <p>·&nbsp;Telefon numaranız, elektronik posta adresiniz, adresiniz gibi iletişim verileriniz,</p>
                            <table class="kvkk-table">
                                <tbody>
                                <tr>
                                    <td style="width: 642px;"><strong>Hukuki Sebepler: </strong><br>Sizinle aramızdaki sözleşmenin kurulması veya ifasıyla doğrudan doğruya ilgili olması kaydıyla, açık rızanızın varlığı halinde, hukuki yükümlülüklerimizi yerine getirebilmemiz için zorunlu olması halinde, sizin tarafınızdan alenileştirilmiş olması halinde(alenileştirme amacınızla bağdaştığı ölçüde), bir hakkın tesisi, kullanılması veya korunması için kişisel verilerinizi işlemenin zorunlu olması, temel hak ve özgürlüklerinize zarar vermemek kaydıyla, meşru menfaatlerimiz için zorunlu olması hallerinde</td>
                                </tr>
                                </tbody>
                            </table>
                            <p>·&nbsp;Hangi sinemalarda hangi filmi izlediğiniz bilgisinin işlenmesi dolayısıyla konum verileriniz ve satın aldığınız mal ve hizmetlere ilişkin verileriniz,</p>
                            <table class="kvkk-table">
                                <tbody>
                                <tr>
                                    <td>
                                        <p><strong>Hukuki Sebepler:</strong></p>
                                        <p>Açık rızanızın varlığı halinde, hukuki yükümlülüklerimizi yerine getirebilmemiz için zorunlu olması halinde, sizin tarafınızdan alenileştirilmiş olması halinde(alenileştirme amacınızla bağdaştığı ölçüde), temel hak ve özgürlüklerinize zarar vermemek kaydıyla, meşru menfaatlerimiz için zorunlu olması hallerinde.</p>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                            <div class="WordSection1"><br>·&nbsp;Satın aldığınız bilet ve hizmetlerimize ilişkin ödeme bilgileriniz ve müşteri işlem bilgileriniz <br></div>
                            <div class="WordSection1">&nbsp;</div>
                            <div class="WordSection1">
                                <table class="kvkk-table">
                                    <tbody>
                                    <tr>
                                        <td>
                                            <p><strong>Hukuki Sebepler:</strong></p>
                                            <p>Sizinle aramızdaki sözleşmenin kurulması veya ifasıyla doğrudan doğruya ilgili olması kaydıyla, açık rızanızın varlığı halinde, hukuki yükümlülüklerimizi yerine getirebilmemiz için zorunlu olması halinde, sizin tarafınızdan alenileştirilmiş olması halinde(alenileştirme amacınızla bağdaştığı ölçüde), bir hakkın tesisi, kullanılması veya korunması için kişisel verilerinizi işlemenin zorunlu olması, temel hak ve özgürlüklerinize zarar vermemek kaydıyla, meşru menfaatlerimiz için zorunlu olması hallerinde.</p>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                                <p>·&nbsp;Talep ve şikâyetleriniz çerçevesinde bizzat ilettiğiniz diğer kişisel verileriniz,</p>
                                <table class="kvkk-table">
                                    <tbody>
                                    <tr>
                                        <td><strong>Hukuki Sebepler: </strong><br>Sizinle aramızdaki sözleşmenin kurulması veya ifasıyla doğrudan doğruya ilgili olması kaydıyla, açık rızanızın varlığı halinde, hukuki yükümlülüklerimizi yerine getirebilmemiz için zorunlu olması halinde, sizin tarafınızdan alenileştirilmiş olması halinde(alenileştirme amacınızla bağdaştığı ölçüde), bir hakkın tesisi, kullanılması veya korunması için kişisel verilerinizi işlemenin zorunlu olması, temel hak ve özgürlüklerinize zarar vermemek kaydıyla, meşru menfaatlerimiz için zorunlu olması hallerinde.</td>
                                    </tr>
                                    </tbody>
                                </table>
                                <p>· Ürün ve hizmetlerimizin kullanımına yönelik işlem ve kullanım bilgileriniz ile pazarlama bilgileriniz,</p>
                                <table class="kvkk-table">
                                    <tbody>
                                    <tr>
                                        <td>
                                            <p><strong>Hukuki Sebepler:</strong></p>
                                            <p>Sizinle aramızdaki sözleşmenin kurulması veya ifasıyla doğrudan doğruya ilgili olması kaydıyla, açık rızanızın varlığı halinde, hukuki yükümlülüklerimizi yerine getirebilmemiz için zorunlu olması halinde, sizin tarafınızdan alenileştirilmiş olması halinde(alenileştirme amacınızla bağdaştığı ölçüde), bir hakkın tesisi, kullanılması veya korunması için kişisel verilerinizi işlemenin zorunlu olması, temel hak ve özgürlüklerinize zarar vermemek kaydıyla, meşru menfaatlerimiz için zorunlu olması hallerinde.</p>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                                <p>·&nbsp;İnternet sitelerimizi kullanmanız halinde, çerezler vasıtasıyla edindiğimiz davranış ve dijital iz bilgileriniz,</p>
                                <table class="kvkk-table">
                                    <tbody>
                                    <tr>
                                        <td style="width: 642px;">
                                            <p><strong>Hukuki Sebepler:</strong></p>
                                            <p>Sizinle aramızdaki sözleşmenin kurulması veya ifasıyla doğrudan doğruya ilgili olması kaydıyla, açık rızanızın varlığı halinde, hukuki yükümlülüklerimizi yerine getirebilmemiz için zorunlu olması halinde, temel hak ve özgürlüklerinize zarar vermemek kaydıyla, meşru menfaatlerimiz için zorunlu olması hallerinde.</p>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                                <p>·&nbsp;Müşteri temsilcileri tarafından çağrı merkezi standartları gereği tutulan sesli görüşme( işitsel) kayıtlarınız</p>
                                <table class="kvkk-table">
                                    <tbody>
                                    <tr>
                                        <td>
                                            <p><strong>Hukuki Sebepler:</strong></p>
                                            <p>Hukuki yükümlülüklerimizi yerine getirebilmemiz için zorunlu olması halinde, sizin tarafınızdan alenileştirilmiş olması halinde(alenileştirme amacınızla bağdaştığı ölçüde), bir hakkın tesisi, kullanılması veya korunması için kişisel verilerinizi işlemenin zorunlu olması, temel hak ve özgürlüklerinize zarar vermemek kaydıyla, meşru menfaatlerimiz için zorunlu olması hallerinde.</p>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                                <p>·&nbsp;Salonlarımızı ziyaret etmeniz halinde kamera kayıt görüntüleriniz (görsel ve işitsel kayıtlarınız) ile fiziksel mekân güvenlik bilgisi</p>
                                <table class="kvkk-table">
                                    <tbody>
                                    <tr>
                                        <td>
                                            <p>Hukuki Sebepler:</p>
                                            <p>Hukuki yükümlülüklerimizi yerine getirebilmemiz için zorunlu olması halinde, bir hakkın tesisi, kullanılması veya korunması için kişisel verilerinizi işlemenin zorunlu olması, temel hak ve özgürlüklerinize zarar vermemek kaydıyla, meşru menfaatlerimiz için zorunlu olması hallerinde.</p>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                                <p>·&nbsp;İş hukuku kapsamında şirketimizde çalışan, çalışan adayı, stajyer konumunda bulunmanız halinde gerekli olan verileriniz ile özlük bilgileriniz, mesleki deneyim bilgileriniz, özel nitelikli verileriniz (Felsefi İnanç, Din, Mezhep Ve Diğer İnançlar, Sağlık Bilgileri, Ceza Mahkûmiyeti Ve Güvenlik Tedbirleri, Biyometrik Veri), çalışan adayı bilgileriniz, çalışan bilgileriniz, imza, meslek/görev/unvan bilgileriniz, çalışan işlem güvenliği bilgileriniz.</p>
                                <table class="kvkk-table">
                                    <tbody>
                                    <tr>
                                        <td>
                                            <p>Hukuki Sebepler:</p>
                                            <p>Kanunlarda açıkça öngörülmesi, sizinle aramızdaki sözleşmenin kurulması veya ifasıyla doğrudan doğruya ilgili olması kaydıyla, açık rızanızın varlığı halinde, hukuki yükümlülüklerimizi yerine getirebilmemiz için zorunlu olması halinde, sizin tarafınızdan alenileştirilmiş olması halinde(alenileştirme amacınızla bağdaştığı ölçüde), bir hakkın tesisi, kullanılması veya korunması için kişisel verilerinizi işlemenin zorunlu olması, temel hak ve özgürlüklerinize zarar vermemek kaydıyla, meşru menfaatlerimiz için zorunlu olması hallerinde.</p>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                                <p>· Şirketimizin faaliyetlerini gerçekleştirebilmesi, varlığını sürdürebilmesi, teknik ve hukuki yükümlülükleri başta olmak üzere tüm sorumluluklarını yerine getirebilmesi için ihtiyacı olan her türlü teknik bilgi, işlem güvenliği bilgisi, hukuki işlem bilgisi, risk yönetimi bilgisi, finansal bilgleriniz,</p>
                                <table class="kvkk-table">
                                    <tbody>
                                    <tr>
                                        <td style="width: 642px;">
                                            <p>Hukuki Sebepler:</p>
                                            <p>Kanunlarda açıkça öngörülmesi, sizinle aramızdaki sözleşmenin kurulması veya ifasıyla doğrudan doğruya ilgili olması kaydıyla, açık rızanızın varlığı halinde, hukuki yükümlülüklerimizi yerine getirebilmemiz için zorunlu olması halinde, sizin tarafınızdan alenileştirilmiş olması halinde(alenileştirme amacınızla bağdaştığı ölçüde), bir hakkın tesisi, kullanılması veya korunması için kişisel verilerinizi işlemenin zorunlu olması, temel hak ve özgürlüklerinize zarar vermemek kaydıyla, meşru menfaatlerimiz için zorunlu olması hallerinde.</p>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>

                                <p><br></p>
                            </div> </div>
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
                    <img src="Resimler/amblem.png " width="150" height="100">
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
