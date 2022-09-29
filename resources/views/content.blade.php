
@extends('layouts.app')
@section('content')
<main class="wrapper">
      <section class="user">
        <p>Ваш баланс:</p>
        <div class="user__balance">
          <img src="{{asset('assets/coin.svg')}}" alt="Coin" />
          <h1>{{$count}}</h1>
          <img src="{{asset('assets/et.svg')}}" alt="Currency" />
        </div>
      </section>
      <section class="products">
        <div class="products__title">
          <h2>Варианты обмена на скидку</h2>
          <p>Инструкция</p>
          @php
          $c=0;
          @endphp
        </div>
        <div class="products__products">
          @foreach($products as $product)

        <div class="product">
            <div class="product__price">
              <img src="{{asset('assets/coin.svg')}}" alt="Coin" />
              <p>{{$product->price}}</p>
              <img src="{{asset('assets/et.svg')}}" alt="Currency" />
            </div>
            <img
              class="product__icon"
              src="{{asset('assets')}}/{{$img[$c++]}}"
              alt="Phone call"
            />
            <div class="product__description">
              <p>{{substr($product->description,0,3)}}</p>
              <p>{{substr($product->description,3,strlen($product->description))}}</p>
            </div>
            @if(in_array($product->id,$g))
            <button class="btn btn-success text-white">Уже использовано</button>
            @else
            <a href="{{route('name',['name'=>request()->username,'prod'=>$product->id])}}" class="btn btn-warning">Использовать скидку</a>
            @endif
          </div>
          @endforeach
        </div>
      </section>
    </main>
    @endsection