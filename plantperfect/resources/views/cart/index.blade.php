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

            <p>
                &nbsp;
            </p>

            <a class="btn" href="home">
                Go back to shopping.
            </a>
        @endif

        <table>
            
            @if (count($cart) > 0)
                <tr>
                    <th>Plant. &nbsp;&nbsp;&nbsp;</th>
                    <th>Price. &nbsp;&nbsp;&nbsp;</th>
                </tr>
            @endif

@foreach ($cart as $item)
<tr>
    <td>
        <b>{{ $item->name }}</b> &nbsp;&nbsp;&nbsp;
    </td>

    <td>
        &euro; {{ $item->price }} &nbsp;&nbsp;&nbsp;
    </td>

    <td>
        <form action="{{ route('cart.delete') }}" method="post">
            @csrf
        <input type="hidden" name="cart_id" value="{{ $item->id }}" />

        <button type="submit" class="delete-btn">
            <i class="bi bi-trash-fill"></i>
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
                <i class="bi bi-cart-check-fill"></i> &nbsp;&nbsp;&nbsp;Go to checkout.
            </a>

        @endif

        <p>
            &nbsp;
        </p>

    </div>
</div>

<header>
    <span class="logo">
        <a href="#catalog">
            <i class="bi bi-collection-fill"></i> &nbsp;&nbsp;Check some more plants!
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

        <p>
            <i class="bi bi-tag-fill"></i> &nbsp;&nbsp;&nbsp;Price &bull; &euro;<b>{{ $plant->price }}</b>.
        </p>
  
        <br />
        <br />
        
    <a class="btn" href="{{ route('plant', $plant->id) }}">
        <i class="bi bi-caret-right-fill"></i> &nbsp;&nbsp;&nbsp;{{ $plant->name }}
    </a>
  
    </div>
  </div>
  </div>
  
  @endforeach
  
  </div>

@endsection