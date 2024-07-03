

<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Rental Mobil</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->

      <link rel="stylesheet" href="{{ asset('asset_user/css/bootstrap.min.css') }}">
      <!-- style css -->
      <link rel="stylesheet" href="{{ asset('asset_user/css/style.css') }}">
      <!-- Responsive-->
      <link rel="stylesheet" href="{{ asset('asset_user/css/responsive.css') }}">
      <!-- fevicon -->
      <link rel="icon" href="{{ asset('asset_user/images/fevicon.png') }}" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="{{ asset('asset_user/css/jquery.mCustomScrollbar.min.css')}}">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
   </head>
   <!-- body -->
   <body class="main-layout">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="{{ asset('asset_user/images/loading.gif')}}" alt="#" /></div>
      </div>
      <!-- end loader -->
      <!-- header -->
      <header>
         <!-- header inner -->
         <div class="header">
            <div class="container">
               <div class="row">
                  <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                     <div class="full">
                        <div class="center-desk">
                           <div class="logo">
                              <a href="index.html"><img src="{{ asset('asset_user/images/logo.png')}}" alt="#" /></a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                     <nav class="navigation navbar navbar-expand-md navbar-dark ">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarsExample04">
                           <ul class="navbar-nav mr-auto">
                              <li class="nav-item">
                                 <a class="nav-link" href="/"> Home  </a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="/about">Tentang Kami</a>
                              </li>
                             
                              <li class="nav-item">
                                 <a class="nav-link" href="/car">Car</a>
                              </li>
                              @if (Auth::user())
                                  
                              <li class="nav-item">
                                 <a class="nav-link" href="/history-sewa">History Sewa</a>
                              </li>
                              @endif
                           </ul>
                           @if (Auth::user())
                           <form method="POST" class="sign_btn" action="{{ route('logout') }}">
                              @csrf
          
                              <x-responsive-nav-link :href="route('logout')"
                                      onclick="event.preventDefault();
                                                  this.closest('form').submit();">
                                  {{ __('Log Out') }}
                              </x-responsive-nav-link>
                          </form>
                           @else
                           <div class="sign_btn"><a href="/login">Login</a></div>

                           @endif
                        </div>
                     </nav>
                  </div>
               </div>
            </div>
         </div>
      </header>
      <!-- end header inner -->
      <!-- end header -->
      <!-- banner -->
      <section class="banner_main">
         <div class="container">
            <div class="row d_flex">
               <div class="col-md-12">
                  <div class="text-bg">
                     <h1>Rental Mobil</h1>
                     
                     <span>Promosi Layanan Sopir</span>
                     <p>
                        Nikmati perjalanan dengan nyaman dan hemat! Diskon spesial hingga 20% untuk penyewaan mobil selama bulan ini. Pesan sekarang sebelum kehabisan!
                        <head></head>
                     </p>
               
                  </div>
               </div>
            </div>
         </div>
      </section>
      </div>
      <!-- end banner -->
      <!-- car -->
      <div  class="car">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2> CARS </h2>
                     <span>Butuh mobil praktis untuk di kota? Honda Jazz kami pilihan terbaik! Desain stylish dan hemat bahan bakar, ideal untuk jalanan perkotaan</span>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-4 padding_leri">
                  <div class="car_box">
                     <figure><img src="{{ asset('asset_user/images/car_img1.png')}}" alt="#"/></figure>
                     <h3>Hundai</h3>
                  </div>
               </div>
               <div class="col-md-4 padding_leri">
                  <div class="car_box">
                     <figure><img src="{{ asset('asset_user/images/car_img2.png')}}" alt="#"/></figure>
                     <h3>Audi</h3>
                  </div>
               </div>
               <div class="col-md-4 padding_leri">
                  <div class="car_box">
                     <figure><img src="{{ asset('asset_user/images/car_img3.png')}}" alt="#"/></figure>
                     <h3>Bmw x5</h3>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end car -->
      <!-- bestCar -->
      <div id="contact" class="bestCar">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
               </div>
            </div>
            <div class="row">
               <div class="col-sm-12">
                  <div class="row">
                     <div class="col-md-6 offset-md-6">
                        <form class="main_form">
                           <div class="titlepage">
                              <h2>Find A  Best Car For Rent</h2>
                           </div>
                           <div class="row">
                              <div class="col-md-12 ">
                                 <select>
                                    <option value="0">Choose car Make</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                 </select>
                              </div>
                              <div class="col-md-12">
                                 <select>
                                    <option value="0">Choose Car Type </option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                 </select>
                              </div>
                              <div class="col-md-12">
                                 <input class="contactus" placeholder="Search" type="Search" name="Search">                          
                              </div>
                              <div class="col-md-12">
                                 <select>
                                    <option value="0">Price of Rent</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                 </select>
                              </div>
                              <div class="col-sm-12">
                                 <button class="find_btn">Find Now</button>
                              </div>
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end bestCar -->
      <!-- choose  section -->
      <div class="choose ">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>MENGAPA MEMILIH KAMI</h2>
                     <span>Kami menawarkan berbagai pilihan mobil terbaru dengan kondisi prima, siap menemani setiap perjalanan Anda.</span>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12">
                  <div class="choose_box">
                     <span>01</span>
                     <p>Kami selalu siap melayani Anda dengan ramah dan profesional, memastikan pengalaman rental yang memuaskan</p>
                  </div>
               </div>
               <div class="col-md-12">
                  <div class="choose_box">
                     <span>02</span>
                     <p>Nikmati perjalanan dengan harga yang bersaing dan berbagai penawaran menarik setiap bulannya</p>
                  </div>
               </div>
               <div class="col-md-12">
                  <div class="choose_box">
                     <span>03</span>
                     <p>Dengan sistem pemesanan yang cepat dan praktis, Anda bisa memesan mobil dalam hitungan menit.</p>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end choose  section -->
      <!-- cutomer -->
      <div class="cutomer">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>APA YANG DIKATAKAN PELANGGAN KAMI</h2>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12">
                  <div id="myCarousel" class="carousel slide cutomer_Carousel " data-ride="carousel">
                     <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                     </ol>
                     <div class="carousel-inner">
                        <div class="carousel-item active">
                           <div class="container">
                              <div class="carousel-caption ">
                                 <div class="cross_img">
                                    <figure><img src="{{ asset('asset_user/images/cross_img.png')}}" alt="#"/></figure>
                                 </div>
                                 <div class="our cross_layout">
                                    <div class="test_box">
                                       <h4>Joe</h4>
                                       <span>Rental</span>
                                       <p>Layanan terbaik yang pernah saya alami! Mobil dalam kondisi sangat baik dan staf sangat ramah. Pasti akan menyewa lagi di sini!</p>
                                       <i><img src="{{ asset('asset_user/images/te1.png')}}" alt="#"/></i>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="carousel-item">
                           <div class="container">
                              <div class="carousel-caption">
                                 <div class="cross_img">
                                    <figure><img src="{{ asset('asset_user/images/cross_img.png')}}" alt="#"/></figure>
                                 </div>
                                 <div class="our cross_layout">
                                    <div class="test_box">
                                       <h4></h4>
                                       <span>Heryyy</span>
                                       <p>Layanan sopir yang disediakan sangat profesional. Sopirnya ramah dan menguasai rute dengan baik. Sangat merekomendasikan!</p>
                                       <i><img src="{{ asset('asset_user/images/te1.png')}}" alt="#"/></i>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="carousel-item">
                           <div class="container">
                              <div class="carousel-caption">
                                 <div class="cross_img">
                                    <figure><img src="{{ asset('asset_user/images/cross_img.png')}}" alt="#"/></figure>
                                 </div>
                                 <div class="our cross_layout">
                                    <div class="test_box">
                                       <h4>Due arkes</h4>
                                       <span>Rental</span>
                                       <p>Harga yang sangat kompetitif dengan kualitas mobil yang prima. Sangat puas dan pasti akan kembali lagi</p>
                                       <i><img src="{{ asset('asset_user/images/te1.png')}}" alt="#"/></i>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                     <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                     <span class="sr-only">Previous</span>
                     </a>
                     <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                     <span class="carousel-control-next-icon" aria-hidden="true"></span>
                     <span class="sr-only">Next</span>
                     </a>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end cutomer -->
      <!--  footer -->
      <footer>
         <div class="footer">
             <div class="container">
                 <div class="row">
                     <div class="col-md-4">
                         <h3>Hubungi Kami</h3>
                         <p>+62 8564-7098-321</p>
                     </div>
                     <div class="col-md-4">
                         <h3>Alamat Kami</h3>
                         <p>Jl. Contoh No.123, Kota ABC, Indonesia</p>
                     </div>
                     <div class="col-md-4">
                         <h3>Ikuti Kami</h3>
                         <ul class="social-icons">
                             <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                             <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                             <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                             <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                         </ul>
                     </div>
                 </div>
             </div>
             <div class="bottom-footer">
                 <div class="container">
                     <div class="row">
                         <div class="col-md-6">
                             <p>By : Kelompok 6 <br><a href="https://html.design/">Project UAS </a></p>
                         </div>
                         <div class="col-md-6">
                             <ul class="footer-nav">
                                 <li><a href="">Home</a></li>
                                 <li><a href="">About</a></li>
                                 <li><a href="">Services</a></li>
                                 <li><a href="">Contact</a></li>
                             </ul>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </footer>
     
     <style>
     
     .about-us {
         padding: 60px 0;
         background-color: #f9f9f9;
     }
     .titlepage {
         text-align: center;
         margin-bottom: 40px;
     }
     .titlepage h2 {
         font-size: 36px;
         color: #343a40;
         margin-bottom: 10px;
     }
     .titlepage span {
         font-size: 16px;
         color: #777;
     }
     .about-img {
         text-align: center;
         margin-bottom: 20px;
     }
     .about-img img {
         max-width: 100%;
         height: auto;
         border-radius: 8px;
     }
     .about-content {
         padding: 20px;
     }
     .about-content h3 {
         font-size: 28px;
         color: #343a40;
         margin-bottom: 15px;
     }
     .about-content p {
         font-size: 16px;
         color: #555;
         margin-bottom: 20px;
         line-height: 1.6;
     }
     .about-content ul {
         list-style: none;
         padding: 0;
     }
     .about-content ul li {
         font-size: 16px;
         color: #555;
         margin-bottom: 10px;
         position: relative;
         padding-left: 20px;
     }
     .about-content ul li:before {
         content: "\f00c";
         font-family: "Font Awesome 5 Free";
         position: absolute;
         left: 0;
         color: #007bff;
         font-weight: 900;
     }
     
     /* Responsiveness */
     @media (max-width: 768px) {
         .about-content {
             padding: 0;
         }
         .about-img, .about-content {
             text-align: center;
         }
         .about-content ul {
             text-align: left;
             padding-left: 0;
         }
         .about-content ul li {
             padding-left: 25px;
         }
     }
     .footer {
         background-color: #003366; /* Ubah warna hitam menjadi biru tua */
         color: #fff;
         padding: 40px 0;
     }
     .footer h3 {
         color: #ffc107;
     }
     .footer p, .footer a {
         color: #dcdcdc;
     }
     .footer a:hover {
         color: #ffc107;
         text-decoration: none;
     }
     .social-icons {
         list-style: none;
         padding: 0;
     }
     .social-icons li {
         display: inline;
         margin-right: 10px;
     }
     .social-icons a {
         color: #dcdcdc;
         font-size: 18px;
     }
     .social-icons a:hover {
         color: #ffc107;
     }
     .bottom-footer {
         background-color: #002244; /* Ubah warna hitam menjadi warna biru tua */
         padding: 20px 0;
         border-top: 1px solid #444;
     }
     .footer-nav {
         list-style: none;
         padding: 0;
         text-align: right;
     }
     .footer-nav li {
         display: inline;
         margin-left: 15px;
     }
     .footer-nav a {
         color: #dcdcdc;
     }
     .footer-nav a:hover {
         color: #ffc107;
         text-decoration: none;
     }
     </style>
     @if (session('success'))
         <script>
            alert('Mobil Berhasil DiSewa.')
         </script>
     @endif
     @if (session('login'))
         <script>
            alert('Yeayy, Anda berhasil login.')
         </script>
     @endif
      <!-- end footer -->
      <!-- Javascript files-->
      <script src="{{ asset('asset_user/js/jquery.min.js')}}"></script>
      <script src="{{ asset('asset_user/js/popper.min.js')}}"></script>
      <script src="{{ asset('asset_user/js/bootstrap.bundle.min.js')}}"></script>
      <script src="{{ asset('asset_user/js/jquery-3.0.0.min.js')}}"></script>
      <script src="{{ asset('asset_user/js/plugin.js')}}"></script>
      <!-- sidebar -->
      <script src="{{ asset('asset_user/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
      <script src="{{ asset('asset_user/js/custom.js')}}"></script>
      <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
   </body>
</html>

