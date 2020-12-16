<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Uzdenim.com</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="assets/vendor/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: BizPage - v4.0.1
  * Template URL: https://bootstrapmade.com/bizpage-bootstrap-business-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top header-transparent">
    <div class="container-fluid">

      <div class="row justify-content-center">
        <div class="col-xl-11 d-flex align-items-center">
          <h1 class="logo mr-auto"><a href="index.html">Uzdenim</a></h1> 
          <!-- Uncomment below if you prefer to use an image logo -->
          <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

          <nav class="nav-menu d-none d-lg-block">
            <ul>
              <li class="active"><a href="index.html">{{ $loc['home_menu'] }}</a></li>
              <li><a href="#services">{{ $loc['service_menu'] }}</a></li>
              <li><a href="#portfolio">{{ $loc['product_menu'] }}</a></li>
              <li><a href="#about">{{ $loc['about_menu'] }}</a></li>
              <li><a href="#team">{{ $loc['team_menu'] }}</a></li>
              <li><a href="#contact">{{ $loc['contact_menu'] }}</a></li>
              <li class="drop-down"><a href=""><img src="images/{{ $loc['lang_img_menu'] }}" style="margin-right:5px;"/>{{ $loc['lang_text_menu'] }}</a>
                <ul style="width:100px;">
                  <li><a href="{{ URL::to('/') }}/ru"><img src="images/russia.png" style="margin-right:5px;"/>RU</a></li>
                  <li><a href="{{ URL::to('/') }}/uz"><img src="images/uzb.png" style="margin-right:5px;"/>UZ</a></li>
                  <li><a href="{{ URL::to('/') }}/en"><img src="images/english.png" style="margin-right:5px;"/>EN</a></li>
                </ul>
              </li>
            </ul>
          </nav><!-- .nav-menu -->
        </div>
      </div>

    </div>
  </header><!-- End Header -->

  <!-- ======= Intro Section ======= -->
  <section id="intro">
    <div class="intro-container">
      <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">

        <ol class="carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">
            <? $check=1; ?>
            @foreach($sliders as $val)
                @if($check==1)
                <div class="carousel-item active" style="background-image: url({{ URL::to('/') }}/media/{{ $val->img }})">
                    <div class="carousel-container">
                        <div class="container">
                            <h2 class="animate__animated animate__fadeInDown">{{ $val->head }}</h2>
                            <p class="animate__animated animate__fadeInUp">{{ $val->short }}</p>
                            <a href="{{ URL::to('/') }}/{{ $lang }}/info/{{ $val->id }}" class="btn-get-started scrollto animate__animated animate__fadeInUp">{{ $loc['get_start'] }}</a>
                        </div>
                    </div>
                </div>
                    @else
                <div class="carousel-item" style="background-image: url({{ URL::to('/') }}/media/{{ $val->img }})">
                    <div class="carousel-container">
                        <div class="container">
                            <h2 class="animate__animated animate__fadeInDown">{{ $val->head }}</h2>
                            <p class="animate__animated animate__fadeInUp">{{ $val->short }}</p>
                            <a href="{{ URL::to('/') }}/{{ $lang }}/info/{{ $val->id }}" class="btn-get-started scrollto animate__animated animate__fadeInUp">{{ $loc['get_start'] }}</a>
                        </div>
                    </div>
                </div>
                    @endif
                <? $check++; ?>
            @endforeach

        </div>

        <a class="carousel-control-prev" href="#introCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon ion-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>

        <a class="carousel-control-next" href="#introCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon ion-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>

      </div>
    </div>
  </section><!-- End Intro Section -->

  <main id="main">

    <!-- ======= Featured Services Section Section ======= -->
    <section id="featured-services">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 box">
            <i class="ion-ios-bookmarks-outline"></i>
            <h4 class="title"><a href="{{ URL::to('/') }}/{{ $lang }}/info/{{ $slidersFooter[0]->id }}">{{ $slidersFooter[0]->head }}</a></h4>
            <p class="description">{{ $slidersFooter[0]->short }}</p>
          </div>

          <div class="col-lg-4 box box-bg">
            <i class="ion-ios-stopwatch-outline"></i>
            <h4 class="title"><a href="{{ URL::to('/') }}/{{ $lang }}/info/{{ $slidersFooter[1]->id }}">{{ $slidersFooter[1]->head }}</a></h4>
            <p class="description">{{ $slidersFooter[1]->short }}</p>
          </div>

          <div class="col-lg-4 box">
            <i class="ion-ios-heart-outline"></i>
            <h4 class="title"><a href="{{ URL::to('/') }}/{{ $lang }}/info/{{ $slidersFooter[2]->id }}">{{ $slidersFooter[2]->head }}</a></h4>
            <p class="description">{{ $slidersFooter[1]->short }}</p>
          </div>

        </div>
      </div>
    </section><!-- End Featured Services Section -->

    <!-- ======= About Us Section ======= -->
    <section id="about">
      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h3>{{ $loc['about_us'] }}</h3>
          <p>{{ $about_header->head }}</p>
        </header>

        <div class="row about-cols">

          <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
            <div class="about-col">
              <div class="img">
                <img src="{{ URL::to('/') }}/media/{{ $sendAbout[0]->img }}" alt="" class="img-fluid">
                <div class="icon"><i class="ion-ios-speedometer-outline"></i></div>
              </div>
              <h2 class="title"><a href="{{ URL::to('/') }}/{{ $lang }}/info/{{ $sendAbout[0]->id }}">{{ $sendAbout[0]->head }}</a></h2>
              <p>
                  {{ $sendAbout[0]->short }}
              </p>
            </div>
          </div>

          <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
            <div class="about-col">
              <div class="img">
                <img  src="{{ URL::to('/') }}/media/{{ $sendAbout[1]->img }}" alt="" class="img-fluid">
                <div class="icon"><i class="ion-ios-list-outline"></i></div>
              </div>
              <h2 class="title"><a href="{{ URL::to('/') }}/{{ $lang }}/info/{{ $sendAbout[0]->id }}">{{ $sendAbout[1]->head }}</a></h2>
              <p>
                  {{ $sendAbout[1]->short }}
              </p>
            </div>
          </div>

          <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
            <div class="about-col">
              <div class="img">
                <img  src="{{ URL::to('/') }}/media/{{ $sendAbout[2]->img }}" alt="" class="img-fluid">
                <div class="icon"><i class="ion-ios-eye-outline"></i></div>
              </div>
              <h2 class="title"><a href="{{ URL::to('/') }}/{{ $lang }}/info/{{ $sendAbout[2]->id }}">{{ $sendAbout[2]->head }}</a></h2>
              <p>
                  {{ $sendAbout[2]->short }}
              </p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End About Us Section -->

    <!-- ======= Services Section ======= -->
    <section id="services">
      <div class="container" data-aos="fade-up">

        <header class="section-header wow fadeInUp">
          <h3>{{ $loc['service'] }}</h3>
          <p>{{ $service_header->head }}</p>
        </header>

        <div class="row">

          <div class="col-lg-4 col-md-6 box" data-aos="fade-up" data-aos-delay="100">
            <div class="icon"><i class="ion-ios-analytics-outline"></i></div>
            <h4 class="title"><a href="{{ URL::to('/') }}/{{ $lang }}/info/{{ $sendService[0]->id }}">{{ $sendService[0]->head }}</a></h4>
            <p class="description">{{ $sendService[0]->short }}</p>
          </div>
          <div class="col-lg-4 col-md-6 box" data-aos="fade-up" data-aos-delay="200">
            <div class="icon"><i class="ion-ios-bookmarks-outline"></i></div>
            <h4 class="title"><a href="{{ URL::to('/') }}/{{ $lang }}/info/{{ $sendService[1]->id }}">{{ $sendService[1]->head }}</a></h4>
            <p class="description">{{ $sendService[1]->short }}</p>
          </div>
          <div class="col-lg-4 col-md-6 box" data-aos="fade-up" data-aos-delay="300">
            <div class="icon"><i class="ion-ios-paper-outline"></i></div>
            <h4 class="title"><a href="{{ URL::to('/') }}/{{ $lang }}/info/{{ $sendService[2]->id }}">{{ $sendService[2]->short }}</a></h4>
            <p class="description">{{ $sendService[2]->short }}</p>
          </div>

        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Call To Action Section ======= -->
<!--    <section id="call-to-action">-->
<!--      <div class="container text-center" data-aos="zoom-in">-->
<!--        <h3>{{ $loc['video'] }}</h3>-->
<!--        <p> {{ $video_header->head }} </p>-->
<!--        <div>-->
<!--    <div class="row">-->
<!--    <div class="col-sm-3 col-md-3">-->
<!--    <section class="section1">-->
<!--        <div class="box">-->
<!--            <div>-->
<!--                <span>-->
<!--                    <video style="width: 200px;height: 200px" src="{{ URL::to('/') }}/media/{{ $sendVideo[0] }}" autoplay="" muted="" controls="" loop=""></video>-->
<!--                </span>-->
<!--                <span>-->
<!--                    <video style="width: 200px;height: 200px" src="{{ URL::to('/') }}/media/{{ $sendVideo[0] }}" autoplay="" muted="" loop=""></video>-->
<!--                </span>-->
<!--                <span>-->
<!--                    <video style="width: 200px;height: 200px" src="{{ URL::to('/') }}/media/{{ $sendVideo[0] }}" autoplay=""  muted="" loop=""></video>-->
<!--                </span>-->
<!--            </div>-->
<!--        </div>-->
<!--    </section>-->
<!--    </div>-->
<!--    <div class="col-sm-3 col-md-3">-->
<!--    <section class="section1">-->
<!--        <div class="box">-->
<!--            <div>-->
<!--                <span>-->
<!--                    <video style="width: 200px;height: 200px" src="{{ URL::to('/') }}/media/{{ $sendVideo[1] }}" autoplay="" controls="" muted="" loop=""></video>-->
<!--                </span>-->
<!--                <span>-->
<!--                    <video style="width: 200px;height: 200px" src="{{ URL::to('/') }}/media/{{ $sendVideo[1] }}" autoplay="" muted="" loop=""></video>-->
<!--                </span>-->
<!--                <span>-->
<!--                    <video style="width: 200px;height: 200px" src="{{ URL::to('/') }}/media/{{ $sendVideo[1] }}" autoplay=""  muted="" loop=""></video>-->
<!--                </span>-->
<!--            </div>-->
<!--        </div>-->
<!--    </section>-->
<!--    </div>-->
<!--    <div class="col-sm-3 col-md-3">-->
<!--    <section class="section1">-->
<!--        <div class="box">-->
<!--            <div>-->
<!--                <span>-->
<!--                    <video style="width: 200px;height: 200px" src="{{ URL::to('/') }}/media/{{ $sendVideo[2] }}" autoplay="" controls="" muted="" loop=""></video>-->
<!--                </span>-->
<!--                <span>-->
<!--                    <video style="width: 200px;height: 200px" src="{{ URL::to('/') }}/media/{{ $sendVideo[2] }}" autoplay="" muted="" loop=""></video>-->
<!--                </span>-->
<!--                <span>-->
<!--                    <video style="width: 200px;height: 200px" src="{{ URL::to('/') }}/media/{{ $sendVideo[2] }}" autoplay=""  muted="" loop=""></video>-->
<!--                </span>-->
<!--            </div>-->
<!--        </div>-->
<!--    </section>-->
<!--    </div>-->
<!--</div>-->
<!--</div>-->
        <!--<a class="cta-btn" href="#">Call To Action</a>-->
<!--      </div>-->
<!--</section><!-- End Call To Action Section -->-->

    <!-- ======= Skills Section ======= -->
    
    <!-- ======= Facts Section ======= -->

<style>
          .section1{
              padding: 10px;
              position: relative;
              min-width: 200px;
              height: 300px;
              left:50%;
          }
          .section1 .box{
              position: absolute;
              top: calc(50% - 100px);
              left: calc(50% - 100px);
              width: 200px;
              height: 200px;
              transform-style: preserve-3d;
          }
          .section1 .box div{
              position: absolute;
              top: 0px;
              left: 0px;
              width: 100%;
              height: 100%;
              transform-style: preserve-3d;
              transform: rotateX(-20deg) rotateY(25deg) translate3D(-75px,-50px,150px);
          }
          .section1 .box div span{
              position: absolute;
              top: 0;
              left: 0;
              display: block;
              width: 100%;
              height: 100%;
              border: 1px rgba(0,0, 0,0.1) solid;
              background: #cccccc;
          }
          .section1 .box div span video{
              position: absolute;
              top: 0;
              left: 0;
              width: 100%;
              height: 100%;
              object-fit: cover;
              filter: blur(0px);
          }
          .section1 video{
              position: absolute;
              top: 0;
              left: 0;
              width: 100%;
              height: 100%;
              object-fit: cover;
              filter: blur(20px);
          }
          .section1 .box div span:nth-child(1){
              transform: rotateX(0deg) translate3d(0,0,100px);
          }
          .section1 .box div span:nth-child(2){
              transform: rotateY(90deg) translate3d(0,0,-100px);
          }
          .section1 .box div span:nth-child(2) video{
              transform: rotateY(180deg);
          }
          .section1 .box div span:nth-child(3){
              transform: rotateX(90deg) translate3d(0,0,100px);
          }
      </style>
    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="section-bg">
      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h3 class="section-title">{{ $loc['project'] }}</h3>
        </header>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
      <div class=" col-lg-12">
        </div>
      </div>

      <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
        @foreach($sendProduct as $val)
        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
          <div class="portfolio-wrap">
            <figure>
              <img src="{{ URL::to('/') }}/media/{{ $val->img }}" class="img-fluid" alt="">
              <a target="_blank" href="{{ URL::to('/') }}/media/{{ $val->img }}" data-lightbox="portfolio" data-title="App 1" class="link-preview"><i class="ion ion-eye"></i></a>
              <a href="{{ URL::to('/') }}/{{$lang}}/info/{{ $val->id }}" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
            </figure>

            <div class="portfolio-info">
              <h4><a href="{{ URL::to('/') }}/{{$lang}}/info/{{ $val->id }}">{{ $val->head }}</a></h4>
              <p>{{ $val->short }}</p>
            </div>
          </div>
        </div>
        @endforeach


      </div>

      </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Our Clients Section ======= -->
    <section id="clients">
      <div class="container" data-aos="zoom-in">

        <header class="section-header">
          <h3>{{ $loc['clients'] }}</h3>
        </header>

        <div class="owl-carousel clients-carousel">
      @for($i=0;$i<count($sendClient);$i++)
        <img src="{{ URL::to('/') }}/media/{{ $sendClient[$i] }}" alt="">
      @endfor
        </div>

      </div>
    </section><!-- End Our Clients Section -->

    <!-- ======= Testimonials Section ======= -->


    <!-- ======= Team Section ======= -->
    <section id="team">
      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <h3>{{ $loc['team_menu'] }}</h3>
          <p>{{ $colleg_header->head }}</p>
        </div>

        <div class="row">
          @foreach($sendCollegs as $val)
          <div class="col-lg-3 col-md-6">
            <div class="member" data-aos="fade-up" data-aos-delay="100">
              <img src="{{ URL::to('/') }}/media/{{ $val->img }}" class="img-fluid" alt=""/>
              <div class="member-info">
                <div class="member-info-content">
                  <h4>{{ $val->head }}</h4>
                  <span>{{ $val->short }}</span>
                </div>
              </div>
            </div>
          </div>
          @endforeach

        </div>

      </div>
    </section><!-- End Team Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h3>{{ $loc['contact_menu'] }}</h3>
        </div>

        <div class="row contact-info">

          <div class="col-md-4">
            <div class="contact-address">
              <i class="ion-ios-location-outline"></i>
              <h3>{{ $loc['adress'] }}</h3>
              <address>A108 Adam Street, NY 535022, USA</address>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-phone">
              <i class="ion-ios-telephone-outline"></i>
              <h3>{{ $loc['phone'] }}</h3>
              <p><a href="tel:+155895548855">+1 5589 55488 55</a></p>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-email">
              <i class="ion-ios-email-outline"></i>
              <h3>{{ $loc['email'] }}</h3>
              <p><a href="mailto:info@example.com">info@example.com</a></p>
            </div>
          </div>

        </div>

        <div class="form">
          <form action="{{ URL::to('/') }}/{{ $lang }}/form" method="post" class="php-email-form">
              @csrf
            <div class="row">
              <div class="form-group col-md-6">
                <input type="text" name="name" class="form-control" id="name" placeholder="{{ $loc['form_name'] }}" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                <div class="validate"></div>
              </div>
              <div class="form-group col-md-6">
                <input type="text" class="form-control" name="tell" id="email" placeholder="{{ $loc['form_email'] }}" data-msg="Please enter a number" />
                <div class="validate"></div>
              </div>
            </div>
            <div class="form-group">
              <textarea class="form-control" name="text" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="{{ $loc['message'] }}"></textarea>
              <div class="validate"></div>
            </div>
            <div class="mb-3">
              <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message">Your message has been sent. Thank you!</div>
            </div>
            <div class="text-center"><button type="submit">{{ $loc['send_message'] }}</button></div>
          </form>
        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-info">
            <h3>Uzdenim</h3>
            <p>{{ $loc['footer_info'] }}</p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>{{ $loc['links'] }}</h4>
            <ul>
              <li><i class="ion-ios-arrow-right"></i> <a href="#">{{ $loc['home_menu'] }}</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="#">{{ $loc['about_menu'] }}</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="#">{{ $loc['service_menu'] }}</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="#">{{ $loc['team_menu'] }}</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="#">{{ $loc['contact_menu'] }}</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>{{ $loc['contact_menu'] }}</h4>
            <p>
              A108 Adam Street <br>
              New York, NY 535022<br>
              United States <br>
              <strong>Phone:</strong> +1 5589 55488 55<br>
              <strong>Email:</strong> info@example.com<br>
            </p>

            <div class="social-links">
              <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
              <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
              <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
              <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
              <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
            </div>

          </div>

          <div class="col-lg-3 col-md-6 footer-newsletter">
            <h4>{{ $loc['news'] }}</h4>
            <p>{{ $loc['news_text'] }}</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="{{ $loc['subscribe'] }}">
            </form>
          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>Uzdenim</strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!--
        All the links in the footer should remain intact.
        You can delete the links only if you purchased the pro version.
        Licensing information: https://bootstrapmade.com/license/
        Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=BizPage
      -->
        Designed by <a href="https://7market.uz/">7market.uz</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <!-- Uncomment below i you want to use a preloader -->
  <!-- <div id="preloader"></div> -->

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>