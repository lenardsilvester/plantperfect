@extends('layouts.layouts')

@section('content')

<div class="cart-container">
    <div class="cart-content">
        <h4>Your shopping cart.</h4>

        @if (count($cart) < 1)
            <br />

            <p>Your cart is <b>empty</b>.</p>

            <br />
            <br />

            <a class="btn" href="home">
                Go back to shopping.
            </a>
        @endif

        <table>
            
            @if (count($cart) > 0)
                <tr>
                    <th>Plant</th>
                    <th>Price</th>
                </tr>
            @endif

@foreach ($cart as $item)
<tr>
    <td>
        <b>{{ $item->name }}</b>
    </td>

    <td>
        &euro; {{ $item->price }}
    </td>

    <td>
        <form action="{{ route('cart.delete') }}" method="post">
            @csrf
        <input type="hidden" name="cart_id" value="{{ $item->id }}" />

        <button type="submit" class="delete-btn">
            Delete plant.
        </button>

        </form>
    </td>
</tr>
@endforeach

        </table>

        @if (count($cart) > 0)
            <p>Total price = <b>&euro; {{ $total_price->total }}</b>.</p>

            <br />

            <a class="btn" href="home">
                Go to checkout.
            </a>
        @endif

    </div>
</div>

<header>
    <span class="logo">
        <a href="#catalog">
            check out more of our plants!
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