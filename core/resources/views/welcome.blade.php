
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Welcome TO ECA</title>
  <meta content="Euro-Asian Consulting Agency, was set up to provide easy & affordable foreign universities opportunities to Nigerian students" name="description">
  <meta content="Europe, Asia, Nigeria" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <link href="assets/css/selectize.bootstrap3.min.css" rel="stylesheet">
</head>

<body>

  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-none d-lg-flex align-items-center fixed-top ">
    <div class="container d-flex align-items-center">
      <div class="contact-info mr-auto">
        <ul>
          <li><i class="icofont-envelope"></i><a href="mailto:info@eurasianconsult.comcontact@example.com">info@eurasianconsult.com</a></li>
          <li><i class="icofont-phone"></i><a href="tel:/080654777556">0704 052 5240</a></li>
          <li><i class="icofont-clock-time icofont-flip-horizontal"></i> Mon-Fri 9am - 5pm</li>
        </ul>
      </div>
      <div class="cta">
        <a href="#about" class="scrollto">Get Started</a>
      </div>
    </div>
  </div>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center">

      <!--<h1 class="logo mr-auto"><a href="#header" class="scrollto">ECA</a></h1>-->
      <!-- Uncomment below if you prefer to use an image logo -->
      <a href="#header" class="logo mr-auto scrollto"><img src="{{asset('img/logo2.png')}}" alt="" class="img-fluid"></a>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="#header">Home</a></li>
          <li><a href="{{url('about')}}">About</a></li>
          <li><a href="#cta">Universities</a></li>
          <li class=""><a href="{{url('faqs')}}">FAQ</a>
           
          </li>
          <li><a href="{{url('contact')}}">Contact</a></li>
           @if(auth::user())
            <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }} <span class="caret"></span>
                </a>

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a style="color: black;" class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </li>
          @endif
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex justify-cntent-center align-items-center">
    <div id="heroCarousel" class="container carousel carousel-fade" data-ride="carousel">

      <!-- Slide 1 -->
      <div class="carousel-item active">
        <div class="carousel-container">
          <h2 class="animated fadeInDown">Welcome to <span>Eurasian Consulting Agency</span></h2>
          <p class="animated fadeInUp">Euro-Asian Consulting Agency, was set up to provide easy & affordable foreign universities opportunities to Nigerian students. 
			  Good education is expensive but we have set out to bridge the cost by linking prospective students to affordable European and Asian Universities. 
			   </p>
          <a href="#about" class="btn-get-started animated fadeInUp scrollto">Read More</a>
        </div>
      </div>

      <!-- Slide 2 -->
      <div class="carousel-item">
        <div class="carousel-container">
          <h2 class="animated fadeInDown">ADMISSION SUPPORT</h2>
          <p class="animated fadeInUp">We also provide counselling services, assisting students with course selection and with school application, 
			visa processing and enrolment process. We are affordable and offer good value for money.</p>
          <a href="#about" class="btn-get-started animated fadeInUp scrollto">Read More</a>
        </div>
      </div>

      <!-- Slide 3 -->
      <div class="carousel-item">
        <div class="carousel-container">
          <h2 class="animated fadeInDown">ARRIVAL AND POST ARRIVAL SUPPORT</h2>
          <p class="animated fadeInUp">We offer support upon arrival to the university and offer assistance after arrival to ensure you have an hitch-free onboarding process</p>
          <a href="#about" class="btn-get-started animated fadeInUp scrollto">Read More</a>
        </div>
      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon bx bx-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon bx bx-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>

    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Icon Boxes Section ======= -->
    <section id="icon-boxes" class="icon-boxes">
      <div class="container">

        <div class="row">
          <div class="col-sm-12 col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-user-voice"></i></div>
              <h4 class="title"><a href="#">Counselling</a></h4>
              <p class="description">Attend a counselling session</p>
            </div>
          </div>

          <div class="col-sm-12 col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4 class="title"><a href="#">Apply for a course at a choice university</a></h4>
              <p class="description">
                <ul>
                  <li>Receive Approval letter</li>
                  <li>Pay School Fees Deposit and Full Professional Fee</li>
                </ul>
              </p>
            </div>
          </div>

          <div class="col-sm-12 col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-credit-card-alt"></i></div>
              <h4 class="title"><a href="">Visa Processing</a></h4>
              <p class="description">Process your visa and other important documents</p>
            </div>
          </div>

          <div class="col-sm-12 col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class="bx bxs-plane-take-off"></i></div>
              <h4 class="title"><a href="">Travel</a></h4>
              <p class="description">Travel to desired country</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Icon Boxes Section -->

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>About Us</h2>
          <p>Euro-Asian Consulting Agency, was set up to provide easy & affordable foreign universities opportunities to Nigerian students. 
			  Good education is expensive but we have set out to bridge the cost by linking prospective students to affordable European and Asian Universities. We also provide counselling services, assisting students with course selection and with school application, visa processing and enrolment process. We are affordable and offer good value for money.</p>
        </div>



        <div class="row content">
          <!-- <div class="col-lg-6">
            <p>
				Our foreign affiliate universities include universities in 
            </p>
            <ul>
              <li><i class="ri-check-double-line"></i> Ukraine</li>
              <li><i class="ri-check-double-line"></i> Kyrgyzstan</li>
              <li><i class="ri-check-double-line"></i> India</li>
              <li><i class="ri-check-double-line"></i> Georgia</li>
              <li><i class="ri-check-double-line"></i> Malaysia</li>
              <li><i class="ri-check-double-line"></i> Russia</li>
            </ul>
          </div> -->
            <!-- <p>
				The Process: Attend a counselling section – Apply for a course at a choice university – Receive Approval letter – Pay School Fees Deposit and Full Professional Fee – Visa Processing – Travel 
				To ensure prompt response, please book an appointment before visiting our office for consultation.				
            </p> -->
            <div class="d-flex justify-content-center">
          <a href="{{route('about')}}" class="btn-learn-more">Learn More</a>
          </div>

        </div>

      </div>
    </section><!-- End About Us Section -->

    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients">
      <div class="container" data-aos="zoom-in">

        <div class="owl-carousel clients-carousel">
          <img src="assets/img/clients/client-1.png" alt="">
          <img src="assets/img/clients/client-2.jpg" alt="">
          <img src="assets/img/clients/client-3.png" alt="">
          <!-- <img src="assets/img/clients/client-4.png" alt=""> -->
          <img src="assets/img/clients/client-5.png" alt="">
          <!-- <img src="assets/img/clients/client-6.png" alt="">
          <img src="assets/img/clients/client-7.png" alt="">
          <img src="assets/img/clients/client-8.png" alt=""> -->
        </div>

      </div>
    </section><!-- End Clients Section -->

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
      <div class="container-fluid">

        <div class="row">

          <div class="col-lg-5 align-items-stretch video-box" style='background-image: url("{{asset('img/for-web.jpg')}}");' data-aos="fade-right">
          
          </div>

          <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch" data-aos="fade-left">

            <div class="content">
              <h3>Our <strong>Services</strong></h3>
              <p>Eurasian Consulting Agency Ltd provides foreign students with full information about Ukrainian System of Higher Education and offers honest, transparent and professional solutions from the moment of Application and during the whole period of staying in Ukraine.</p>
			<p>Eurasian Consulting Agency Ltd performs Absolutely Supervision and Individual Care for every single student at all stages includes; Arrival, Airport Clearance, Pickup, Transfer to the University Hostel, Arrangement of Accommodation & Settlement in the Hostel, 
        Introductory Trip to University, Registration at University, Visa Extension, Preparation & Submission of Documentation for Resident Permit, Continuous Legal & Personal Assistance during the whole stay in Ukraine. City Explorations</p>
        <a href="{{route('about')}}" class="btn-learn-more" style="margin-bottom:2rem">Learn More</a>
				<!-- <p>We render services in 3 Major Categories, to foreign students willing to study at Ukrainian Universities are listed below:</p> -->
      </div>

            <!-- <div class="accordion-list">
              <ul>
                <li data-aos="fade-up" data-aos-delay="100">
                  <a data-toggle="collapse" class="collapse" href="#accordion-list-1"><span>01</span> PREADMISSION SUPPORT<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-1" class="collapse" data-parent=".accordion-list">
                    <p>
						<ul>
							<li>Prompt replies to your enquiries through E-mail, phone calls, WhatsApp, Instagram, etc.</li>
							<li>Consultation on the Best University Selection for each program</li>
							<li>Expert Advice on selection of appropriate Bachelors, Masters, PG and Ph.D. Programs</li>
							<li>Issuance of Student Invitation letter in 5 working days from any University in Ukraine, Georgie, India & Kyrgyzstan </li>
							<li>Immediate Admission Confirmation Letter from our company with extended details</li>
							<li>Quick Visa Confirmation from the Ministry of Education and Ministry of Foreign Affairs of Ukraine</li>
							<li>Communication with Embassies of Ukraine worldwide to Support Our Applicants’ visa</li>
							<li>Help in buying Cheaper Air Tickets to Ukraine</li>
						</ul>
                    </p>
                  </div>
                </li>

                <li data-aos="fade-up" data-aos-delay="200">
                  <a data-toggle="collapse" href="#accordion-list-2" class="collapsed"><span>02</span> UPON ARRIVAL SUPPORT <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-2" class="collapse" data-parent=".accordion-list">
                    <p>
						<ul>
							<li>Prior to Arrival Accommodation Arrangement at university Hostel (Right after you provide us with flight details)</li>
							<li>Notification to the Airport for Guaranteed Airport Clearance & Entry to Ukraine</li>
							<li>MEET & GREET; Pickup from Airport pick up from all International airports in Ukraine & Transfer to Prearranged University Hostel Accommodation by our staff</li>
							<li>You will be assisted with acquiring a Local SIM Card for your phone immediately upon arrival at the airport.</li>
						</ul>
                    </p>
                  </div>
                </li>

                <li data-aos="fade-up" data-aos-delay="300">
                  <a data-toggle="collapse" href="#accordion-list-3" class="collapsed"><span>03</span> POST ARRIVAL SUPPORT <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-3" class="collapse" data-parent=".accordion-list">
                    <p>
						<ul>
							<li>Assistance in Paying the Tuition fee to the University Bank Account</li>
							<li>Health & Migration Risk Insurance as required in each country</li>
							<li>Medical Check-ups on Arrival</li>
							<li>Assistance in Registration at University, State Migration Department & Issuance of Resident Card</li>
							<li>Assistance in obtaining Student ID card, Hostel card, International Student Card</li>
							<li>Assistance in opening Bank Account</li>
							<li>Providing full support to our students at all occasions</li>
							<li>Following up and Legal + Personal Assistance during stay in Ukraine</li>
						</ul>
                    </p>
                  </div>
                </li>

              </ul>
            </div> -->

          </div>

        </div>

      </div>
    </section><!-- End Why Us Section -->

    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
      <div class="container">
        <div class="row" data-aos="zoom-in">
          <div class="col-lg-12 text-center text-lg-left">
            <h3>Search for Universities and Courses</h3>
          @include('partials.search_form', ['usiversities'=>$universities, 'countries'=>$countries]);
          </div>
          <div class="row d-flex justify-content-center text-center">
              <a class="cta-btn align-middle" href="#">View All Universities</a>
          </div>
        </div>

      </div>
    </section><!-- End Cta Section -->
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">
        <div class="col-lg-3 col-md-6 footer-info">
            <h3>About ECA</h3>
            <p>Euro-Asian Consulting Agency, was set up to provide easy & affordable foreign universities opportunities to Nigerian students. </p>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{url('about')}}">About us</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="{{url('faqs')}}">Faqs</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="{{url('contact')}}">Contact us</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
			  <li><i class="bx bx-chevron-right"></i> <a href="#">Counselling</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">PreAdmission Support</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Arrival Support</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">PostArrival Support</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>Contact Us</h4>
            <p>
              3 Cairo Street, Wuse 2 <br>
              Abuja, Nigeria <br><br>
              <strong>Phone:</strong> 080654777556<br>
              <strong>Email:</strong> info@eurasianconsult.com<br>
            </p>
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy;<?php echo date('Y') ?> <strong><span>ECA</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        Powered by <a href="https://jubileesys.com">Jubilee Systems Ltd</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="ri-arrow-up-line"></i></a>
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src='assets/js/selectize.min.js'></script>
  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>
<script type="text/javascript">
  $(document).ready(function(){
    $('#country').selectize({sortField: 'text'});
  })
</script>
</html>