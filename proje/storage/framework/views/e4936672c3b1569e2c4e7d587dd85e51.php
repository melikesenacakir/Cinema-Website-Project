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
            margin-bottom: 60px; /* Kartlar arasındaki boşluğu artırmak için kullanılan stil */
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
<div class="container m-t-20">
    <div class="page-content">
        <div id="zone-5499" class="zone ">
            <div id="widget-5501" class="widget">
                <div class="ui-content">
                    <p>&nbsp;</p>
                    <p style="text-align: center;"><strong>CINEMAMSB</strong></p>
                    <p style="text-align: center;"><strong>KİŞİSEL VERİLERİN KORUNMASI VE İŞLENMESİ POLİTİKASI</strong></p>
                    <div class="WordSection2">
                        <p><strong>1. GİRİŞ</strong><br><strong>1.1. Politikanın Amacı ve Kapsamı</strong><br>6698 sayılı Kişisel Verilerin Korunması Kanunu (“<strong>Kanun</strong>”) 7 Nisan 2016 tarihinde yürürlüğe girmiş olup; işbu<strong> CINEMAMSB</strong> Kişisel Verilerin İşlenmesi ve Korunması Politikası (“<strong>Politika</strong>”), <strong>CINEMAMSB</strong>.’nin Kanuna uyumluluğunun sağlanmasını ve Şirket tarafından kişisel verilerin korunması ve işlenmesine ilişkin yükümlülüklerin yerine getirilmesinde uyulacak prensiplerin belirlenmesini amaçlamaktadır.</p>
                        <p>Politika, kişisel verilerin işleme şartlarını belirlemekte ve kişisel verilerin işlenmesinde Şirket tarafından benimsenen ana ilkeleri ortaya koymaktadır. Bu çerçevede Politika, Şirket tarafından Kanun kapsamındaki tüm kişisel veri işleme faaliyetlerini, Şirket’in işlediği tüm kişisel verilerin sahiplerini ve işlediği tüm kişisel verileri kapsamaktadır.</p>
                        <p>Şirket çalışanlarının kişisel verilerinin işlenmesine ilişkin hususlar, işbu Politika’nın kapsamında olmayıp,CINEMAMSB <strong>Çalışan Kişisel Verilerinin İşlenmesi ve Korunması Politikası</strong>’nda ayrıca düzenlenmektedir.</p>
                        <p>Politika’da kullanılan terimlere ilişkin tanımlar EK-1’de bulunmaktadır.</p>
                        <p><strong>1.2. Yürürlük ve Değişiklik</strong><br>Politika, Şirket tarafından internet sitesinde yayımlanarak kamuoyuna sunulmuştur. Başta Kanun olmak üzere yürürlükteki mevzuat ile bu Politika’da yer verilen düzenlemelerin çelişmesi halinde mevzuat hükümleri uygulanır.</p>
                        <p>&nbsp;</p>
                        <p><strong>2. ŞİRKETİMİZİN YÜRÜTTÜĞÜ KİŞİSEL VERİ İŞLEME FAALİYETLERİNE YÖNELİK VERİ SAHİPLERİ, VERİ İŞLEME AMAÇLARI VE VERİ KATEGORİLERİ</strong><br></p>
                        <p><strong>2.1.&nbsp;Veri Sahipleri</strong><br>Politika kapsamındaki veri sahipleri, Şirket tarafından kişisel verileri işlenmekte olan Şirket çalışanları dışındaki tüm gerçek kişilerdir. Bu çerçevede genel olarak veri sahibi kategorileri aşağıdaki şekildedir:</p>
                        <p>&nbsp;<br></p>
                        <p><strong><br></strong></p>
                        <table class="kvkk-table">
                            <tbody>
                            <tr>
                                <td>VERİ SAHİBİ KATEGORİLERİ</td>
                                <td>AÇIKLAMA</td>
                            </tr>
                            <tr>
                                <td>Ürün veya Hizmet Alan Kişi</td>
                                <td>Şirket’in sunduğu ürün ve hizmetlerden yararlanan gerçek kişileri ifade etmektedir.</td>
                            </tr>
                            <tr>
                                <td>Potansiyel Ürün veya Hizmet Alıcısı</td>
                                <td>Şirket’in sunduğu ürün ve hizmetleri kullanma ilgisini gösteren, müşteriye dönüşme potansiyeli olan gerçek kişileri ifade etmektedir.</td>
                            </tr>
                            <tr>
                                <td>Ziyaretçi</td>
                                <td>Şirket, şube, yerleşke ve internet sitesini ziyaret eden gerçek kişileri ifade etmektedir.</td>
                            </tr>
                            <tr>
                                <td>Çalışan Adayı</td>
                                <td>Şirket ’e CV göndererek veya bununla bağlı kalmaksızın başka yöntemlerle iş başvurusu yapan gerçek kişileri ifade etmektedir.</td>
                            </tr>
                            <tr>
                                <td>Çalışan</td>
                                <td>Şirketin İş Kanunu kapsamında çalışanlarını ifade etmektedir.</td>
                            </tr>
                            <tr>
                                <td>Stajyer</td>
                                <td>Şirkette stajyer olarak görev yapan çalışanlarnı ifade etmektedir.</td>
                            </tr>
                            <tr>
                                <td>Tedarikçi çalışanı</td>
                                <td>Şirket’ten aldığı talimatlar doğrultusunda ve Şirket ile arasındaki sözleşmeye dayanarak Şirket’in ticari faaliyetlerini sürdürmesine yönelik hizmet sunan tarafların çalışanlarını ifade etmektedir.</td>
                            </tr>
                            <tr>
                                <td>Tedarikçi yetkilisi</td>
                                <td>Şirket’ten aldığı talimatlar doğrultusunda ve Şirket ile arasındaki sözleşmeye dayanarak Şirket’in ticari faaliyetlerini sürdürmesine yönelik hizmet sunan tarafların yetkililerini ifade etmektedir.</td>
                            </tr>
                            <tr>
                                <td>Üçüncü Kişiler</td>
                                <td>Yukarıda yer verilen veri sahibi kategorileri ile Şirket çalışanları hariç tüm gerçek kişileri ifade etmektedir.</td>
                            </tr>
                            </tbody>
                        </table>
                        <p>&nbsp;<br></p>
                        <p><strong>2.2.&nbsp;Kişisel Veri İşleme Amaçları</strong><br>Şirket tarafından kişisel verileriniz ve özel nitelikli kişisel verileriniz, Kanun’da ve ilgili mevzuatta yer alan kişisel veri işleme şartlarına uygun olarak aşağıdaki amaçlarla işlenebilmektedir:</p>
                        <p>•&nbsp;Sponsorluk Faaliyetlerinin Yürütülmesi</p>
                        <p>•&nbsp;Ziyaretçi Kayıtlarının Oluşturulması Ve Takibi</p>
                        <p>•&nbsp;Yönetim Faaliyetlerinin Yürütülmesi</p>
                        <p>•&nbsp;Yetkili Kişi, Kurum Ve Kuruluşlara Bilgi Verilmesi</p>
                        <p>•&nbsp;Yetenek / Kariyer Gelişimi Faaliyetlerinin Yürütülmesi</p>
                        <p>•&nbsp;Yatırım Süreçlerinin Yürütülmesi</p>
                        <p>•&nbsp;Yabancı Personel Çalışma Ve Oturma İzni İşlemleri</p>
                        <p>•&nbsp;Veri Sorumlusu Operasyonlarının Güvenliğinin Temini</p>
                        <p>•&nbsp;Ürün / Hizmetlerin Pazarlama Süreçlerinin Yürütülmesi</p>
                        <p>•&nbsp;Ücret Politikasının Yürütülmesi</p>
                        <p>•&nbsp;Tedarik Zinciri Yönetimi Süreçlerinin Yürütülmesi</p>
                        <p>•&nbsp;Taşınır Mal Ve Kaynakların Güvenliğinin Temini</p>
                        <p>•&nbsp;Talep / Şikayetlerin Takibi</p>
                        <p>•&nbsp;Stratejik Planlama Faaliyetlerinin Yürütülmesi</p>
                        <p>•&nbsp;Sözleşme Süreçlerinin Yürütülmesi</p>
                        <p>•&nbsp;Saklama Ve Arşiv Faaliyetlerinin Yürütülmesi</p>
                        <p>•&nbsp;Risk Yönetimi Süreçlerinin Yürütülmesi</p>
                        <p>•&nbsp;Reklam / Kampanya / Promosyon Süreçlerinin Yürütülmesi</p>
                        <p>•&nbsp;Performans Değerlendirme Süreçlerinin Yürütülmesi</p>
                        <p>•&nbsp;Pazarlama Analiz Çalışmalarının Yürütülmesi</p>
                        <p>•&nbsp;Organizasyon Ve Etkinlik Yönetimi</p>
                        <p>•&nbsp;Müşteri Memnuniyetine Yönelik Aktivitelerin Yürütülmesi</p>
                        <p>•&nbsp;Müşteri İlişkileri Yönetimi Süreçlerinin Yürütülmesi</p>
                        <p>•&nbsp;Mal / Hizmet Üretim Ve Operasyon Süreçlerinin Yürütülmesi</p>
                        <p>•&nbsp;Mal / Hizmet Satış Süreçlerinin Yürütülmesi</p>
                        <p>•&nbsp;Mal / Hizmet Satış Sonrası Destek Hizmetlerinin Yürütülmesi</p>
                        <p>•&nbsp;Mal / Hizmet Satın Alım Süreçlerinin Yürütülmesi</p>
                        <p>•&nbsp;Lojistik Faaliyetlerinin Yürütülmesi</p>
                        <p>•&nbsp;İş Sürekliliğinin Sağlanması Faaliyetlerinin Yürütülmesi</p>
                        <p>•&nbsp;İş Süreçlerinin İyileştirilmesine Yönelik Önerilerin Alınması Ve Değerlendirilmesi</p>
                        <p>•&nbsp;İş Sağlığı / Güvenliği Faaliyetlerinin Yürütülmesi</p>
                        <p>•&nbsp;İş Faaliyetlerinin Yürütülmesi / Denetimi</p>
                        <p>•&nbsp;İnsan Kaynakları Süreçlerinin Planlanması</p>
                        <p>•&nbsp;İletişim Faaliyetlerinin Yürütülmesi</p>
                        <p>•&nbsp;İç Denetim/ Soruşturma / İstihbarat Faaliyetlerinin Yürütülmesi</p>
                        <p>•&nbsp;Hukuk İşlerinin Takibi Ve Yürütülmesi</p>
                        <p>•&nbsp;Görevlendirme Süreçlerinin Yürütülmesi</p>
                        <p>•&nbsp;��&nbsp;Fiziksel Mekan Güvenliğinin Temini</p>
                        <p>•&nbsp;Firma / Ürün / Hizmetlere Bağlılık Süreçlerinin Yürütülmesi</p>
                        <p>•&nbsp;Finans Ve Muhasebe İşlerinin Yürütülmesi</p>
                        <p>•&nbsp;Faaliyetlerin Mevzuata Uygun Yürütülmesi</p>
                        <p>•&nbsp;Erişim Yetkilerinin Yürütülmesi</p>
                        <p>•&nbsp;Eğitim Faaliyetlerinin Yürütülmesi</p>
                        <p>•&nbsp;Denetim / Etik Faaliyetlerinin Yürütülmesi</p>
                        <p>•&nbsp;Çalışanlar İçin Yan Haklar ve Menfaatleri Süreçlerinin Yürütülmesi</p>
                        <p>•&nbsp;Çalışanlar İçin İş Akdi ve Mevzuattan Kaynaklı Yükümlülüklerin Yerine Getirilmesi</p>
                        <p>•&nbsp;Çalışan Memnuniyeti ve Bağlılığı Süreçlerinin Yürütülmesi</p>
                        <p>•&nbsp;Çalışan Adaylarının Başvuru Süreçlerinin Yürütülmesi</p>
                        <p>•&nbsp;Çalışan Adayı / Stajyer / Seçme ve Yerleştirme Süreçlerinin Yürütülmesi</p>
                        <p>•&nbsp;Bilgi Güvenliği Süreçlerinin Yürütülmesi</p>
                        <p>•&nbsp;Acil Durum Yönetimi Süreçlerinin Yürütülmesi</p>
                        <p>•&nbsp;Diğer-İş Ortakları ve/veya Tedarikçilerle Olan İlişkilerin Yönetimi</p>
                        <p>·&nbsp;Kurumsal İletişim Faaliyetlerinin Planlanması ve İcrası, Bilgi Teknolojileri Alt Yapısının Oluşturulması ve Yönetilmesi, İş Faaliyetlerinin Raporlanması Süreçlerinin Yürütülmesi</p>
                        <p>•&nbsp;Diğer-Bilgi Teknolojileri Alt Yapısının Oluşturulması ve Yönetilmesi</p>
                        <p>•&nbsp;Diğer-Kurumsal İletişim Faaliyetlerinin Planlanması ve İcrası</p>
                        <p>·&nbsp;Kurumsal İletişim Faaliyetlerinin Planlanması ve İcrası, İş Faaliyetlerinin Raporlanması Süreçlerinin Yürütülmesi</p>
                        <p>&nbsp;</p>


                    </div> </div>
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
                        <li><a style="color: #ced4da" href="/">Anasayfa</a></li>
                        <li><a style="color: #ced4da" href="/index">Vizyondaki Filmler</a></li>



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
<?php /**PATH C:\xampp\htdocs\proje\resources\views/project/kvkpolitika.blade.php ENDPATH**/ ?>