<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>BBN-BET</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
    />
    <link
      rel="stylesheet"
      href="https://unpkg.com/swiper/swiper-bundle.min.css"
    />

    <link rel="stylesheet" href="{{asset("assets/css/index.css")}}" />
    <link rel="stylesheet" href="{{asset("assets/css/side-nav.css")}}" />
    <link rel="stylesheet" href="{{asset("assets/css/swiper-bundle.css")}}" />
    <link rel="stylesheet" href="{{asset("assets/font-awesome-4.7.0/css/font-awesome.min.css")}}" />
    <link rel="stylesheet" href="{{asset("assets/font-awesome-4.7.0/css/font-awesome.css")}}" />
    
    <style>
      #particles-js {
        position: absolute;
       right: 0;
       top: 0;
        
        height: 100%;
       
      }
    </style>
  </head>
  <body>
    <!-- preloader -->
    <div id="preloader">
      <p>B</p>
    </div>
    <!-- preloader ends -->
    <!-- header-section -->
    <header>
      <!-- navigation-bar -->
      <div id="particles-js"></div>
      <nav>
        <div class="logo"><a href="{{route('index')}}">BBN-BET</a></div>
        <input type="checkbox" id="click" />
        <label for="click" class="menu-btn">
          <i class="fas fa-bars"></i>
        </label>
        <ul>
          <li ><a href="{{route('register')}}" class="active">JOIN NOW</a></li>
          <li><a href="{{route('login')}}">LOGIN </a></li>
          
        </ul>
      </nav>

      <!-- navigation-bar -->
      <img src="{{asset("assets/images/th-354372434 1.png")}}" alt="bg-imag" id="particles-js"/>
      <div class="header-text">
        <div class="text-sep">
          <span></span>
          <h2>who are you rooting to win?</h2>
        </div>

        <p>who are you betting on?</p>
        <button>GET STARTED</button>
      </div>

      <div class="float-button">
        <ul>
          <a href="#"><li>bet live events</li></a>
          <a href="#"><li>weekly bet</li></a>
          <a href="#"><li>other bets</li></a>
        </ul>
        <!-- <button>bet live event</button><button>weekly bet</button
        ><button>other bet</button> -->
      </div>
    </header>
    <!-- header-section -->



    @yield('body')



    <!-- footer -->
    <footer>
        <nav class="footer-nav">
          <ul class="footer-nav-item">
            <li class="footer-nav-list">
              <a href="{{route('index')}}">HOME</a>
              <!-- second navigation layer -->
              <ul>
                <li>
                  <a href="{{route('index')}}"
                    >CONTACT-US</a>
                </li>
                <li>
                  <a href="{{route('index')}}"
                    >ABOUT-US</a>
                </li>
                <li>
                  <a href="{{route('index')}}"
                    >RESULTS</a>
                </li>
                <li>
                  <a href="{{route('index')}}"
                    >TERMS AND CONDITIONS</a>
                </li>
                <li>
                  <a href="{{route('index')}}"
                    >RESPONSIBLE GAMBLING</a>
                </li>
                <li>
                  <a href="{{route('index')}}"
                    >PRIVACY</a>
                </li>
              </ul>
            </li>
           
            <!-- <li class="footet-nav-list"><a href="#">FAQ</a></li> -->
            <li class="footer-nav-list">
              Newsletter
              <div class="news-letter-box">
                <form>
                  <label class="newsletter-label" for="newsletter"
                    >Join Our News Letter</label
                  >
                  <input
                    class="newsletter-input"
                    type="text"
                    id="newsletter"
                    name="newsletter"
                    placeholder="Enter E-mail Address"
                  />
                  <button class="join-button" type="submit">
                    <a href="#">Join</a>
                  </button>
                </form>
              </div>
            </li>
          </ul>
        </nav>
        <small class="footer-copyright">@BBN NAIJA BETTING</small>
      </footer>
      <div class="bet-click" id="bet">
        <div class="bet-circle">0</div>
        betslip
      </div>
      <div class="backdrop"></div>
      <!-- footer -->
      <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
  
      <script src="{{asset("assets/js/index.js")}}"></script>
      <script src="{{asset("assets/js/swiper.js")}}"></script>
      <script src="{{asset("assets/js/particles.min.js")}}"></script>
      <script src="{{asset("assets/js/app.js")}}"></script>
      <script src="{{asset("assets/js/dashboard.js")}}"></script>
    </body>
  </html>
  
