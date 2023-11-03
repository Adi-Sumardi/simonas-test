<!DOCTYPE html>
<html lang="en">

<head>

    <title>SIMONAS</title>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link rel="stylesheet" href="template/css/bootstrap.min.css">
    <link rel="stylesheet" href="template/css/font-awesome.min.css">
    <link rel="stylesheet" href="template/css/aos.css">
    <link rel="stylesheet" href="template/css/owl.carousel.min.css">
    <link rel="stylesheet" href="template/css/owl.theme.default.min.css">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="template/css/templatemo-digital-trend.css">

</head>

<body>

    <!-- MENU BAR -->
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="#">
              <img src="img/logo-yapi.png">
              SIMONAS
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    {{-- @auth
                    <li class="nav-item">                       
                        <a href="{{ url('/home') }}" class="nav-link smoothScroll">Home</a>
                    </li>
                    @else --}}
                    <li class="nav-item">
                        <a href="{{ route('login') }}" class="nav-link contact">Login</a>
                    </li>

                    {{-- @if (Route::has('register'))
                    <li class="nav-item">
                        <a href="{{ route('register') }}" class=""></a>
                    </li>
                    @endif
                    @endauth --}}
                </ul>
            </div>
        </div>
    </nav>

    <!-- HERO -->
    <section class="hero hero-bg d-flex justify-content-center align-items-center">
        <div class="container">
             <div class="row">

                 <div class="col-lg-6 col-md-10 col-12 d-flex flex-column justify-content-center align-items-center">
                       <div class="hero-text">

                            <h1 class="text-white" data-aos="fade-up">Sistem Monitoring Warga Asrama YAPI</h1>

                            <a href="https://www.instagram.com/asgj21official/" class="custom-btn btn-bg btn mt-3" data-aos="fade-up" data-aos-delay="100">Asrama Mahasiswa Islam Gunung Djati</a>
                            <a href="https://www.instagram.com/asramasunangiri/" class="custom-btn btn-bg btn mt-3" data-aos="fade-up" data-aos-delay="100">Asrama Mahasiswa Islam Sunan Giri</a>
                            <a href="https://www.instagram.com/asramawali.songo/" class="custom-btn btn-bg btn mt-3" data-aos="fade-up" data-aos-delay="100">Asrama Mahasiswa Islam Wali Songo</a>
                            <a href="https://www.instagram.com/dq_fatahillahputri/" class="custom-btn btn-bg btn mt-3" data-aos="fade-up" data-aos-delay="100">Asrama Putri Daarul Qur'an Fatahillah</a>

                            <strong class="d-block py-3 pl-5 text-white" data-aos="fade-up" data-aos-delay="200"></strong>
                       </div>
                 </div>

                 <div class="col-lg-6 col-12">
                   <div class="hero-image" data-aos="fade-up" data-aos-delay="300">

                     <img src="template/images/GedungYapi.PNG" class="img-fluid" alt="gedung yapi">
                   </div>
                 </div>

             </div>
        </div>
    </section>

    <!-- ABOUT -->
    <section class="about section-padding pb-0" id="about">
        <div class="container">
            <div class="row">

                <div class="col-lg-7 mx-auto col-md-10 col-12">
                    <div class="about-info">

                        <h2 class="mb-4" data-aos="fade-up">Yayasan Asrama Pelajar Islam atau <strong><a href="https://www.yapi.sch.id/index.php">YAPI</a></strong></h2>

                        <p class="mb-0" data-aos="fade-up">adalah yayasan yang berpengalaman di bidang <strong>pengaderan</strong> dan <strong>pendidikan</strong> yang berdiri sejak tahun <strong>1952</strong>. YAPI memiliki 4 asrama mahasiswa/i dan 5 sekolah yang 3 di antaranya adalah sekolah <strong>Al-Azhar</strong>.
                            <br><br><a href="https://www.yapi.sch.id/index.php/playgroup-sakinah">Playgroup Sakinah, </a><a href="https://www.yapi.sch.id/index.php/playgroup-sakinah"> RA Sakinah, </a><a href="https://www.yapi.sch.id/index.php/tk-islam-al-azhar-13"> TK Islam Al-Azhar 13, </a><a href="https://www.yapi.sch.id/index.php/sd-islam-al-azhar-13"> SD Islam Al-Azhar 13, <a href="https://www.yapi.sch.id/index.php/smp-islam-al-azhar-12">& SMP Islam Al-Azhar 12. </a> </a> </p>
                    </div>

                    <div class="about-image" data-aos="fade-up" data-aos-delay="200">

                        <img src="template/images/office.png" class="img-fluid" alt="office">
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- PROJECT -->
    <section class="project section-padding" id="project">
        <div class="container-fluid">
            <div class="row">

                <div class="col-lg-12 col-12">

                    <h2 class="mb-5 text-center" data-aos="fade-up">
                        Dokumentasi kegiatan keasramaan
                        <strong>ASGJ, ASG, AWS & DQF</strong>
                    </h2>

                    <div class="owl-carousel owl-theme" id="project-slide">
                        <div class="item project-wrapper" data-aos="fade-up" data-aos-delay="100">
                            <img src="template/images/project/project-image01.jpg" class="img-fluid" alt="asgj">

                            <div>
                                <small>Asrama Sunan Gunung Jati</small>

                                <h3>
                                    <a>
                                        <span>Ramadhan 1440H</span>
                                        <i class="fa fa-angle-right project-icon"></i>
                                    </a>
                                </h3>
                            </div>
                        </div>

                        <div class="item project-wrapper" data-aos="fade-up">
                            <img src="template/images/project/asg.PNG" class="img-fluid" alt="asg">

                            <div>
                                <small>Asrama Sunan Giri</small>

                                <h3>
                                    <a>
                                        <span>Diskusi Mingguan</span>
                                        <i class="fa fa-angle-right project-icon"></i>
                                    </a>
                                </h3>
                            </div>
                        </div>

                        <div class="item project-wrapper" data-aos="fade-up">
                            <img src="template/images/project/aws.PNG" class="img-fluid" alt="aws">

                            <div>
                                <small>Asrama Wali Songo</small>

                                <h3>
                                    <a>
                                        <span>Kajian Sosio Politik</span>
                                        <i class="fa fa-angle-right project-icon"></i>
                                    </a>
                                </h3>
                            </div>
                        </div>

                        <div class="item project-wrapper" data-aos="fade-up">
                            <img src="template/images/project/dqf.PNG" class="img-fluid" alt="dqf">

                            <div>
                                <small>Daarul Qur'an Fatahillah Putri</small>

                                <h3>
                                    <a>
                                        <span>Kegiatan Tasmi Warga</span>
                                        <i class="fa fa-angle-right project-icon"></i>
                                    </a>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <footer class="site-footer">
        <div class="container">
            <div class="row">

                <div class="col-lg-6 col-md-6 col-12" data-aos="fade-up" data-aos-delay="200">
                    <h4 class="my-4">Narahubung</h4>

                    <p class="mb-1">
                        <i class="fa fa-phone mr-2 footer-icon"></i>
                        02147867777 
                    </p>

                    <p>
                        <a href="#">
                            <i class="fa fa-envelope mr-2 footer-icon"></i>
                            direktoratkeasramaanyapi@gmail.com 
                        </a>
                    </p>
                </div>

                <div class="col-lg-6 col-md-6 col-12" data-aos="fade-up" data-aos-delay="300">
                    <h4 class="my-4">Alamat</h4>

                    <p class="mb-1">
                        <i class="fa fa-home mr-2 footer-icon"></i> Jl. Sunan Giri No.7A, RT.2/RW.15, Rawamangun, Kec. Pulo Gadung, Kota Jakarta Timur, Daerah Khusus Ibukota Jakarta 13220
                    </p>
                </div>

            </div>
            <div class="row">
                <div class="col-lg-4 mx-lg-auto text-center col-md-8 col-12" data-aos="fade-up" data-aos-delay="400">
                    <p class="copyright-text">Copyright &copy; 2021 SIMONAS
                        <br>
                    </p>
                </div>
            </div>
        </div>
    </footer>


    <!-- SCRIPTS -->
    <script src="template/js/jquery.min.js"></script>
    <script src="template/js/bootstrap.min.js"></script>
    <script src="template/js/aos.js"></script>
    <script src="template/js/owl.carousel.min.js"></script>
    <script src="template/js/smoothscroll.js"></script>
    <script src="template/js/custom.js"></script>

</body>

</html>