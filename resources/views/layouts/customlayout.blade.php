<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>BBN-BET</title>
    <link rel="stylesheet" href="{{asset("assets/css/index.css")}}" />
  </head>
  <body>
    <header class="heading-absolute">
      <!-- navigation-bar -->
      <nav>
        <div class="logo"><a href="{{route('index')}}">BBN-BET</a></div>>
        <input type="checkbox" id="click" />
        <label for="click" class="menu-btn">
          <i class="fas fa-bars"></i>
        </label>
        <ul>
          <li><a href="{{route('register')}}" class="active">JOIN NOW</a></li>
          <li><a href="{{route('login')}}">LOGIN </a></li>
        </ul>
      </nav>


      @yield('body')


      <div class="close"></div>
    <!-- footer -->
    <footer>
      <nav class="footer-nav">
        <ul class="footer-nav-item">
          <li class="footer-nav-list">
            <a href="{{route('index')}}">HOME</a>
            <!-- second navigation layer -->
            <ul>
              <li>
                <a href="{{route('index')}}">CONTACT-US</a>
              </li>
              <li>
                <a href="{{route('index')}}">ABOUT-US</a>
              </li>
              <li>
                <a href="{{route('index')}}">RESULTS</a>
              </li>
              <li>
                <a href="{{route('index')}}">TERMS AND CONDITIONS</a>
              </li>
              <li>
                <a href="{{route('index')}}">RESPONSIBLE GAMBLING</a>
              </li>
              <li>
                <a href="{{route('index')}}">PRIVACY</a>
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
    <!-- footer -->
  </body>
</html>
