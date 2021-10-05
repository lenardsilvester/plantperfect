@extends('layouts.layouts')

@section('content')

<div class="container">

  <div class="column">
    <div class="cards">
      <div class="content-card-one">

        @auth
        <h4>
          Welcome back <i class="bi bi-person-fill"></i> {{ Auth::user()->name }}
        </h4>
        @endauth

        @guest
        <h4>
          Welcome to plantperfect.
        </h4>
        @endguest

        <p>
          Find plants that are best suited <br />for you.
        </p>

        <br /><br />
        <img class="content-image" src="assets\image\plant3.png" alt="Yucca.">

        <a class="btn" href="#catalog">
          Start shopping.
        </a>

      </div>
    </div>
  </div>

  <div class="column">
    <div class="cards">
      <div class="content-card-two">

        <h4>
          Our mission.
        </h4>

        <p>
          we at plantperfect want to make living rooms and offices literally green with the most beautiful plants.
        </p>

        <br /><br />

        <a class="btn" href="#catalog">
          Check our catalog.
        </a>

      </div>
    </div>
  </div>
</div>

<header>
  <span class="logo">
    <a href="#catalog">
      Check out our plants!
    </a>
  </span>
</header>

@endsection