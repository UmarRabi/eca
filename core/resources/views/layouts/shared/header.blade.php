
  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-none d-lg-flex align-items-center fixed-top topbar-inner-pages">
    <div class="container d-flex align-items-center">
      <div class="contact-info mr-auto">
        <ul>
          <li><i class="icofont-envelope"></i><a href="mailto:info@eurasianconsult.com">info@eurasianconsult.com</a></li>
          <li><i class="icofont-phone"></i><a href="tel:/07040535340">0704 052 5240</a></li>
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
          <li class="{{ Route::currentRouteNamed('about') ? 'active' : ''  }}"><a href="{{url('about')}}">About</a></li>
          <li><a href="{{url('search')}}">Universities</a></li>
          <li class=""><a href="{{url('faqs')}}">FAQ</a>
          </li>
          <li class="{{ Route::currentRouteNamed('contact') ? 'active' : ''  }}"><a href="{{route('contact')}}">Contact</a></li>
          @if(auth::user())
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
               {{ Auth::user()->name }}
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#" style="color:black;">University</a>
              <a class="dropdown-item" href="#" style="color:black;">Courses</a>
              <a class="dropdown-item" href="#" style="color:black;">"Faqs</a>
              <div class="dropdown-divider" style="color:black;"></div>
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