@extends('layouts.customlayout')

@section('body')



    <!-- navigation-bar -->
    <img src="{{asset("assets/images/th-354372434 1.png")}}" alt="bg-imag" />
    <div class="form">
      <h2>LOGIN</h2>
      <form action="{{route('login')}}" method="POST">
        @csrf
       
        <label for="email">Email</label>
        <input type="email"
        class="email-input input @error('email') is-invalid @enderror"
        id="email"
        name="email"
        value="{{ old('email') }}" required autocomplete="email" autofocus
        />

        @error('email')
        <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
        </span>
      @enderror
        
          <figure>
            <label for="password">Password</label>
            <input type="password"
            class="password-input input @error('password') is-invalid @enderror"
            id="password"
            name="password" required autocomplete="current-password"
            />

            @error('password')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
            @enderror
          </figure>
          
          
       
        <div class="form-button-grid">
          <p><a href="{{route('password.update')}}">Forgot password?</a></p>
          <button href="{{route('register')}}" type="submit">SIGN IN</button>
        </div>
      </form>
    </div>
  </header>
  <!-- header-section -->

    
@endsection