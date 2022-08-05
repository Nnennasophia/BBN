<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard</title>
    <link
      rel="stylesheet"
      href="{{asset("assets/font-awesome-4.7.0/css/font-awesome.min.css")}}"
    />
    <link rel="stylesheet" href="{{asset("assets/css/index.css")}}" />
    <link rel="stylesheet" href="{{asset("dashboard/dashb.css")}}" />

  </head>
  <body>
    <!-- preloader -->
    <div id="preloader">
      <p>B</p>
    </div>
    <!-- preloader ends -->
    <nav>
      <a href="../index.html"><div class="logo">BBN~BET</div></a>
      <div class="logo-sib">
        <div class="profile-info">
          <img
            src="{{asset("assets/images/Ellipse 1.png")}}"
            width="60px"
            style="display: inline"
            alt=""
          />
          <figure class="profile-figure">
            <h3 id="user">David <i class="fa fa-caret-down"></i></h3>
            <ul class="user-drop">
              <span class="drop" id="e1">
                <a href="#">
                  <li>
                    widthdraw
                    <i
                      class="fa fa-chevron-right"
                      id="fa"
                      aria-hidden="true"
                    ></i></li
                ></a>
                <aside class="menu" id="e1">
                  <a href="#">pending widthrawals</a>
                  <a href="{{route('withdraw')}}">widthraw funds</a>
                </aside>
              </span>

              <a href="{{route('deposit')}}"><li>deposit</li></a>

              <a href="{{route('history')}}"><li>transaction history</li></a>

              <a href="{{route('bets')}}">
                <li>
                  my bets
                  <i class="fa fa-chevron-right" aria-hidden="true"></i></li
              ></a>

              <a href="{{route('kyc')}}"><li>kyc</li></a>

              <a href="{{route('settings')}}">
                <li>
                  settings
                  <i class="fa fa-chevron-right" aria-hidden="true"></i></li
              ></a>

              <a href="#"><li>log out</li></a>
            </ul>
          </figure>
        </div>
      </div>
    </nav>



    @yield('body')




    <footer>
        <nav class="footer-nav">
          <ul class="footer-nav-item">
            <li class="footer-nav-list">
              <a href="#">HOME</a>
              <!-- second navigation layer -->
              <ul>
                <li>
                  <a href="#">CONTACT-US</a>
                </li>
                <li>
                  <a href="#">ABOUT-US</a>
                </li>
                <li>
                  <a href="#">RESULTS</a>
                </li>
                <li>
                  <a href="#">TERMS AND CONDITIONS</a>
                </li>
                <li>
                  <a href="#">RESPONSIBLE GAMBLING</a>
                </li>
                <li>
                  <a href="#">PRIVACY</a>
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
      <div class="backdrop infodrop"></div>
      <script src="{{asset("assets/js/dashboard.js")}}"></script>
      <script>
        // for dashboard nav
        let Iclass = document.querySelectorAll(".fa-chevron-right");
        let drop = document.querySelectorAll(".drop");
        let menu = document.querySelectorAll(".menu");
  
        drop.forEach((drops) => {
          drops.addEventListener("click", () => {
            menu.forEach((menus) => {
              if (drops.id == menus.id) {
                menus.classList.toggle("block");
                Iclass.forEach((classy) => {
                  // classy.style.transform = "rotate3d(0, 0, 1, 90deg)";
                });
              }
            });
          });
        });
  
        let user = document.querySelector("#user");
        let profileDrop = document.querySelector(".user-drop");
        let betslip = document.querySelector(".betslip");
        user.addEventListener("click", () => {
          profileDrop.classList.toggle("profile-drop");
        });
        let betId = document.querySelector(".bet-click");
        let betAc = document.querySelector(".infodrop");
        betAc.addEventListener("click", () => {
          betId.style.display = "block";
          betAc.style.display = "none";
          betslip.style.display = "none";
        });
  
        // increase in betslip
        let down = document.querySelector(".alert-first");
        let up = document.querySelector(".alert-sec");
        let add = 0;
        let increase = document.querySelector(".alertp");
        up.addEventListener("click", () => {
          increase.innerHTML = ++add;
        });
        down.addEventListener("click", () => {
          increase.innerHTML = --add;
        });
      </script>
      <script src="{{asset("assets/js/index.js")}}"></script>
    </body>
  </html>
  <!-- drops.addEventListener("mouseleave", () => {
    menus.style.display = "none";
    Iclass.style.transform = "rotate3d(0, 0, 1, 0deg)";
  }); -->
  