
  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-none d-lg-flex align-items-center fixed-top topbar-inner-pages">
    <div class="container d-flex align-items-center">
      <div class="contact-info mr-auto">
        <ul>
          <li><i class="icofont-envelope"></i><a href="mailto:info@eurasianconsult.com">info@eurasianconsult.com</a></li>
          <li><i class="icofont-phone"></i><a href="tel:/07040535340">07040535340</a></li>
          <li><i class="icofont-clock-time icofont-flip-horizontal"></i> Mon-Fri 9am - 5pm</li>
        </ul>
      </div>
      <div class="cta">
        <a href="{{route('contact')}}" class="scrollto">Get Started</a>
      </div>
    </div>
  </div>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top header-inner-pages">
    <div class="container d-flex align-items-center">

      <!--<h1 class="logo mr-auto"><a href="#header" class="scrollto">ECA</a></h1>-->
      <!-- Uncomment below if you prefer to use an image logo -->
      <a href="{{url('/')}}" class="logo mr-auto scrollto"><img src="{{asset('img/logo2.png')}}" width="300" height="auto" alt="" class="img-fluid"></a>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="{{ Route::currentRouteNamed('welcome') ? 'active' : ''  }}"><a href="{{url('/')}}">Home</a></li>
          <li class="{{ Route::currentRouteNamed('about') ? 'active' : ''  }}"><a href="{{route('about')}}">About</a></li>
          <li><a href="{{route('search')}}">Universities</a></li>
          <li class=""><a href="">FAQ</a>
            <!-- <ul>
            <li><a href="{{route('university.index')}}">Universities</a></li>
              <li class="drop-down"><a href="#">Courses</a>
                <ul>
                  <li><a href="{{route('university.index')}}">Economics</a></li>
                  <li><a href="{{route('university.index')}}">Sciences</a></li>
                  <li><a href="{{route('university.index')}}">Accountancy</a></li>
                  <li><a href="{{route('university.index')}}">Arts</a></li>
                  <li><a href="{{route('university.index')}}">Medicine</a></li>
                </ul>
              </li>
              <li><a href="{{route('country.index')}}">Countries</a></li>
            <li><a href="{{route('faq')}}">Faq</a></li>
            </ul> -->
          </li>
          <li class="{{ Route::currentRouteNamed('contact') ? 'active' : ''  }}"><a href="{{route('contact')}}">Contact</a></li>

        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->