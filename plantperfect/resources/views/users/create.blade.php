@extends('layouts.layouts')

@section('content')
<div class="login-container">
    <div class="login-form">
  
      <h4>
        <i class="bi bi-person-fill"></i> Register.
      </h4>
  
      <br />

      <form id="register" action="{{ route('user.store') }}" method="post">
        @csrf

        <p>Full name</p>
        <input type="name" name="name" placeholder="Your full name." value="{{ old('name') }}">
        @error('name')
            <p><i class="bi bi-exclamation-circle-fill"></i> {{ $message }}</p>
        @enderror
  
        <p>Username</p>
        <input type="name" name="username" placeholder="Your username." value="{{ old('username') }}">
        @error('username')
            <p><i class="bi bi-exclamation-circle-fill"></i> {{ $message }}</p>
        @enderror
  
        <p>Email</p>
        <input type="email" name="email" placeholder="Your email." value="{{ old('email') }}">
        @error('email')
            <p><i class="bi bi-exclamation-circle-fill"></i> {{ $message }}</p>
        @enderror
  
        <p>Password</p>
        <input type="password" name="password" placeholder="Your password.">
        @error('password')
            <p><i class="bi bi-exclamation-circle-fill"></i> {{ $message }}</p>
        @enderror
  
        <p>Repeat password</p>
        <input type="password" name="password_confirmation" placeholder="Repeat your password.">
  
        <br />
  
        <button class="btn" type="submit" name="submit">
          Register.
        </button>
  
      </form>

    </div>
</div>

<br />

@endsection