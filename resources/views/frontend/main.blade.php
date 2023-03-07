<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Faculty of Science BASUG</title>
    <meta content="width=device-width, initial-scale=0.8" name="viewport" />
    <meta content="" name="keywords" />
    <meta content="" name="description" />

    <!-- Favicons -->
    <link href="{{ asset('frontend/assets/img/logo1.png') }}" rel="icon" />
    <link
      href="assets/img/logo1.png"
      rel="apple-touch-icon"
    />

    <!-- Google Fonts -->
    <link
      href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800|Montserrat:300,400,700"
      rel="stylesheet"
    />

    <!-- Bootstrap CSS File -->
    <link
      href="{{ asset('frontend/assets/lib/bootstrap/css/bootstrap.min.css') }}"
      rel="stylesheet"
    />

    <!-- Libraries CSS Files -->
    <link
      href="{{ asset('frontend/assets/lib/font-awesome/css/font-awesome.min.css') }}"
      rel="stylesheet"
    />
    <!-- <link href="assets/lib/animate/animate.min.css" rel="stylesheet" /> -->
    <link
      href="{{ asset('frontend/assets/lib/ionicons/css/ionicons.min.css') }}"
      rel="stylesheet"
    />
    <link
      href="{{ asset('frontend/assets/lib/owlcarousel/assets/owl.carousel.min.css') }}"
      rel="stylesheet"
    />
    <link
      href="{{ asset('frontend/assets/lib/magnific-popup/magnific-popup.css') }}"
      rel="stylesheet"
    />
    <link
      href="{{ asset('frontend/assets/lib/ionicons/css/ionicons.min.css') }}"
      rel="stylesheet"
    />

    <!-- Main Stylesheet File -->
    <link href="{{ asset('frontend/assets/css/style.css') }}" rel="stylesheet" />
  </head>

  <body id="body">
    <!--==========================
    Header
  ============================-->
    <header id="header">
      <div class="container">
        <div id="logo" class="pull-left">
          <h1 style="float: right">
            <a href="#body" class="scrollto"
              ><span style="color: #50d8af">Faculty Of Science</span></a
            >
          </h1>

          <object
            class="Img-responsive"
            data="{{ asset('frontend/assets/img/logo5.svg') }}"
            width="60"
            height="60"
          ></object>
        </div>

        <nav id="nav-menu-container">
          <ul class="nav-menu">
            <li class="menu-active"><a href="#body">Home</a></li>
            <li><a href="#">About us</a></li>
            <li><a href="#department">Departments</a></li>
            <li><a href="/login">Student Potal</a></li>
            <li><a href="register">Freshers Register</a></li>
          </ul>
        </nav>
        <!-- #nav-menu-container -->
      </div>
    </header>
    <!-- #header -->

    <!--==========================
    Intro Section
  ============================-->
    <section id="intro">
      <div class="intro-content">
        <object
          class="Img-responsive"
          data="{{ asset('frontend/assets/img/logo5.svg') }}"
          width="200"
          height="200"
        ></object>
        <h3>
          Faculty Of Science  <br />
          <span></span>
        </h3>
</div>
      </div>

      <div id="intro-carousel" class="owl-carousel">
      <div
          class="item"
          style="
            background-image: url('assets/img/intro-carousel/basug.jpg');
          "
        ></div>
        <div
          class="item"
          style="
            background-image: url('frontend/assets/img/intro-carousel/basug1.jpg');
          "
        ></div>
        <div
          class="item"
          style="
            background-image: url('frontend/assets/img/intro-carousel/basug.jpg');
          "
        ></div>
        <div
          class="item"
          style="
            background-image: url('frontend/assets/img/intro-carousel/basug1.jpg');
          "
        ></div>
        <div
          class="item"
          style="
            background-image: url('frontend/assets/img/intro-carousel/basug.jpg');
          "
        ></div>
      </div>

 
    </section>
    <!-- #intro -->

    <main id="main">
      <!--==========================
      About Section
    ============================-->

      <!-- #about -->

    

      <!--==========================
      Services Section
    ============================-->
      <section id="department">
        <div class="container">
          <div class="section-header">
            <h2>Department</h2>
          </div>

          <div class="row">
            <div class="col-lg-12 content">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi soluta esse, recusandae commodi, reiciendis veniam beatae amet quod est quam nulla saepe itaque placeat dolorum praesentium iure, et maiores! Animi!
            </div>
          </div>

          <div class="row" style="margin-top: 40px ;">

            <div class="col-lg-12">
                  <div class="box">
                        <div class="row">
                              <div class="col-sm-4  ">
                                  <img class="" src="{{ asset('frontend/assets/img/intro-carousel/bch2.png') }}"  width="100%">
                              </div>
                              <div class="col-sm-8">
                                <h4 class="title" style="font-weight:700 ;">
                                  <a href="">Biochemistry Department</a>
                                </h4>
                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Accusantium facilis veniam doloremque tenetur earum, deleniti praesentium dignissimos ullam fuga vel similique quis eveniet aperiam qui sunt voluptates at unde quia.
                              </div>
                      </div>
                  </div>
            </div>


            <div class="col-lg-12">
                  <div class="box">
                        <div class="row">
                              <div class="col-sm-4  ">
                                  <img class="" src="{{ asset('frontend/assets/img/intro-carousel/chm1.jpg') }}"  width="100%">
                              </div>
                              <div class="col-sm-8">
                                <h4 class="title" style="font-weight:700 ;">
                                  <a href="">Chemistry Department</a>
                                </h4>
                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Accusantium facilis veniam doloremque tenetur earum, deleniti praesentium dignissimos ullam fuga vel similique quis eveniet aperiam qui sunt voluptates at unde quia.
                              </div>
                      </div>
                  </div>
            </div>

            <div class="col-lg-12">
                  <div class="box">
                        <div class="row">
                              <div class="col-sm-4  ">
                                  <img class="" src="{{ asset('frontend/assets/img/intro-carousel/maths4.jpg') }}"  width="100%">
                              </div>
                              <div class="col-sm-8">
                                <h4 class="title" style="font-weight:700 ;">
                                  <a href="">mathematical Science Department</a>
                                </h4>
                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Accusantium facilis veniam doloremque tenetur earum, deleniti praesentium dignissimos ullam fuga vel similique quis eveniet aperiam qui sunt voluptates at unde quia.
                              </div>
                      </div>
                  </div>
            </div>

            <div class="col-lg-12">
                  <div class="box">
                        <div class="row">
                              <div class="col-sm-4  ">
                                  <img class="" src="{{ asset('frontend/assets/img/intro-carousel/mcb.png') }}"  width="100%">
                              </div>
                              <div class="col-sm-8">
                                <h4 class="title" style="font-weight:700 ;">
                                  <a href="">Microbiology Deparment</a>
                                </h4>
                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Accusantium facilis veniam doloremque tenetur earum, deleniti praesentium dignissimos ullam fuga vel similique quis eveniet aperiam qui sunt voluptates at unde quia.
                              </div>
                      </div>
                  </div>
            </div>

            <div class="col-lg-12">
                  <div class="box">
                        <div class="row">
                              <div class="col-sm-4  ">
                                  <img class="" src="{{ asset('frontend/assets/img/intro-carousel/slt.png') }}"  width="100%">
                              </div>
                              <div class="col-sm-8">
                                <h4 class="title" style="font-weight:700 ;">
                                  <a href="">Science Laboratory Technology</a>
                                </h4>
                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Accusantium facilis veniam doloremque tenetur earum, deleniti praesentium dignissimos ullam fuga vel similique quis eveniet aperiam qui sunt voluptates at unde quia.
                              </div>
                      </div>
                  </div>
            </div>

            <div class="col-lg-12">
                  <div class="box">
                        <div class="row">
                              <div class="col-sm-4  ">
                                  <img class="" src="{{ asset('frontend/assets/img/intro-carousel/physics.jpg') }}"  width="100%">
                              </div>
                              <div class="col-sm-8">
                                <h4 class="title" style="font-weight:700 ;">
                                  <a href="">Physics Department</a>
                                </h4>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil distinctio temporibus veritatis tempora voluptas. Quis recusandae vel, in alias debitis expedita veritatis, vitae ad dolores officiis ex, eos omnis non.
                              </div>
                      </div>
                  </div>
            </div>

            <div class="col-lg-12">
                  <div class="box">
                        <div class="row">
                              <div class="col-sm-4  ">
                                  <img class="" src="{{ asset('frontend/assets/img/intro-carousel/biology.jpg') }}"  width="100%">
                              </div>
                              <div class="col-sm-8">
                                <h4 class="title" style="font-weight:700 ;">
                                  <a href="">Biological Scince Department</a>
                                </h4>
                               Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat laborum magni, perspiciatis soluta fuga nobis exercitationem illum magnam dolorum eveniet minus praesentium et, eligendi corporis esse dolore ullam ipsam dolores?
                              </div>
                      </div>
                  </div>
            </div>

          </div>
        </div>
      </section>
      <!-- #services -->

      <!--==========================
      Our Portfolio Section
    ============================-->

      <section id="portfolio">
        <div id="makecent">
          <div class="container">
            <div class="section-header">
              <h2>Visit Bauchi State University Gadau</h2>
            </div>
          </div>

          <div class="container-fluid">
            <div class="row no-gutters">
           
                  <div class="col-lg-3 col-md-3">
                  <div class="portfolio-item ">
                    <a
                      href=""
                      class="portfolio-popup"
                    >
                      <img src="" alt="" />
                      <div class="portfolio-overlay">
                        <div class="portfolio-info">
                     <h2 class="wow fadeInUp">link</h2>
                        </div>
                      </div>
                    </a>
                  </div>
                </div>
              
            </div>
          </div>
          <div class="box-footer text-center">

    <a href="https://basug.edu.ng" class="uppercase">visit Basug</a>
  
  </div>
        </div>
        
      </section>
 

    

      <!--==========================
      Contact Section
    ============================-->
      <section id="contact" >
        <div class="container container-content">
          <div class="section-header">
            <h2>Contact Us</h2>
          </div>

          <div class="row contact-info">
            <div class="col-md-4">
              <div class="contact-address">
                <i class="ion-ios-location-outline"></i>
                <h3>Address</h3>
                <address>Faculty of Science Complex</address>
              </div>
            </div>

            <div class="col-md-4">
              <div class="contact-phone">
                <i class="ion-ios-telephone-outline"></i>
                <h3>Phone Number</h3>
                <p>
                  <a href="tel:+234800000000"
                    >234800000000</a
                  >
                </p>
              </div>
            </div>

            <div class="col-md-4">
              <div class="contact-email">
                <i class="ion-ios-email-outline"></i>
                <h3>Email</h3>
                <p>
                  <a href="mailto:info@example.com">contact@fosbasug.com</a>
                </p>
              </div>
            </div>
          </div>
        </div>

      </section>
      <!-- #contact -->

      </main>

<!--==========================
Footer
============================-->
<footer id="footer">
  <div class="container">
    <div class="copyright">
      &copy; 2023 Copyright <strong>GoreeXpress Technology</strong>
    </div>
  </div>
</footer>
<!-- #footer -->

<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

<!-- JavaScript Libraries -->
<script src="{{ asset('frontend/assets/lib/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('frontend/assets/lib/jquery/jquery-migrate.min.js') }}"></script>
<script src="{{ asset('frontend/assets/lib/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('frontend/assets/lib/easing/easing.min.js') }}"></script>
<script src="{{ asset('frontend/assets/lib/superfish/hoverIntent.js') }}"></script>
<script src="{{ asset('frontend/assets/lib/superfish/superfish.min.js') }}"></script>
<script src="{{ asset('frontend/assets/lib/wow/wow.min.js') }}"></script>
<script src="{{ asset('frontend/assets/lib/owlcarousel/owl.carousel.min.js') }}"></script>
<script src="{{ asset('frontend/assets/lib/magnific-popup/magnific-popup.min.js') }}"></script>
<script src="{{ asset('frontend/assets/lib/sticky/sticky.js') }}"></script>


<!-- Contact Form JavaScript File -->
<script src="{{ asset('frontend/assets/contactform/contactform.js') }}"></script>
<script src="{{ asset('frontend/assets/js/main.js') }}"></script>
</body>
</html>