@extends('layouts.spacedcustomlayout')

@section('body')





 <!-- body -->
 <div class="swiper mySwiper">
  <div class="swiper-wrapper slide-cont">
    <div class="swiper-slide">
      <img src="{{asset("assets/images/Rectangle 79.png")}}" alt="icon" />
      <div class="text">
        <h3>sasha has been evicted</h3>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam
          quaerat voluptatem tenetur veniam, maiores quam. Ratione delectus
          quasi porro?
        </p>
      </div>
    </div>
    <div class="swiper-slide">
      <img src="{{asset("assets/images/Rectangle 79.png")}}" alt="icon" />
      <div class="text">
        <h3>sasha has been evicted</h3>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam
          quaerat voluptatem tenetur veniam, maiores quam. Ratione delectus
          quasi porro?
        </p>
      </div>
    </div>
    <div class="swiper-slide">
      <img src="{{asset("assets/images/Rectangle 79.png")}}" alt="icon" />
      <div class="text">
        <h3>sasha has been evicted</h3>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam
          quaerat voluptatem tenetur veniam, maiores quam. Ratione delectus
          quasi porro?
        </p>
      </div>
    </div>
  </div>
  <div class="swiper-button-next"></div>
  <div class="swiper-button-prev"></div>
  <div class="swiper-pagination"></div>
</div>
<!-- body -->
<div class="grid-content">
  <div class="grid-items">
    <div class="grid-kid">
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
    <div class="grid-kid kid-sec">
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
    <div class="grid-kid kid-third">
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
      <div class="bet-login">
        <div class="log">
          <a href="">bbn-bet</a>
          <svg
            xmlns="http://www.w3.org/2000/svg"
            class="h-6 w-6 fill"
            fill="none"
            viewBox="0 0 24 24"
            stroke="currentColor"
            stroke-width="2"
          >
            <path
              stroke-linecap="round"
              stroke-linejoin="round"
              d="M19 9l-7 7-7-7"
            />
          </svg>
        </div>
        <div class="login-bet">
          <a href="{{route('login')}}">login</a>||
          <a href="{{route('register')}}">Register</a>
        </div>
      </div>
      <form action="#">
        <input type="text" /><br />
        <button type="submit">Check slip</button>
      </form>
    </div>
    <div class="grid-updates">
      <div class="update-title">
        <h3>Updates</h3>
        <a href="#">See All</a>
      </div>
      <hr />
      <div class="update-news">
        <figure>
          <img src="{{asset("assets/images/Rectangle 78.png")}}" alt="icon" />
          <div class="text">
            <h3>sasha has been evicted</h3>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit.
              Magnam quaerat voluptatem tenetur veniam, maiores quam.
              Ratione delectus quasi porro?
            </p>
            <p class="ancho"><a href="#">Read more</a></p>
          </div>
        </figure>
        <figure>
          <img src="{{asset("assets/images/Rectangle 79.png")}}" alt="icon" />
          <div class="text">
            <h3>sasha has been evicted</h3>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit.
              Magnam quaerat voluptatem tenetur veniam, maiores quam.
              Ratione delectus quasi porro?
            </p>
            <p class="ancho"><a href="#">Read more</a></p>
          </div>
        </figure>
        <figure>
          <img src="{{asset("assets/images/Rectangle 79.png")}}" alt="icon" />
          <div class="text">
            <h3>sasha has been evicted</h3>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit.
              Magnam quaerat voluptatem tenetur veniam, maiores quam.
              Ratione delectus quasi porro?
            </p>
            <p class="ancho"><a href="#">Read more</a></p>
          </div>
        </figure>
      </div>
    </div>
    <!-- updates ends here -->

    <div class="contact-info">
      <h3>CONTACT US</h3>
      <hr />
      <div class="certification"></div>
    </div>
  </div>
  <!-- second grid item ends here -->
</div>
<!-- body ends here -->





    
@endsection