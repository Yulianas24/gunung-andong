<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Booking</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="css/agency1.css" rel="stylesheet">

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
              <a class="nav-link js-scroll-trigger" href="index.html#service">Melayani</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="index.html#portfolio">Gunung</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="index.html#about">Registrasi</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#">Persyaratan</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="index.html#contact">Hubungi</a>
            </li>
          </ul>
        </div>
        </div>
    </nav>

    <!-- contact -->
    <section id="contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Form Booking Pendakian Gunung Andong</h2>
            <h3 class="section-subheading text-muted" style="color: #fff;">Pilih tanggal mendaki dan lihat apakah kuota sudah penuh.</h3>
          </div>
        </div>
          
          <form action="/booking" method="post">
            @csrf
              <center><label for="exampleInputEmail1" style="color: white;">Form Booking Online</label></center><hr style="background:  white;">
              <div class="form-group">
                <label for="exampleInputEmail1" style="color: white;">Nama Lengkap</label>
                <input type="text" class="form-control" name="nama" placeholder="Nama Lengkap">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1" style="color: white;">jenis kelamin</label>
                <select name="jenis_kelamin" class="form-control" style="height: 60px">
                  <option value="laki-laki">Laki-Laki</option>
                  <option value="perempuan">Perempuan</option>
                </select>
                
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1" style="color: white;">Alamat</label>
                <input type="text" class="form-control" name="alamat" placeholder="Alamat">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1" style="color: white;">Identitas KTP</label>
                <input type="number" class="form-control" name="ktp" placeholder="NIK">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1" style="color: white;">No Telp/HP</label>
                <input type="number" class="form-control" name="telepon" placeholder="No Telp/HP">
              </div>
  
              <div class="form-group">
                <label for="exampleInputEmail1" style="color: white;">Tanggal Naik</label>
                <input type="date" class="form-control" min="<?php  echo date("Y-m-d") ?>" name="tanggal_masuk" placeholder="Tanggal Naik">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1" style="color: white;">Tanggal Turun</label>
                <input type="date" min="<?php  echo date("Y-m-d") ?>" name="tanggal_keluar" class="form-control" id="exampleInputEmail1" placeholder="Tanggal Turun">
              </div>
              <!-- <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1" style="color: white;">Sewa Porter</label>
              </div>
              <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1" style="color: white;">Sewa Pemandu</label>
              </div> -->

      
              
              {{-- <br/><br/><center><label for="exampleInputEmail1" style="color: white;">Konfirmasi Booking</label><hr style="background:  white;"></center>
              <label for="exampleInputEmail1" style="color: white;">Dengan menekan tombol Kirim dibawah ini, maka Anda menyetujui segala Persyaratan dan Kebijakan.</label>
              <label for="exampleInputEmail1" style="color: white;">Detail tiket masuk semeru dapat dilihat pada tabel dibawah :</label>
              <table class="table table-hover" style="color:  white;">
              <thead>
                <tr style="background: cadetblue;">
                  <th scope="col">Wisatawan</th>
                  <th scope="col">Hari Kerja</th>
                  <th scope="col">Hari Libur</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">Wisatawan Nusantara</th>
                  <td>Rp. 15.000,00</td>
                  <td>Rp. 20.000,00</td>
                </tr>
                <tr>
                  <th scope="row">Wisatawan Mancanegara</th>
                  <td>Rp. 150.000,00</td>
                  <td>Rp. 200.000,00</td>
                </tr>
              </tbody>
            </table> --}}
              
              <button type="submit" class="btn btn-primary text-uppercase js-scroll-trigger" style="color: black;">Kirim</button>
            </form>
          
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
