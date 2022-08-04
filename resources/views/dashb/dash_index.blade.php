@extends('dashblayout.dashlayout')

@section('body')



<!-- wrapper-side -->
<div class="wrapper-side">
    <div class="sidenav">
      <div class="profile">
        <img src="{{asset("assets/images/Ellipse 1.png")}}" alt="profile" />
        <h3>David</h3>
        <p>USER ID : <span>332114567</span></p>
      </div>
      <hr />

      <ul>
        <a href="#"> <li class="fa fa-user">Account</li> </a>
        <hr />
        <span class="drop" id="1">
          <a href="#">
            <li class="fa fa-download">
              widthdraw
              <i
                class="fa fa-chevron-right"
                id="fa"
                aria-hidden="true"
              ></i></li
          ></a>
          <aside class="menu" id="1">
            <a href="#">pending widthrawals</a>
            <a href="withdraw.html">widthraw funds</a>
          </aside>
        </span>
        <hr />
        <a href="./deposit.html"><li class="fa fa-upload">deposit</li></a>
        <hr />
        <a href="history.html"
          ><li class="fa fa-usd">transaction history</li></a
        >
        <hr />
        <a href="bets.html">
          <li class="fa fa-flag-checkered">
            my bets <i class="fa fa-chevron-right" aria-hidden="true"></i></li
        ></a>
        <hr />
        <a href="./kyc.html"><li class="fa fa-credit-card-alt">kyc</li></a>
        <hr />
        <a href="./settings.html">
          <li class="fa fa-cogs">
            settings
            <i class="fa fa-chevron-right" aria-hidden="true"></i></li
        ></a>
        <hr />
        <a href="#"><li class="fa fa-sign-out">log out</li></a>
        <hr />
      </ul>
    </div>
    <!-- end of wrapper-side -->
    <div class="grid-content dash-content">
      <div class="grid-items">
        <div class="first-flex first-flex2">
          <h2>who will be head of house this week?</h2>
          <img src="{{asset("assets/images/dashbg.png")}}" alt="" />
        </div>
        <div class="grid-kid-btn">
          <button class="btn-kid" id="e1">bet live</button
          ><button id="e2" class="btn-kid2">weekly</button
          ><button class="btn-kid3" id="e3">challenges</button>
        </div>
        <div class="grid-kid kid-first" id="e1">
          <div class="grid-contain">
            <h3>who will win the pepsi contest</h3>
            <div class="button-wrap">
              <div>
                cynthia <br />
                23
              </div>
              <div>
                romeo <br />
                23
              </div>
              <div>
                solomon <br />
                23
              </div>
            </div>
            <a class="link" href="#">see all</a>
          </div>
          <div class="grid-contain">
            <h3>who will win the pepsi contest</h3>
            <div class="button-wrap">
              <div>
                cynthia <br />
                23
              </div>
              <div>
                romeo <br />
                23
              </div>
              <div>
                solomon <br />
                23
              </div>
            </div>
            <a class="link" href="#">see all</a>
          </div>
          <div class="grid-contain">
            <h3>who will win the pepsi contest</h3>
            <div class="button-wrap">
              <div>
                cynthia <br />
                23
              </div>
              <div>
                romeo <br />
                23
              </div>
              <div>
                solomon <br />
                23
              </div>
            </div>
            <a class="link" href="#">see all</a>
          </div>
        </div>
        <div class="grid-kid kid-sec" id="e2">
          <div class="first-flex">
            <h3>challenges</h3>
            <a href="#">see all</a>
          </div>
          <hr />
          <div class="grid-contain">
            <h3>who will win the pepsi contest</h3>
            <div class="button-wrap">
              <div>
                cynthia <br />
                23
              </div>
              <div>
                romeo <br />
                23
              </div>
              <div>
                solomon <br />
                23
              </div>
            </div>
            <a class="link" href="#">see all</a>
          </div>
          <div class="grid-contain">
            <h3>who will win the pepsi contest</h3>
            <div class="button-wrap">
              <div>
                cynthia <br />
                23
              </div>
              <div>
                romeo <br />
                23
              </div>
              <div>
                solomon <br />
                23
              </div>
            </div>
            <a class="link" href="#">see all</a>
          </div>
          <div class="grid-contain">
            <h3>who will win the pepsi contest</h3>
            <div class="button-wrap">
              <div>
                cynthia <br />
                23
              </div>
              <div>
                romeo <br />
                23
              </div>
              <div>
                solomon <br />
                23
              </div>
            </div>
            <a class="link" href="#">see all</a>
          </div>
        </div>
        <div class="grid-kid kid-third" id="e3">
          <div class="first-flex">
            <h3>tasks</h3>
            <a href="#">see all</a>
          </div>
          <hr />

          <div class="grid-contain">
            <h3>who will win the pepsi contest</h3>
            <div class="button-wrap">
              <div>
                cynthia <br />
                23
              </div>
              <div>
                romeo <br />
                23
              </div>
              <div>
                solomon <br />
                23
              </div>
            </div>
            <a class="link" href="#">see all</a>
          </div>
          <div class="grid-contain">
            <h3>who will win the pepsi contest</h3>
            <div class="button-wrap">
              <div>
                cynthia <br />
                23
              </div>
              <div>
                romeo <br />
                23
              </div>
              <div>
                solomon <br />
                23
              </div>
            </div>
            <a class="link" href="#">see all</a>
          </div>
        </div>
      </div>

      <!-- second grid item -->
      <div class="grid-items">
        <div class="betslip">
          <div class="bet-login bet-check">
            <a href="#">check bet</a>
            <a href="#">betslip</a>
          </div>
          <form action="#">
            <input type="text" /><br />
            <button type="submit">Check slip</button>
          </form>
        </div>
        <div class="grid-updates">
          <div class="update-title">
            <!-- <h3>Updates</h3>
            <a href="#">See All</a> -->
          </div>
          <!-- <hr> -->
          <div class="update-news">
            <!-- <figure>
              <img src="./assets/images/Rectangle 78.png" alt="icon" />
              <div class="text">
                <h3>sasha has been evicted</h3>
                <p>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Magnam quaerat voluptatem tenetur veniam, maiores quam.
                  Ratione delectus quasi porro?
                </p>
                <p class="ancho"><a href="#">Read more</a></p>
              </div>
            </figure> -->
            <!-- <figure>
                <img src="./assets/images/Rectangle 79.png" alt="icon" />
                <div class="text">
                  <h3>sasha has been evicted</h3>
                  <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Magnam quaerat voluptatem tenetur veniam, maiores quam.
                    Ratione delectus quasi porro?
                  </p>
                  <p class="ancho"><a href="#">Read more</a></p>
                </div>
              </figure> -->
            <!-- <figure>
                <img src="./assets/images/Rectangle 79.png" alt="icon" />
                <div class="text">
                  <h3>sasha has been evicted</h3>
                  <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Magnam quaerat voluptatem tenetur veniam, maiores quam.
                    Ratione delectus quasi porro?
                  </p>
                  <p class="ancho"><a href="#">Read more</a></p>
                </div>
              </figure> -->
          </div>
        </div>
        <!-- updates ends here -->
        <!-- contact-info -->
        <div class="contact-info">
          <div class="certification">
            <h3>current betslip</h3>
            <div class="cert-info">
              <p>erica to win pepsi car</p>
              <h5>17.5</h5>
            </div>
            <div class="cert-info">
              <p>erica to win pepsi car</p>
              <h5>17.5</h5>
            </div>
            <div class="cert-info">
              <p>erica to win pepsi car</p>
              <h5>17.5</h5>
            </div>
            <div class="cert-info">
              <p>erica to win pepsi car</p>
              <h5>17.5</h5>
            </div>
            <figure class="price-alert">
              <p>Amount</p>
              <div class="alert-pic">
                <button class="alert-first">-</button>
                <p class="alertp">0</p>
                <button class="alert-sec">+</button>
              </div>
              <p>5.87</p>
            </figure>
            <figure class="copybet">
              <div width="100px" height="30px">copy bet</div>
              <button>placebet</button>
            </figure>
          </div>
        </div>
        <!-- contact-info -->
      </div>
      <!-- second grid item ends here -->
    </div>
    <script  src="{{asset("assets/js/info.js")}}"></script>
    <!-- body ends here -->
  </div>
    
@endsection