@extends('layouts.layouts')

@section('content')

@if (count($result) > 0)
<header>
    <span class="logo">
      <a href="#catalog">
        Results for &nbsp;&nbsp;<i class="bi bi-search"></i>&nbsp;&nbsp;'{{ $qeury }}'.
      </a>
    </span>
  </header>
@else
<header>
    <span class="logo">
      <a href="#catalog">
        There are no results for &nbsp;&nbsp;<i class="bi bi-search"></i>&nbsp;&nbsp;'{{ $qeury }}'.
      </a>
    </span>
  </header>
@endif



@foreach ($result as $item)
  
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

        <p>
            <i class="bi bi-tag-fill"></i> &nbsp;&nbsp;&nbsp;Price &bull; &euro;<b>{{ $item->price }}</b>.
        </p>
  
        <br />
        <br />
        
    <a class="btn" href="{{ route('plant', $item->id) }}">
        <i class="bi bi-caret-right-fill"></i> &nbsp;&nbsp;&nbsp;{{ $item->name }}
    </a>
  
    </div>
  </div>
  </div>
@endforeach

@endsection