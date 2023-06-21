    <!-- Offcanvas Menu Begin -->
    <div class="offcanvas-menu-overlay"></div>
    <div class="offcanvas-menu-wrapper">
        <div class="offcanvas__option">
            <div class="offcanvas__links">
              @auth
                <p>Happy shopping {{Auth::user()->name}} !!</p>
                <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('frm-logout').submit();">Logout</a>    
                <form id="frm-logout" action="{{ route('logout') }}" method="POST" style="display: none;">
                      {{ csrf_field() }} 
                </form>
                @else
                <a href="{{ route('login') }}">Sign in</a>
                @if (Route::has('register'))
                <a href="{{ route('register') }}">Create Account</a>
                @endif
              @endauth
            </div>
        </div>
        <div id="mobile-menu-wrap"></div>
    </div>
    <!-- Offcanvas Menu End -->

<header class="header">
  @if (Route::has('login'))
  <div class="header__top">
      <div class="container">
          <div class="row">
              <div class="col-lg-6 col-md-7">
                  <div class="header__top__left">
                    @auth
                      <p>Happy shopping {{Auth::user()->name}} !!</p>
                    @else
                      <p>Please sign in your account!</p>
                    @endauth
                  </div>
              </div>
              <div class="col-lg-6 col-md-5">
                  <div class="header__top__right">
                      <div class="header__top__links">
                        @auth
                          <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('frm-logout').submit();">Logout</a>    
                          <form id="frm-logout" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }} 
                          </form>
                        @else
                          <a href="{{ route('login') }}">Sign in</a>
                          @if (Route::has('register'))
                          <a href="{{ route('register') }}">Create Account</a>
                          @endif
                        @endauth
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  @endif
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-3">
          <div class="header__logo">
            <a href="./index.html"><img src="img/logo.png" alt="" /></a>
          </div>
        </div>
        <div class="col-lg-2 col-md-2">

        </div>
        <div class="col-lg-7 col-md-7">
          <nav class="header__menu mobile-menu">
            <ul>
              <li><a href="/">Home</a></li>
              <li><a href="/shop">Shop</a></li>
              <li><a href="/companyProfile">Company Profile</a></li>
            </ul>
          </nav>
        </div>
      </div>
      <div class="canvas__open"><i class="fa fa-bars"></i></div>
    </div>
  </header>
  