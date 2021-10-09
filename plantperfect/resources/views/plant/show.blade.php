@extends('layouts.layouts')

@section('content')

<div class="item-column">
    <div class="item-cards">
        <div class="item-content">
            <img class="content-image" src="{{ $plant->image }}" alt="{{ $plant->name }}">
            <h4>{{ $plant->name }}</h4>
            <p>{!! $plant->bio !!}</p>

            <br />
            <br />

            <form action="{{ route('cart.store') }}" method="post">
              @csrf
              <input type="hidden" name="plant_id" value="{{ $plant->id }}">

              <button type="submit" class="btn">Add to cart &euro;{{ $plant->price }}.</button>
            </form>
   
        </div>
    </div>
</div>

<header>
    <span class="logo">
      <a href="#catalog">
      </a>
    </span>
</header>

  <header>
    <span class="logo">
      <a href="#catalog">
      </a>
    </span>
  </header>

<header>
    <span class="logo">
      <a href="#catalog">
        check out more plants!
      </a>
    </span>
  </header>
  
  <div id="catalog" class="item-container">
  
  @foreach ($catalog as $item)
  
  <div class="item-column">
    <div class="item-cards">
      <div class="item-content">
  
        <img class="content-image" src="{{ $item->image }}" alt="{{ $item->name }}">
  
        <h4>
          {{ $item->name }}
        </h4>
  
        <p>
          {!! $item->bio !!}
        </p>
  
        <br />
        <br />
        
    <a class="btn" href="{{ route('plant', $item->id) }}">
      View {{ $item->name }}
    </a>
  
    </div>
  </div>
  </div>
@endforeach

</div>

@endsection