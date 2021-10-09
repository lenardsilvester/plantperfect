@extends('layouts.layouts')

@section('content')

<div class="cart-container">
    <div class="cart-content">
        <h4>Your shopping cart.</h4>
  
        <table>
            <tr>
                <th>Plant</th>
                <th>Price</th>
            </tr>

@foreach ($cart as $item)
<tr>
    <td>
        <b>{{ $item->name }}</b>
    </td>

    <td>
        &euro; {{ $item->price }}
    </td>

    <td>
        <form id="" action="" method="post">
        <input type="hidden" name="cart-id" value="" />

        <button class="delete-btn" form="" type="submit" name="submit">
            Delete.
        </button>

        </form>
    </td>
</tr>
@endforeach

        </table>

        <p>Total price = <b>&euro; {{ $total_price->total }}</b>.</p>

        <br />

        <a class="btn" href="home">
            Go to checkout.
        </a>

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