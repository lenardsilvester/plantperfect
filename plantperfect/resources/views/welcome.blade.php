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
        <img class="content-image" src="https://cdn.shopify.com/s/files/1/0761/9483/products/scindapsus-pictus-15-sierpot.png?v=1627917002" alt="">

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
      check out our plants!
    </a>
  </span>
</header>

<div id="catalog" class="item-container">

@foreach ($plants as $plant)

<div class="item-column">
  <div class="item-cards">
    <div class="item-content">

      <img class="content-image" src="{{ $plant->image }}" alt="{{ $plant->name }}">

      <h4>
        {{ $plant->name }}
      </h4>

      <p>
        {!! $plant->bio !!}
      </p>

      <br />
      <br />
      
  <a class="btn" href="{{ route('plant', $plant->id) }}">
    View {{ $plant->name }}
  </a>

  </div>
</div>
</div>

@endforeach

</div>

@endsection