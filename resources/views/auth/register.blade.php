@extends('layouts.customlayout')

@section('body')




  <!-- navigation-bar -->
  <img src="{{asset("assets/images/th-354372434 1.png")}}" alt="bg-imag" />

  <div class="form">
    <h2>REGISTER</h2>
    <form action="{{route('register')}}" method="POST">
        @csrf

      <div class="name-grid">
        <figure>
          <label for="name">Name</label>
          <input type="text"
          class="name-input input @error('name') is-invalid @enderror"
          id="name"
          name="name"
          value="{{ old('name') }}" required autocomplete="name" autofocus
          />

          @error('name')
          <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
          </span>
          @enderror
        </figure>


        <figure>
          <label for="phone_number">Phone Number</label>
          <input type="phone"
          class="number-input input"
          id="phone" 
          name="phone" requireda autocomplete="phone"
          />
        </figure>
      </div>


      <label for="email">Email</label>
      <input type="email"
      class="email-input input @error('email') is-invalid @enderror"
      id="email"
      name="email"
      value="{{ old('email') }}" required autocomplete="email"
       />

       @error('email')
       <span class="invalid-feedback" role="alert">
           <strong>{{ $message }}</strong>
       </span>
      @enderror


      <div class="name-grid">
        <figure>
          <label for="password">Password</label>
          <input type="password"
          class="email-input input @error('password') is-invalid @enderror"
          id="password"
          name="password" required autocomplete="new-password" 
          />
        </figure>


        <figure>
          <label for="confirmpassword">Confirm password</label>
          <input type="password"
          class="email-input input"
          id="confirmpassword"
          name="password_confirmation" required autocomplete="new-password" 
           />
        </figure>
        
      </div>
      <div class="form-button-grid">
        <p><a href="{{route('login')}}">Already have an account?</a></p>
        <button href="{{route('register')}}" type="submit">SIGN UP</button>
      </div>
    </form>
  </div>
</header>
<!-- header-section -->





    
@endsection