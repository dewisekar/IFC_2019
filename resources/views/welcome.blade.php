<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="icon" type="image/png" href="./img/logoIFC2.png">
  <title>
    IFC 2019
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,600,700,800" rel="stylesheet" />
  <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
  <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Acme" rel="stylesheet">
  <!-- Nucleo Icons -->
  <link href="./blk/css/nucleo-icons.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link href="./blk/css/blk-design-system.css?v=1.0.0" rel="stylesheet" />
  <link href="./blk/css/addition.css" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="./blk/demo/demo.css" rel="stylesheet" />
  <!--aos-->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>

<body class="index-page">
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg fixed-top  navbar-transparent" color-on-scroll="100" style="background-color: #295B65;">
      <div class="container">
          <div class="navbar-translate">                
              <a class="navbar-brand" href="../">
                  <img src="../img/logoIFC.png" width="20%">
              </a>
              <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
          </div>
          <div class="collapse navbar-collapse justify-content-end" id="navigation" style="background-color: #295B65;">
              <div class="navbar-collapse-header">
                  <div class="row">
                      <div class="col-6 collapse-brand">
                          <a>
                              <img src="../img/logoIFC3.png" width="60%">
                          </a>
                      </div>
                      <div class="col-6 collapse-close text-right">
                          <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                              <i class="tim-icons icon-simple-remove"></i>
                          </button>
                      </div>
                  </div>
              </div>
              <ul class="navbar-nav">
                  <style>
                    #navmenu2:hover  {
                      background-color:rgba(69, 199, 188,0.7);
                      transition: 0.5s;
                    }
                    #navmenu2{
                      border-radius:5px;
                    }
                  </style>
                  <li class="nav-item p-0">
                    <a class="nav-link" id="navmenu" href="">Pendaftaran</a>
                  </li>
                  <li class="nav-item p-0">
                    <a class="nav-link" id="navmenu" href="">Timeline</a>
                  </li>
                  <li class="nav-item p-0">
                    <a class="nav-link" id="navmenu" href="#"  rel="tooltip" title="Coming Soon!" data-placement="bottom">Jadwal Pertandingan</a>
                  </li>
                  <li class="nav-item p-0">
                      <div class="pl-2 pr-2" id="navmenu2" style="border: 2px solid white; color: white; display:inline-block;">
                          <a class="nav-link" id="navmenu" href="../login" >Login</a>
                      </div>
                  </li>
              </ul>
          </div>
      </div>
  </nav>
  <!-- End Navbar -->
  <div class="wrapper">
    <div class="page-header header-filter" id="header">
      <div class="container">
        <div class="container text-center" data-aos="fade-up" >
            <div class="content-center text-center brand">
                <div class="pt-3 pb-3 mt-0 mb-0">
                    <img src="../img/logoIFC3.png" class="mt-0" style="width:120%; height:auto;">
                </div>                    
                <h3 class="mb-3"  style="font-family: 'Acme', sans-serif;">TAKE IT TO THE NEXT LEVEL!</h3>
                <style>
                  #btn1{
                    background-image: url("../img/btn1.png");
                    background-position: center;
                    color: black;
                    border: 2px solid white;
                    font-size: 16px;
                    font-weight: 600;
                    transition: 1s;
                  }
                  #btn1:hover{
                    color:white;
                    background-color: transparent;
                  }
                </style>
                <button class="btn mt-0 p-2" id="btn1" onclick="window.location.href='#sejarah'" type="button">EXPLORE!</button>
            </div>
        </div>
      </div>
    </div>
    <div class="main">
      <div class="section" id="sejarah">
          <div class="container">
            <hr style="border: 1px solid white; background: white; width: 100%;">
            <div class="title mb-0" data-aos="flip-left">
              <style>
                @media screen and (max-width: 992px) {
                  #logoukm {
                    width:60%;
                  }
                }
              </style>
              <img src="../img/logoUKM.png" width="20%" id="logoukm">
              <h3  style="font-family: 'Acme', sans-serif;">UKM Sepakbola ITS Presents:</h3>
            </div>
            <div class="row justify-content-between align-items-center">
              <div class="col-lg-5 mb-5 mb-lg-0 " data-aos="flip-left">
                  <h1 class="text-white font-weight-light" >ITS Futsal Championship 2019</h1>
                  <p class="text-white mt-4">IFC merupakan salah satu event dari UKM Sepakbola ITS dan kompetisi futsal antar departemen di ITS. IFC diikuti oleh 32 tim putra dan 16 tim putri dari departemen-departemen di iTS pada tahun 2017 dan 2018. Tahun 2019 merupakan tahun kesepuluh IFC diadakan. Jangan lupa untuk siapkan tim terbaikmu agar tidak ketinggalan event futsal terbesar tahunan di ITS!</p>   
              </div>
              <div class="col-lg-6" data-aos="flip-right">
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="../img/carousel/c1.jpg" alt="First slide">
                            <div class="carousel-caption d-none d-md-block">
                              <p>Pertandingan final putra antara T. Material VS T. Sistem Perkapalan</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="../img/carousel/c2.jpg" alt="First slide">
                            <div class="carousel-caption d-none d-md-block">
                              <p>Pertandingan final putri antara Kimia VS T. Geomatika</p>
                            </div>
                        </div>
                        <div class="carousel-item ">
                            <img class="d-block w-100" src="../img/carousel/c3.jpg" alt="First slide">
                            <div class="carousel-caption d-none d-md-block">
                              <p style="color:black;">Pertandingan persahabatan antara UKM Sepakbola ITS VS Timnas Futsal Indonesia</p>
                            </div>
                        </div>
                        <div class="carousel-item ">
                            <img class="d-block w-100" src="../img/carousel/c4.jpg" alt="First slide">
                            <div class="carousel-caption d-none d-md-block">
                              <p style="color:black;">Champion Tim Putri</p>
                            </div>
                        </div>
                        <div class="carousel-item ">
                            <img class="d-block w-100" src="../img/carousel/c5.jpg" alt="First slide">
                            <div class="carousel-caption d-none d-md-block">
                              <p>Champion Tim Putra</p>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <i class="tim-icons icon-minimal-left"></i>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <i class="tim-icons icon-minimal-right"></i>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
                <p class="text-center">Dokumentasi IFC 2018</p>
              </div>
            </div>
            <hr style="border: 1px solid white; background: white; width: 100%;">
          </div>
        </div>
      </div>
      <div class="section pt-0">
        <div class="container" id="persyaratan">
          <div class="row">
            <div class="col-md-12  mb-4 mt-0">
              <h1 class="text-center" style="font-family: 'Acme', sans-serif; font-size:40px;">COMPETITIONS</h1>
              <div style="border-bottom: 2px solid white; display: inline-block;">
                  <h2 class="text-left mb-1" style="">Futsal Championship</h2>
              </div>
            </div> 
            <style>
              @media screen and (min-width: 768px) {
                #syarat {
                  border-left: 2px solid white;
                }
                #syarat1 {
                  border-right: 2px solid white;
                }
              }
            </style> 
            <div class="col-md-6 text-left pt-3" id="syarat1">
              <i class="tim-icons icon-gift-2 text-center" style="color:white; font-size:40px;"></i>
              <h1 class="mt-2 mb-1" style="font-size:25px;">Hadiah</h1>
              <h4 class="text-left mt-2 mb-3">Daftarkan tim terbaikmu sekarang dan dapatkan hadiah dengan total mencapai Rp 32.000.000,00!</h4>
              
              <i class="tim-icons icon-single-02 text-center" style="color:white; font-size:40px;"></i>
              <h1 class="mt-2 mb-1" style="font-size:25px;">Kuota</h1>
              <h4 class="mb-0">Putra 32 tim</h4>
              <h4>Putri 16 tim*</h4>
              <p style="color:white;">*: Penambahan kuota bisa terjadi tergantung dengan antusiasme pendaftar</p>
              
              <i class="tim-icons icon-calendar-60 text-center mt-3" style="color:white; font-size:40px;"></i>
              <h1 class="mt-2 mb-1" style="font-size:25px;">Pelaksanaan</h1>
              <h4  class="mb-2">11 Maret - 18 April 2019</h4>

              <i class="tim-icons icon-money-coins text-center mt-3" style="color:white; font-size:40px;"></i>
              <h1 class="mt-2 mb-1" style="font-size:25px;">Biaya Pendaftaran</h1>
              <h4 class="mb-0">Putra 32 tim</h4>
              <h4>Putri 16 tim*</h4>
            </div>
            <div class="col-md-6 text-right" id="syarat">
                <i class="tim-icons icon-single-copy-04 text-center mt-3" style="color:white; font-size:40px;"></i>
                <h1 class="mt-2 mb-1" style="font-size:25px;">Persyaratan</h1>
                <p class="mt-2">Mahasiswa aktif ITS (tidak sedang cuti)</p>                           
            </div>
            <div class="col-md-12 text-center  mb-4 mt-5">
              <h1 class="text-center mb-3" style="font-size: 30px;">Tunggu apa lagi? Daftarkan timmu sekarang!</h1>
              <button class="btn btn-success mt-0" data-toggle="modal" data-target="#myModal">Daftar Sekarang</button>
              <!-- Sart Modal -->
              <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header justify-content-center">
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                        <i class="tim-icons icon-simple-remove"></i>
                      </button>
                      <h4 class="title title-up">Modal title</h4>
                    </div>
                    <div class="modal-body">
                      <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.
                      </p>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default">Nice Button</button>
                      <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>
                  </div>
                </div>
              </div>
              <!--  End Modal -->
              <button class="btn btn-success mt-0" data-toggle="modal" data-target="#myModal2">Sudah Punya Akun?</button>
              <!-- Form Modal -->
               <div class="modal fade modal-black" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header justify-content-center">
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                        <i class="tim-icons icon-simple-remove text-white"></i>
                      </button>
                      <div class="text-muted text-center ml-auto mr-auto">
                        <h3 class="mb-0">Sign in with</h3>
                      </div>
                    </div>
                    <div class="modal-body">
                      <div class="btn-wrapper text-center">
                        <a href="#" class="btn btn-neutral btn-icon">
                          <img src="assets/img/github.svg">
                        </a>
                        <a href="#" class="btn btn-neutral btn-icon">
                          <img src="assets/img/google.svg">
                        </a>
                      </div>
                      <div class="text-center text-muted mb-4 mt-3">
                        <small>Or sign in with credentials</small>
                      </div>
                      <form role="form">
                        <div class="form-group mb-3">
                          <div class="input-group input-group-alternative">
                            <div class="input-group-prepend">
                              <span class="input-group-text">
                                <i class="tim-icons icon-email-85"></i>
                              </span>
                            </div>
                            <input class="form-control" placeholder="Email" type="email">
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="input-group input-group-alternative">
                            <div class="input-group-prepend">
                              <span class="input-group-text">
                                <i class="tim-icons icon-key-25"></i>
                              </span>
                            </div>
                            <input class="form-control" placeholder="Password" type="password">
                          </div>
                        </div>
                        <div class="form-check mt-3">
                          <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" checked>
                            <span class="form-check-sign"></span>
                            Remember me!
                          </label>
                        </div>
                        <div class="text-center">
                          <button type="button" class="btn btn-primary my-4">Sign in</button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
              <!--  End Modal -->
            </div> 
        </div>
      </div>
    </div>
    <footer class="footer">
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            <h1 class="title">BLK•</h1>
          </div>
          <div class="col-md-3">
            <ul class="nav">
              <li class="nav-item">
                <a href="./index.html" class="nav-link">
                  Home
                </a>
              </li>
              <li class="nav-item">
                <a href="./examples/landing-page.html" class="nav-link">
                  Landing
                </a>
              </li>
              <li class="nav-item">
                <a href="./examples/register-page.html" class="nav-link">
                  Register
                </a>
              </li>
              <li class="nav-item">
                <a href="./examples/profile-page.html" class="nav-link">
                  Profile
                </a>
              </li>
            </ul>
          </div>
          <div class="col-md-3">
            <ul class="nav">
              <li class="nav-item">
                <a href="https://creative-tim.com/contact-us" class="nav-link">
                  Contact Us
                </a>
              </li>
              <li class="nav-item">
                <a href="https://creative-tim.com/about-us" class="nav-link">
                  About Us
                </a>
              </li>
              <li class="nav-item">
                <a href="https://creative-tim.com/blog" class="nav-link">
                  Blog
                </a>
              </li>
              <li class="nav-item">
                <a href="https://opensource.org/licenses/MIT" class="nav-link">
                  License
                </a>
              </li>
            </ul>
          </div>
          <div class="col-md-3">
            <h3 class="title">Follow us:</h3>
            <div class="btn-wrapper profile">
              <a target="_blank" href="https://twitter.com/creativetim" class="btn btn-icon btn-neutral btn-round btn-simple" data-toggle="tooltip" data-original-title="Follow us">
                <i class="fab fa-twitter"></i>
              </a>
              <a target="_blank" href="https://www.facebook.com/creativetim" class="btn btn-icon btn-neutral btn-round btn-simple" data-toggle="tooltip" data-original-title="Like us">
                <i class="fab fa-facebook-square"></i>
              </a>
              <a target="_blank" href="https://dribbble.com/creativetim" class="btn btn-icon btn-neutral  btn-round btn-simple" data-toggle="tooltip" data-original-title="Follow us">
                <i class="fab fa-dribbble"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </footer>
  </div>
  <!--   Core JS Files   -->
  <script src="./blk/js/core/jquery.min.js" type="text/javascript"></script>
  <script src="./blk/js/core/popper.min.js" type="text/javascript"></script>
  <script src="./blk/js/core/bootstrap.min.js" type="text/javascript"></script>
  <script src="./blk/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
  <script src="./blk/js/plugins/bootstrap-switch.js"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="./blk/js/plugins/nouislider.min.js" type="text/javascript"></script>
  <!-- Chart JS -->
  <script src="./blk/js/plugins/chartjs.min.js"></script>
  <!--  Plugin for the DatePicker, full documentation here: https://github.com/uxsolutions/bootstrap-datepicker -->
  <script src="./blk/js/plugins/moment.min.js"></script>
  <script src="./blk/js/plugins/bootstrap-datetimepicker.js" type="text/javascript"></script>
  <!-- Control Center for Black UI Kit: parallax effects, scripts for the example pages etc -->
  <script src="./blk/js/blk-design-system.min.js?v=1.0.0" type="text/javascript"></script>
  <!--aos-->
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
</body>

</html>