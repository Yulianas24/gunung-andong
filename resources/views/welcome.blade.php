<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gunung Andong</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        .navbar-brand img {
            text-transform: uppercase;
            height: 70px;
            width: 70px;

        }

        footer {
            padding: 50px 0px 50px 0px;
            background-color: #A0ACA9;
            color: #0b0c0c;
        }

        footer .layar-dalam {
            display: flex;
            flex-direction: row;
            justify-content: space-between;
        }

        footer .layar-dalam div {
            width: 40%;
            padding-left: 90px;

        }

        footer .layar-dalam h5 {
            margin-top: 0px;
            font-size: 20px;
            font-weight: bold;

        }

        footer .Button {
            color: #000;
            background: #A0ACA9;
            padding-left: 60%;
            padding-bottom: 0x;
            padding-top: 0px;


        }

        .sop {
            text-align: center;
            margin-top: 30px;
        }
        #my-toast {
            position: fixed;
            top: 20;
            right: 20;
            z-index: 100;
            background-color: rgb(196, 194, 194);
            width: 300px;
            padding: 10px;
            border-radius: 5px;
            display: block;
        }

    </style>
</head>

<body>
    @if (session()->has('success'))
    <div id="my-toast">
        <p>Booking berhasil</p>
    </div>
    @endif
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#"><img src="{{ asset('asset/andonggg.jpg') }}"></a>
            <h6>PENDAKIAN GUNUNG ANDONG</h6>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">

                    <li class="nav-item">
                        <a class="nav-link" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#sop">Sop</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#tutorial">Tutorial</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#setting">Setting</a>
                    </li>

                </ul>

            </div>
        </div>
    </nav>

    <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="asset/gambar1.jpg" class="d-block w-100 h-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="asset/gambar2.jpg" class="d-block w-100 h-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="asset/gambar3.jpg" class="d-block w-100 h-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <footer id="contact">
        <div class="layar-dalam">
            <div>
                <h5>Boking Online Pendakian Gunung Andong</h5>
                <h6>Booking online dapat dilakukan selama 24 jam, cermati tata cara dan aturan
                    sesuai dengan prosedur yang sudah ditetapkan.</h6>
            </div>
        </div>
        <div class="Button">
            <a href="/booking">
                <button>Booking Sekarang</button></a>
            
        </div>
    </footer>

    <div class="sop">
        <img src="asset/SOP.jpg" alt="">
    </div>


    <footer id="contact">
        <div class="layar-dalam">
            <div class="copyright">
                &copy; 2022 Pendakian Gunung Andong
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        var toast = document.getElementById("my-toast")
        setTimeout(function(){
        toast.style.display = 'none'
        console.log('tet')
        }, 5000);

    </script>
</body>

</html>
