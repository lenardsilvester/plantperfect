@extends('layouts.layouts')

@section('content')
<div class="login-container">
    <div class="login-form">
  
      <h4>
        <i class="bi bi-person-fill"></i> Login.
      </h4>
  
      <br />

      @error('status')
            <p><i class="bi bi-exclamation-circle-fill"></i> {{ $message }}</p>
            <br />
      @enderror

      <form id="login" action="{{ route('user.authenticate') }}" method="post">
        @csrf

        <p>Email</p>
        <input type="email" name="email" placeholder="Your email" value="{{ old('email') }}">
        @error('email')
            <p><i class="bi bi-exclamation-circle-fill"></i> {{ $message }}</p>
        @enderror
  
        <p>Password</p>
        <input type="password" name="password" placeholder="Your password.">
        @error('password')
            <p><i class="bi bi-exclamation-circle-fill"></i> {{ $message }}</p>
            <br />
        @enderror
  
        <p>
          Dont have an account?<br />
          Make an account <a class="register-link" href="register">here</a>.
         </p>
  
        <br />
  
        <button class="btn" type="submit" name="submit">
          Login.
        </button>
  
      </form>
  
    </div>
</div>  
@endsection