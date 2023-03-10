<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Pendakian Gunung Andong</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="css/agency.min.css" rel="stylesheet">

  </head>

  <body id="page-top">

    <!-- Navigation -->
    
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
        <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top"><img src="img/logobaru.png" width="90px"></a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav text-uppercase ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#service">Melayani</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#portfolio">Gunung</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#about">Registrasi</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="Konfirmasibooking.html">Konfirmasi Booking</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="Sop.html">SOP</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#contact">Hubungi</a>
            </li>
          </ul>
        </div>
        </div>
    </nav>

    <!-- Header -->
    <header class="masthead">
      <div class="container">
        <div class="intro-text">
          @if (session()->has('success'))
          <div class="intro-heading text-uppercase">Booking Selesai</div>
          <div class="intro-lead-in">Datang langsung Ke Basecamp Ditanggal Pendakian Untuk Mengkonfirmasi</div>
          <br/><a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="/">Kembali ke Halaman Utama</a>
          @else
          <div class="intro-lead-in">Booking Online Pendakian</div>
          <div class="intro-heading text-uppercase">Mountain Andong</div>
          <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="/booking">Booking</a>
              
          @endif
        </div>
      </div>
    </header>

    <!-- melayani -->
    <section id="service">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Melayani</h2>
            <h3 class="section-subheading text-muted">Kami sebagai website yang melayani berbagai kebutuhan para pendaki akan informasi </h3>
          </div>
        </div>
        <div class="row text-center">
          <div class="col-md-4">
            <span class="fa-stack fa-4x">
              <i class="fa fa-circle fa-stack-2x text-primary"></i>
              <i class="fa fa-tree fa-stack-1x fa-inverse"></i>
            </span>
            <h4 class="service-heading">Gunung Andong</h4>
            <p class="text-muted">Menyajikan semua informasi mengenai gunung andong. Mulai dari lokasi,ketinggian, status gunung dan keadaan gunung </p>
          </div>
          <div class="col-md-4">
            <span class="fa-stack fa-4x">
              <i class="fa fa-circle fa-stack-2x text-primary"></i>
              <i class="fa fa-edit fa-stack-1x fa-inverse"></i>
            </span>
            <h4 class="service-heading">Registrasi</h4>
            <p class="text-muted">Layanan reistrasi pendakian gunung secara online yang dapat dilakukan dimana saja untuk memudahkan pendataan dari calon pendaki</p>
          </div>
          <div class="col-md-4">
            <span class="fa-stack fa-4x">
              <i class="fa fa-circle fa-stack-2x text-primary"></i>
              <i class="fa fa-location-arrow fa-stack-1x fa-inverse"></i>
            </span>
            <h4 class="service-heading">Jalur Pendakian Via Sawit</h4>
            <p class="text-muted">Menyajikan informasi mengenai jalur pendakian gunung andong agar dapat memberikan informasi kepada calon pendaki agar meminimalisir tejadinya pendaki yang tersesat. </p>
          </div>
          <div class="col-md-6">
            <span class="fa-stack fa-4x">
              <i class="fa fa-circle fa-stack-2x text-primary"></i>
              <i class="fa fa-suitcase fa-stack-1x fa-inverse"></i>
            </span>
            <h4 class="service-heading">Persiapan</h4>
            <p class="text-muted">Menyajikan informasi seputar perbekelan yang dapat menjadi bahan pesiapan pendaki sebelum melakukan pendakian gunung.</p>
          </div>
          <div class="col-md-6">
            <span class="fa-stack fa-4x">
              <i class="fa fa-circle fa-stack-2x text-primary"></i>
              <i class="fa fa-blind fa-stack-1x fa-inverse"></i>
            </span>
            <h4 class="service-heading">Objek Wisata</h4>
            <p class="text-muted">Terdapat layanan pemandu wisata bagi para pendaki pemula yang membutuhkan pembandu jalan selama pendakian.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- gunung Grid -->
    <section class="bg-light" id="portfolio">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Wisata Gunung Andong</h2>
            <h3 class="section-subheading text-muted">Gunung yang ada di Indonesia.</h3>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal1">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fa fa-search fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/Bromo.jpg" alt="">
            </a>
            <div class="portfolio-caption">
              <h4>Gunung Bromo</h4>
              <p class="text-muted">Gn. Bromo, Podokoyo, Tosari, Pasuruan, Jawa Timur</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal2">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fa fa-search fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/rinjani.jpg" alt="">
            </a>
            <div class="portfolio-caption">
              <h4>Gunung Rinjani</h4>
              <p class="text-muted">Gn. Rinjani, Kabupaten Lombok Barat, Lombok Tengah, dan Lombok Timur, Provinsi Nusa Tenggara Barat.</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal3">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fa fa-search fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/panderman.jpg" alt="">
            </a>
            <div class="portfolio-caption">
              <h4>Gunung Panderman</h4>
              <p class="text-muted">Gn Panderman, Dusun Toyomerto, Desa Pesanggrahan, Kecamatan Batu, Kota Batu Kota Batu, Jawa Timur</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal4">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fa fa-search fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/lawu.jpg" alt="">
            </a>
            <div class="portfolio-caption">
              <h4>Gunung Lawu</h4> 
              <p class="text-muted">Gn. Lawu, Gondosuli, Tawangmangu, Kabupaten Karanganyar, Jawa Tengah</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal5">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fa fa-search fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/semeru.jpg" alt="">
            </a>
            <div class="portfolio-caption">
              <h4>Gunung Semeru</h4>
              <p class="text-muted">Gn. Semeru, Pasrujambe, Kabupaten Lumajang, Jawa Timur</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal6">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fa fa-search fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/merbabu.JPG" alt="">
            </a>
            <div class="portfolio-caption">
              <h4>Gunung Merbabu</h4>
              <p class="text-muted">Gn Merbabu, Suroteleng, Selo, Kabupaten Boyolali, Jawa Tengah</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- registrasi -->
    <section id="about">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Alur Registrasi</h2>
            <h3 class="section-subheading text-muted">Beberapa alur registrasi yang harus dilalui pendaki.</h3>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <ul class="timeline">
              <li>
                <div class="timeline-image">
                  <img class="rounded-circle img-fluid" src="img/1.jpg" alt="">
                </div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
                    <h4>Langkah 1</h4>
                    <h4 class="subheading">Membuka Web</h4>
                  </div>
                  <div class="timeline-body">
                    <p class="text-muted">Pendaftar membuka web (belum dihosting wkwkw). Pilih menu Registrasi, lengkapi form biodata.</p>
                  </div>
                </div>
              </li>
              <li class="timeline-inverted">
                <div class="timeline-image">
                  <img class="rounded-circle img-fluid" src="img/2.jpg" alt="">
                </div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
                    <h4>Langkah 2</h4>
                    <h4 class="subheading">Cek Email</h4>
                  </div>
                  <div class="timeline-body">
                    <p class="text-muted">Cek email yang digunakan unutk melakukan pendaftaran, melihat jumlah tarif total pembayaran dan rekening pembayaran.</p>
                  </div>
                </div>
              </li>
              <li>
                <div class="timeline-image">
                  <img class="rounded-circle img-fluid" src="img/3.png" alt="">
                </div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
                    <h4>Langkah 3</h4>
                    <h4 class="subheading">Transfer BANK</h4>
                  </div>
                  <div class="timeline-body">
                    <p class="text-muted">Melakukan pembayaran ke bank terdekat dengan cara setor tunai antar bank, karena untuk memudahkan dalam hal pengecekan.</p>
                  </div>
                </div>
              </li>
              <li class="timeline-inverted">
                <div class="timeline-image">
                  <img class="rounded-circle img-fluid" src="img/4.jpg" alt="">
                </div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
                    <h4>Langkah 4</h4>
                    <h4 class="subheading">Cek Email</h4>
                  </div>
                  <div class="timeline-body">
                    <p class="text-muted">Cek email untuk mengisi form konfirmasi pembayaran. Cek email untuk menerima konfirmasi dari admin.</p>
                  </div>
                </div>
              </li>
              <li>
                <div class="timeline-image">
                  <img class="rounded-circle img-fluid" src="img/5.png" alt="">
                </div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
                    <h4>Langkah 5</h4>
                    <h4 class="subheading">Cetak Bukti pembayaran</h4>
                  </div>
                  <div class="timeline-body">
                    <p class="text-muted">Cek email dan cetak bukti pebayaran, kelengkapan dan surat pernyataan.</p>
                  </div>
                </div>
              </li>
              <li class="timeline-inverted">
                <div class="timeline-image">
                  <img class="rounded-circle img-fluid" src="img/6.jpg" alt="">
                </div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
                    <h4>Langkah 6</h4>
                    <h4 class="subheading">Cek Kelengkapan</h4>
                  </div>
                  <div class="timeline-body">
                    <p class="text-muted">Cek Kelengkapan di pintu masuk pendakian, calon pendaki menunjukkan bukti cetak pembayaran ke petugas.</p>
                  </div>
                </div>
              </li>
              <li class="timeline-inverted">
                <div class="timeline-image">
                  <a href="registrasi.html" style="color: black;"><h4>Booking
                    <br>Gunung
                      <br>Andong!
                    </h4>
                    </a>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>

    <!-- Team -->

    <!-- Clients
    <section class="py-5">
      <div class="container">
        <div class="row">
          <div class="col-md-3 col-sm-6">
            <a href="#">
              <img class="img-fluid d-block mx-auto" src="img/logos/envato.jpg" alt="">
            </a>
          </div>
          <div class="col-md-3 col-sm-6">
            <a href="#">
              <img class="img-fluid d-block mx-auto" src="img/logos/designmodo.jpg" alt="">
            </a>
          </div>
          <div class="col-md-3 col-sm-6">
            <a href="#">
              <img class="img-fluid d-block mx-auto" src="img/logos/themeforest.jpg" alt="">
            </a>
          </div>
          <div class="col-md-3 col-sm-6">
            <a href="#">
              <img class="img-fluid d-block mx-auto" src="img/logos/creative-market.jpg" alt="">
            </a>
          </div>
        </div>
      </div>
    </section>-->

    <!-- contact -->
    <section id="contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">hubungi kami</h2>
            <h3 class="section-subheading text-muted" style="color: #fff;">Hubungi kami atau kritik dan saran jika anda mendapatkan masalah seputar pelayanan.</h3>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <form id="contactForm" name="sentMessage" novalidate>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <input class="form-control" id="name" type="text" placeholder="Nama Anda *" required data-validation-required-message="Please enter your name.">
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="form-group">
                    <input class="form-control" id="email" type="email" placeholder="Alamat Email Anda *" required data-validation-required-message="Please enter your email address.">
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="form-group">
                    <input class="form-control" id="phone" type="tel" placeholder="Nomor Telepon Anda *" required data-validation-required-message="Please enter your phone number.">
                    <p class="help-block text-danger"></p>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <textarea class="form-control" id="message" placeholder="Pesan Anda *" required data-validation-required-message="Please enter a message."></textarea>
                    <p class="help-block text-danger"></p>
                  </div>
                </div>
                <div class="clearfix"></div>
                <div class="col-lg-12 text-center">
                  <div id="success"></div>
                  <button id="sendMessageButton" class="btn btn-primary btn-xl text-uppercase" type="submit">Kirim pesan</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>

    <!-- Footer -->
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <span class="copyright">Copyright &copy; Pendakian Andong 2023</span>
          </div>
          <div class="col-md-4">
            <ul class="list-inline social-buttons">
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-twitter"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-facebook"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-instagram"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </footer>

    <!-- Portfolio Modals -->

    <!-- Modal 1 -->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <h2 class="text-uppercase">GUNUNG BROMO</h2>
                  <p class="item-intro text-muted">Gn. Bromo, Podokoyo, Tosari, Pasuruan, Jawa Timur</p>alt="">
                  <ul class="list-inline">
                    <li>Ketinggian: 2.329 mdpl</li>
                    <li>Status: Aktif</li>
                    <li>Koordinat: 7??56???30???LU,112??57???0???BT</li>
                  </ul>
                  <p>Gunung Bromo (dari bahasa Sanskerta: Brahma, salah seorang Dewa Utama dalam agama Hindu) atau dalam bahasa Tengger dieja "Brama", adalah sebuah gunung berapi aktif di Jawa Timur, Indonesia. Gunung ini memiliki ketinggian 2.329 meter di atas permukaan laut dan berada dalam empat wilayah kabupaten, yakni Kabupaten Probolinggo, Kabupaten Pasuruan, Kabupaten Lumajang, dan Kabupaten Malang. Gunung Bromo terkenal sebagai objek wisata utama di Jawa Timur. Sebagai sebuah objek wisata, Bromo menjadi menarik karena statusnya sebagai gunung berapi yang masih aktif. Gunung Bromo termasuk dalam kawasan Taman Nasional Bromo Tengger Semeru.
                     Bentuk tubuh Gunung Bromo bertautan antara lembah dan ngarai dengan kaldera atau lautan pasir seluas sekitar 10 kilometer persegi.
                     Gunung Bromo mempunyai sebuah kawah dengan garis tengah ?? 800 meter (utara-selatan) dan ?? 600 meter (timur-barat). Sedangkan daerah bahayanya berupa lingkaran dengan jari-jari 4 km dari pusat kawah Bromo. </p>
                  <img class="img-fluid d-block mx-auto" src="img/jalurbromo.jpg" alt="">
                  <p>Dari Surabaya kita bisa naik bis menuju Probolinggo dan turun di Pasuruan. Selanjutnya naik colt/angkutan umum menuju Desa Tosari ??? Wonokitri. Di Wonokitri kita dapat bermalam di hotel/losmen. Selanjutnya jarak menuju wisata Bromo sudah dekat.
                     Dari arah Probolinggo kita naik colt atau bis menuju Sukapura, kemudian kita terus ke Ngadisari. Dari Ngadisari naik kuda atau berjalan kaki menuju Cemoro lawang sejauh 3 km. Di Cemoro lawang kita dapat bermalam di hotel/losmen. Selanjutnya jarak menuju wisata Bromo sudah dekat.
                     Dari Malang kita naik minibus menuju ke Tumpang (18 Km). Dari Tumpang perjalanan kita lanjutkan dengan naik Jeep menuju ke Jemplang sekitar 1,5 jam perjalanan melewati Desa Gubuk Klakah dan Desa Ngadas. Sampai di Jemplang selanjutnya jarak menuju Bromo sudah dekat.
                     Dari Purwodadi, dari Kota Malang kita naik Bus atau minibus menuju ke Purwodadi. Dari Purwodadi kita naik minibus menuju ke Desa Tosari, melewati Desa Nonggojajar. Dari Tosari kita teruskan menuju Wonokitri. Di Wonokitri kita dapat bermalam di hotel/losmen. Selanjutnya jarak menuju wisata Bromo sudah dekat.</p>
                  <button class="btn btn-primary" data-dismiss="modal" type="button">
                    <i class="fa fa-times"></i>
                    Close Project</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal 2 -->
    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <h2 class="text-uppercase">GUNUNG RINJANI</h2>
                  <p class="item-intro text-muted">Gn. Rinjani, Kabupaten Lombok Barat, Lombok Tengah, dan Lombok Timur, Provinsi Nusa Tenggara Barat.</p>
                  <ul class="list-inline">
                    <li>Ketinggian: 3.726 mdpl</li>
                    <li>Status: Aktif</li>
                    <li>Koordinat:  8??24???52S 116??27???35E </li>
                  </ul>
                  <p>Gunung Rinjani berlokasi di Pulau Lombok, Nusa Tenggara Barat. Gunung yang merupakan gunung berapi kedua tertinggi di Indonesia dengan ketinggian 3.726 m dpl serta terletak pada lintang 8??25' LS dan 116??28' BT ini merupakan gunung favorit bagi pendaki Indonesia karena keindahan pemandangannya. Gunung ini merupakan bagian dari Taman Nasional Gunung Rinjani yang memiliki luas sekitar 41.330 ha dan ini akan diusulkan penambahannya sehingga menjadi 76.000 ha ke arah barat dan timur.</p>
                  <img class="img-fluid d-block mx-auto" src="img/jalurinjani.jpg" alt="">
                  <p>Jalur Senaru adalah Jalur pendakian Senaru adalah jalur pendakian paling ramai. Jalur pendakian yang cukup mudah ini sering digunakan untuk wisata trekking, juga oleh masyarakat adat yang akan melakukan ritual adat dan keagamaan di puncak Rinjani atau Danau Segara Anak.
                    Rute pendakian meliputi Senaru ??? Pelawangan Senaru ??? Danau Segara Anak. Semua ditempuh dengan berjalan kaki selama kurang lebih 10 hingga 12 jam melalui trail wisata yang berada di hutan primer. Selama menyusuri trail kamu bisa beristirahat karena di sepanjang trail sudah tersedia sarana peristirahatan pada setiap pos. Di sepanjang perjalanan, kamu bisa menikmati indahnya hutan belantara yang liar dan formasi bebatuan yang menakjubkan.
                    Pemandangan di ujung track Senaru.
                    Ringkasan jalur Senaru:
                    Mataram ??? Senaru (3-4 Jam dengan mobil)
                    Senaru ??? Danau Segara Anak (7-10 jam jalan kaki
                    Danau Segara Anak ??? Pelawangan Sembalun (4 jam jalan kaki)
                    Pelawangan Sembalun ??? Puncak Rinjani (2-3 jam jalan kaki)
                  Jalur Sembalun
                    Jalur Sembalun juga merupakan jalur trekking yang ramai oleh para pendaki. Rute yang dilalui adalah gerbang Sembalun Lawang ??? Pelawangan Sembalun ??? Puncak Rinjani memakan waktu 9 ??? 10 jam. Jalur ini begitu mengesankan dan menegangkan dengan padang savana dan punggung gunung berhiaskan jurang di kiri dan kanan jalur.
                  Ringkasan jalur Sembalun:
                    Mataram ??? Sembalun (4-5 jam mobil )
                    Sembalun Lawang ??? Puncak Gunung Rinjani (7 jam jalan kaki)
                    Sembalun Lawang ??? Danau Segara Anak (2-3 jam jalan kaki)
                  alur Torean
                    Jalur Torean termasuk jalur pendakian yang ekstrim dan tak cocok untuk pemula. Tapi seperti hukum alam yang berlaku, makin sulit sesuatu dilakukan, makin memuaskan hasil yang didapat. Jalur Torean memang memiliki berjuta pesona yang sulit ditandingi. Jika ingin menikmati pemandangan yang variatif, kamu bisa memilih dua jalur yang berbeda, misalnya naik melalui Sembalun dan turun melalui Torean (Sembalun-Torean). Dengan mendaki melalui Sembalun, kamu bisa lebih mudah menggapai puncak Rinjani. Lalu ketika turun melaui jalur Torean, kamu bisa menikmati keindahan alam yang berbeda.
                 Ringkasan jalur pendakian Torean:
                    Mataram ??? Torean (4-5 jam mobil)
                    Torean ??? Danau Segara Anak (8-9 jam jalan kaki)
                  </p>
                  <button class="btn btn-primary" data-dismiss="modal" type="button">
                    <i class="fa fa-times"></i>
                    Close Project</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal 3 -->
    <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <h2 class="text-uppercase">GUNUNG PANDERMAN</h2>
                  <p class="item-intro text-muted">Gn Panderman, Dusun Toyomerto, Desa Pesanggrahan, Kecamatan Batu, Kota Batu, Jawa Timur</p>
                  <ul class="list-inline">
                    <li>Ketinggian: 2.045 mdpl</li>
                    <li>Status: Tidak Aktif</li>
                    <li>Koordinat: 8??06???43LU 112??55???20BT???</li>
                  </ul>
                  <p>Gunung Panderman adalah sebuah gunung yang terletak di Kota Batu Malang yang memiliki puncak bernama Basundara. Nama gunung ini sendiri diambil dari nama seorang Belanda bernama Van Der Man yang mengagumi keindahan gunung ini pada waktu itu. Gunung Panderman adalah sebuah tempat wisata yang cocok bagi anda yang menyukai pendakian termasuk bagi anda yang masih pemula pada bidang pendakian.
                    Gunung ini terletak di dusun Toyomerto Kelurahan Songgokerto Desa Pesanggrahan, Batu Malang. DusunToyomerto juga bisa dicapai dengan kendaraan umum dari kota Batu sekitar 3 Km yakni dengan menaiki bus jurusan Malang ??? Jombang/ Kediri kemudian turun di perempatan desa Pesanggarahan.</p>
                  <img class="img-fluid d-block mx-auto" src="img/jalurpanderman.jpg" alt="">
                  <p>Untuk sampai ke puncak anda hanya membutuhkan waktu 2-3 jam. Jika anda menggunakan kendaraan pribadi, anda bisa menempuh perjalanan selama kurang lebih 30 menit dari kota Malang dan anda bisa menitipkannya di basecamp panderman yang berada di rumah paling ujung gapura panderman, disitu juga anda akan mendaftarkan siapa saja yang akan ikut mendaki. Jika anda berkendara dengan menggunakan sepeda motor, anda bisa menitipkan ke tempat penitipan sepeda motor yang dikelola oleh warga sekitar hanya dengan cukup membayar 5000/malam.
                    Ada dua pos sebelum kita mencapai puncak gunung ini. Pertama kita akan menjumpai pos Latar Ombo yang berada di ketinggian 1604 mdpl. Tempat ini bisaanya digunakan untuk camping para pendaki. Disini juga tersedia sumber mata air yang masih sangat jernih sehingga anda dapat menggunakannya untuk minum juga memasak. Setelah anda melanjutkan perjalanan, anda akan menjumpai pos kedua yakni Watu Gede karena tempat ini memang terdapat banyak sekali batu besar yang bisa digunakan untuk beristirahat.</p>
                  <button class="btn btn-primary" data-dismiss="modal" type="button">
                    <i class="fa fa-times"></i>
                    Close Project</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal 4 -->
    <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <h2 class="text-uppercase">GUNUNG LAWU</h2>
                  <p class="item-intro text-muted">Gn. Lawu, Gondosuli, Tawangmangu, Kabupaten Karanganyar, Jawa Tengah</p>
                 <ul class="list-inline">
                    <li>Ketinggian:3.265 mdpl</li>
                    <li>Status: Tidak Aktif</li>
                    <li>Koordinat: 111??11???39 LS 07??37???37 BT???</li>
                  </ul>
                  <p>Terletak di Pulau Jawa, Indonesia, tepatnya di perbatasan Provinsi Jawa Tengah dan Jawa Timur. Gunung Lawu terletak di antara tiga kabupaten yaitu Kabupaten Karanganyar, Jawa Tengah, Kabupaten Ngawi, dan Kabupaten Magetan, Jawa Timur. Status gunung ini adalah gunung api "istirahat" (diperkirakan terahkir meletus pada tanggal 28 November 1885[3][4]) dan telah lama tidak aktif, terlihat dari rapatnya vegetasi serta puncaknya yang tererosi. Di lerengnya terdapat kepundan kecil yang masih mengeluarkan uap air (fumarol) dan belerang (solfatara). Gunung Lawu mempunyai kawasan hutan Dipterokarp Bukit, hutan Dipterokarp Atas, hutan Montane, dan hutan Ericaceous. Gunung Lawu adalah sumber inspirasi dari nama kereta api Argo Lawu, kereta api eksekutif yang melayani Solo Balapan-Gambir.
                   Gunung Lawu memiliki tiga puncak, Puncak Hargo Dalem, Hargo Dumiling dan Hargo Dumilah. Yang terakhir ini adalah puncak tertinggi.</p>
                  <img class="img-fluid d-block mx-auto" src="img/jalurlawu.jpg" alt="">
                  <p>Jalur Pendakian
                    Pendakian melalui Cemoro Sewu, Wilayah Timur 
                    Jarak yang harus ditempuh sejauh 9 km. Jalan berupa jalan setapak yang sudah diberi batu sehingga merupakan jalan permanen yang besar, jalan ini sampai mendekati pos IV. 
                    Pos I, Pos II, Pos III, Pos IV, Sendang Drajat, Hargo Dalem, Puncak (Hargo Dumilah).
                    Shelter di Pos II, Pos III, Haro Dalem, dan Puncak.
                    Sumber air sangat sedikit, hanya terdapat di Sendang Drajat dan kalau hujan ada di Sumur Jalatunda
                    Obyek yang menarik adalah padang rumput, padang edelweis, gugusan bukit.
                    Juga terdapat tempat pertapaan (Hargo Dalem) yang selalu ramai dikunjungi para peziarah.Puncak Udara di puncak cukup dingin, angin kencang, cuaca cerah, terdiri tanah lapang.
                    Pendakian melalui Cemoro Kandang, Jawa Tengah 
                    Cemoro Kandang merupakan tempat pendakian G Lawu yang berada di perbatasan Jawa Tengah dan Jawa Timur, banyak terdapat warung makan sehingga kita dapat membeli perbekalan dan sekedar makan di sana. Apabila kita menginginkan tempat beristirahat kita dapat menggunakan posko pendakian  yang berupa pondok maupuun mengunakan tempat Pak Atmo yang berada 1 km sebelum Cemoro Kandang. Untuk perijinan apabila tidak berombongan lebih dari 20 orang hanya perlu meninggalkan kartu identitas serta membayar restribusi serta asuransi.
                    Dari Cemoro Kandang mencapai Puncak dibutuhkan waktu kira-kira 7 jam menempuh kurang lebih 12 km. Medan yang ditempuh berupa pepohonan yang lumayan lebat, mendekati puncak vegetasi menjadi lebih jarang. Apabila sedang musim Oktober - Desember maka edelweis akan berbunga dan merupakan pemandangan yg indah.
                    Rute perjalanan :
                      Cemoro Kandang (1600 mdpl)  - Pos I (taman Sari Bawah - 2300 mdpl)
                      Dapat ditempuh dalam waktu 1 jam, terdapat pondok pendakian yang terbuat dari batu, di depan pondok terdapat jalan setapak menuju ke sungai yang mengandung sulfur. Perjalanan relatif santai karena jalan masih belum terlalu menanjak.
                      Pos I - Pos II (Taman Sari Atas - 2470 mdpl)
                      Waktu tempuh sekitar 1 jam. Dulu di pos II ini terdapat pondok pendakian dari kayu tetapi sekarang sudah hilang ditelan waktu. Dari Pos II ada jalan setapak menuju ke Kawah Lawu, perjalanan menuju kawah dapat ditempuh kurang lebih 30 menit. Perjalanan ke pos II ini sudah mulai agak menanjak dengan pemandangan pohon-pohon bekas terbakar.
                      Pos II - Pos III (Penggik - 2760 mdpl)
                      Perjalanan lumayan jauh dari Pos II karena pada awal pos II jalanan mendatar dan setelah hampir mendekati pos III jalanan mendaki dan berkelok-kelok. Waktu tempuh 2,5 jam. Ada pos pendakian berupa gubug dari kayu dan seng. Agak ke atas sedikit terdapat mata air yang diberi nama Sendang Panguripan. Tetapi di sarankan membawa persediaan air dari bawah karena kalo pada musim kemarau air hanya sedikit dan keruh.
                      Pos III - Pos IV (Cokro Suryo - 3025 mdpl)
                      Perjalanan memakan waktu 1,5 jam, kondisi jalan mulai agak curam dengan mulai bergantinya vegetasi ke vegetasi yang lebih jarang. Cokro Suryo merupakan tanah lapang dengan pemandangan yang luas, angin sering kali bertiup dengan kencang, dulu posko pendakian di sini hancur dihantam badai.
                      Pos IV - Pos V (3150 mdpl)
                      Dapat kita tempuh dalam waktu 0,5 jam.
                      Pos V - Argo Dalem (3170 mdpl)
                      Diatas pos IV akan kita temui pesanggrahan yang bernama Argo Dalem, merupakan tempat untuk menyepikan diri bagi penganut Kejawen. Jalur dari Cemoro Sewu akan bertemu di sini untuk kemudian menjadi jalur menuju puncak.  
                      Argo Dalem - Puncak (Argo Dumilah - 3265 mdpl)
                      Perjalanan menuju ke puncak akan melewati jalan yang merupakan jalan air sehingga kalau hujan akan ada aliran air turun. Waktu tempuh kurang lebih 1 jam. Di puncak terdapat tugu peringatan dari batu dan ada pondok pendakian dari papan, tetapi diharapkan untuk membawa perlengkapan sendiri sebab pondok-pondok pendakian di G Lawu selalu terisi, jadi jangan terlalu mengandalkan posko.</p>
                  <button class="btn btn-primary" data-dismiss="modal" type="button">
                    <i class="fa fa-times"></i>
                    Close Project</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal 5 -->
    <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <h2 class="text-uppercase">GUNUNG SEMERU</h2>
                  <p class="item-intro text-muted">Gn. Semeru, Pasrujambe, Kabupaten Lumajang, Jawa Timur</p>
                   <ul class="list-inline">
                    <li>Ketinggian: 3.744 mdpl</li>
                    <li>Status: Aktif</li>
                    <li>Koordinat: 8??06' LS 112??55' BT.???</li>
                  </ul>
                  <p>Gunung Semeru atau Gunung Meru adalah sebuah gunung berapi kerucut di Jawa Timur, Indonesia. Gunung Semeru merupakan gunung tertinggi di Pulau Jawa, dengan puncaknya Mahameru, 3.676 meter dari permukaan laut (mdpl). Gunung Semeru juga merupakan gunung berapi tertinggi ketiga di Indonesia setelah Gunung Kerinci di Sumatera dan Gunung Rinjani di Nusa Tenggara Barat[1]. Kawah di puncak Gunung Semeru dikenal dengan nama Jonggring Saloko. Gunung Semeru secara administratif termasuk dalam wilayah dua kabupaten, yakni Kabupaten Malang dan Kabupaten Lumajang, Provinsi Jawa Timur. Gunung ini termasuk dalam kawasan Taman Nasional Bromo Tengger Semeru.
                    Diperlukan waktu sekitar empat hari untuk mendaki puncak gunung Semeru pergi-pulang. Untuk mendaki gunung dapat ditempuh lewat kota Malang atau Lumajang. Dari terminal Kota Malang naik angkutan umum menuju desa Tumpang. Disambung lagi dengan jeep atau truk/pickup yang banyak terdapat di belakang pasar terminal Tumpang dengan</p>
                  <img class="img-fluid d-block mx-auto" src="img/jalursemeru.jpg" alt="">
                  <p>Jalur/Rute Pendakian Gunung Semeru
                    Setelah sampai dari pos Ranu Pani, kamu bisa memilih dua jalur untuk melakukan pendakian, yaitu: jalur Ayak-Ayak dan jalur Watu Rejeng, diantara kedua jalur tersebut memiliki perbedaan.
                  Jalur Ayak-Ayak
                    Jalur Ayak-Ayak relatif jarang dipilih oleh pendaki karena melalui trek yang berdebu dan berbatu. Belakangan ini jalur ini juga lebih sering ditutup oleh petugas demi keselamatan pendaki.
                    Jalur / Rute Pendakian:
                    Ranupani ??? Gunung Ayak-Ayak ??? Panggonan Cilik ??? Ranu Kumbolo = (5jam)
                    Ranu Kumbolo ??? Oro-Oro Ombo = 1km (30 Menit)
                    Oro-Oro Ombo ??? Cemoro Kandang = 1,5km (30 Menit)
                    Cemoro Kandang ??? Jambangan = 3km (30 Menit)
                    Jambangan ??? Kalimati= 2km (30 Menit)
                    Kalimati ??? Arcopodo = 1,2km (2,5jam)
                    Arcopodo ??? Cemoro Tunggal ??? Puncak Semeru = 1,5km (3-4jam)
                    Jalur Watu Rejeng
                    Jalur watu Rejeng ini sering dipilih oleh para pendaki, karena trek yang ditempuh tidak terlalu sulit. Recommended banget buat pendaki pemula di Gunung Semeru.
                    Jalur / Rute Pendakian:
                    Ranupani??? Landengan Dowo = 3km (1,5jam)
                    Landengan Dowo ??? Watu Rejeng = 3km (1,5jam)
                    Watu Rejeng ??? Ranu Kumbolo = 4,5km (2jam)
                    Ranu Kumbolo ??? Oro-Oro Ombo = 1km (30 Menit)
                    Oro-Oro Ombo ??? Cemoro Kandang = 1,5km (30 Menit)
                    Cemoro Kandang ??? Jambangan = 3km (30 Menit)
                    Jambangan ??? Kalimati= 2km (30 Menit)
                    Kalimati ??? Arcopodo = 1,2km (2,5jam)
                    Arcopodo ??? Cemoro Tunggal ??? Puncak Semeru = 1,5km (3-4jam)
                  </p>
                  <button class="btn btn-primary" data-dismiss="modal" type="button">
                    <i class="fa fa-times"></i>
                    Close Project</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal 6 -->
    <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <h2 class="text-uppercase">GUNUNG MERBABU</h2>
                  <p class="item-intro text-muted">Gn Merbabu, Suroteleng, Selo, Kabupaten Boyolali, Jawa Tengah<p>
                  <img class="img-fluid d-block mx-auto" src="img/portfolio/06-full.jpg" alt="">
                  <ul class="list-inline">
                    <li>Ketinggian: 3.145 mdpl</li>
                    <li>Status: Akrif</li>
                    <li>Koordinat: 7,5?? LS 110,4?? BT. ???</li>
                  </ul>
                  <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                  <img class="img-fluid d-block mx-auto" src="img/jalurmerbabu.jpg" alt="">
                  <button class="btn btn-primary" data-dismiss="modal" type="button">
                    <i class="fa fa-times"></i>
                    Close Project</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Contact form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/agency.min.js"></script>

  </body>

</html>
