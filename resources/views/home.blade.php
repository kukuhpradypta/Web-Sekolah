<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>Mentor Bootstrap Template - Index</title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />

    <!-- Favicons -->
    <link href="{{asset('template/assets/img/favicon.png')}}" rel="icon" />

    <link href="{{asset('template/assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon" />

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet" />

    <!-- Vendor CSS Files -->
    <link href="{{asset('template/assets/vendor/animate.css/animate.min.css')}}" rel="stylesheet" />
    <link href="{{asset('template/assets/vendor/aos/aos.css')}}" rel="stylesheet" />
    <link href="{{asset('template/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" />
    <link href="{{asset('template/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet" />
    <link href="{{asset('template/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet" />
    <link href="{{asset('template/assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet" />
    <link href="{{asset('template/assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet" />

    <!-- Template Main CSS File -->
    <link href="{{asset('template/assets/css/style.css')}}" rel="stylesheet" />

    <!-- Font Awesome -->
    <!-- <link href="fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css" /> -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <!-- =======================================================
  * Template Name: Mentor - v4.5.0
  * Template URL: https://bootstrapmade.com/mentor-free-education-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  </head>

  <body>
    <!-- ======= Header ======= -->
    
    {{-- <header id="header" class="fixed-top"> --}}
      @include('template.navbar')
    {{-- </header> --}}

    <!-- End Header -->

    <!-- ======= Hero Section ======= -->
@include('template.background')
    <!-- End Hero -->

    <main id="main">
      <!-- ======= Counts Section ======= -->
      <!-- Carousel -->
      
      {{-- <div id="carouselExampleControls" class="carousel slide counts section-bg" data-bs-ride="carousel"> --}}

        @include('template.carousel')
      {{-- </div> --}}
      <!-- End Carousel -->
      <!-- End Counts Section -->

      <!-- ======= About Section ======= -->
      <section id="about" class="about" style="background-color: #d7efff; font-family: 'Poppins', sans-serif">
        <div class="container" data-aos="fade-up">
          <div class="row">
            <div class="col-lg-6 col-md-6 order-1 order-lg-2 text-end" data-aos="fade-left" data-aos-delay="100">
              <img src="{{asset('template/assets/img/abouttb.jpg')}}" class="img-fluid whystarbak" alt="" style="height: 430px; width: 430px; border-radius: 20px; margin-left: auto" />
            </div>
            <div class="col-lg-6 col-md-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
              <h3>Why Starbhak?</h3>
              <p style="font-size: 20px">90% of graduating students already work before graduation, as either self-employed workers or young professionals.</p>
            </div>
          </div>
        </div>
      </section>
      <!-- End About Section -->

      <!-- ======= Counts Section ======= -->
      <section id="counts" class="counts section-bg">
        <div class="container">
          <div class="row counters">
            <div>
              <p>SMK Taruna Bhakti</p>
            </div>
            <br />
            <div>
              <p>
                Protokol Kesehatan di Lingkungan Sekolah <a href="#" class="btn btn-transparent text-white hover"><i class="far fa-arrow-alt-circle-right" style="font-size: 25px"></i></a>
              </p>
            </div>
          </div>
        </div>
      </section>
      <!-- End Counts Section -->

      <!-- ======= Why Us Section ======= -->
      <section id="why-us" class="why-us bg-dark">
        <div class="container" data-aos="fade-up">
          <div class="text-center">
            <a href="courses.html" class="btn btn-outline-light pe-5 ps-5" style="border-radius: 50px">Virtual Tour SMK Taruna Bhakti</a>
          </div>
          <iframe class="mt-5" src="https://kuula.co/share/7tK9b/collection/7YQlT?fs=1&vr=1&sd=1&initload=0&thumbs=1&info=0&logo=1&logosize=40" style="width:100%; height:500px; border-radius: 25px">
          </iframe>

          </div>
        </div>
      </section>
      <!-- End Why Us Section -->

      <!-- Artikel dan Info Sekolah -->
      <section id="counts" class="counts section-bg" style="background: #e39b0d">
        <div class="container">
          <div class="text-center">
            <a href="courses.html" class="btn btn-outline-light pe-5 ps-5" style="border-radius: 50px">Artikel dan Info Sekolah</a>
          </div>
        </div>
      </section>
      <!-- End -->

      <!-- ======= Popular Courses Section ======= -->
      <section id="popular-courses" class="courses">
        <div class="container" data-aos="fade-up">
          <div class="row" data-aos="zoom-in" data-aos-delay="100">
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
              <div class="course-item">
                <img src="{{asset('template/assets/img/course-1.jpg')}}" class="img-fluid" alt="..." />
                <div class="course-content">
                  <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4>Artikel</h4>
                    <!-- <p class="price">$169</p> -->
                  </div>

                  <h3><a href="course-details.html">Website Design</a></h3>
                  <p>Et architecto provident deleniti facere repellat nobis iste. Id facere quia quae dolores dolorem tempore.</p>
                </div>
              </div>
            </div>
            <!-- End Course Item-->

            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
              <div class="course-item">
                <img src="{{asset('template/assets/img/course-2.jpg')}}" class="img-fluid" alt="..." />
                <div class="course-content">
                  <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4>Website Kesiswaan</h4>
                    <!-- <p class="price">$250</p> -->
                  </div>

                  <h3><a href="course-details.html">Search Engine Optimization</a></h3>
                  <p>Et architecto provident deleniti facere repellat nobis iste. Id facere quia quae dolores dolorem tempore.</p>
                </div>
              </div>
            </div>
            <!-- End Course Item-->

            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
              <div class="course-item">
                <img src="{{asset('template/assets/img/course-3.jpg')}}" class="img-fluid" alt="..." />
                <div class="course-content">
                  <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4>Kurikulum</h4>
                    <!-- <p class="price">$180</p> -->
                  </div>

                  <h3><a href="course-details.html">Copy Writing</a></h3>
                  <p>Et architecto provident deleniti facere repellat nobis iste. Id facere quia quae dolores dolorem tempore.</p>
                </div>
              </div>
            </div>
            <!-- End Course Item-->
          </div>
        </div>
      </section>
      <!-- End Popular Courses Section -->

      <div class="container">
        <div class="text-center">
          <a href="courses.html" class="btn btn-outline-primary pe-5 ps-5" style="border-radius: 50px">Load More ...</a>
        </div>
      </div>

      <section id="counts" class="counts section-bg mt-4" style="background-color: #fff9f9">
        <div class="container text-center">
          <div class="row counters kebawah">
            <div class="col-md-3 mt-2">
              <img src="{{asset('template/assets/img/loper4.png')}}" alt="" />
            </div>
            <div class="col-md-3 mt-2">
              <img src="{{asset('template/assets/img/loper3.png')}}" alt="" />
            </div>
            <div class="col-md-3 mt-2">
              <img src="{{asset('template/assets/img/loper2.png')}}" alt="" />
            </div>
            <div class="col-md-3 mt-2">
              <img src="{{asset('template/assets/img/loper1.png')}}" alt="" />
            </div>
          </div>
        </div>
      </section>

      <!-- ======= Trainers Section ======= -->
      <section id="counts" class="counts section-bg " style="background-color: #3b4850">
        <div class="container text-white">
          <div class="row counters mt-4 mb-5">
            <div class="col-md-7" style="font-family: poppins">
              <h1>
                STARBHAK <br />
                <h1 class="mt-2">LATEST</h1>
              </h1>
              <br />
              <h1 style="font-size: 50px; font-weight: bolder"><b>ACTIVITIES.</b></h1>
            </div>
            <div class="col-md-3 mt-5">
              <i class="fab fa-instagram" style="font-size: 40px"></i>
              <p style="font-size: 18px"><b> INSTAGRAM</b></p>
              <p style="font-size: 13px; font-weight: lighter">
                Check out the latest photos <br />
                on starbhak.offcial Instagram
              </p>
            </div>
            <div class="col-md-2 mt-5">
              <i class="fab fa-facebook" style="font-size: 40px"></i>
              <p style="font-size: 18px"><b> Facebook Page</b></p>
              <p style="font-size: 13px; font-weight: lighter">Check out the latest photos on starbhak.offcial Facebook</p>
            </div>
          </div>
        </div>
      </section>
      <!-- End Trainers Section -->
      {{-- <footer  class="counts section-bg" style="background-color: #095b90;"> --}}
@include('template.footer')
      {{-- </footer> --}}
    </main>
    <!-- End #main -->

    <!-- ======= Footer ======= -->

    <!-- End Footer -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{asset('template/assets/vendor/aos/aos.js')}}"></script>
    <script src="{{asset('template/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('template/assets/vendor/php-email-form/validate.js')}}"></script>
    <script src="{{asset('template/assets/vendor/purecounter/purecounter.js')}}"></script>
    <script src="{{asset('template/assets/vendor/swiper/swiper-bundle.min.js')}}"></script>

    <!-- Template Main JS File -->
    <script src="{{asset('template/assets/js/main.js')}}"></script>
  </body>
</html>
