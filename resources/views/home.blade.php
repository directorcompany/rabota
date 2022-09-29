@extends('layouts.app')
@section('content')
<main class="wrapper">
      <section class="user">
        <p>Ваш баланс:</p>
        <div class="user__balance">
          <img src="{{asset('assets/coin.svg')}}" alt="Coin" />
          <h1>0</h1>
          <img src="{{asset('assets/et.svg')}}" alt="Currency" />
        </div>
      </section>
      <section class="products">
        <div class="products__title">
          <h2>Варианты обмена на скидку</h2>
          <p>Инструкция</p>
        </div>
        <div class="products__products">
          <div class="product">
            <div class="product__price">
              <img src="{{asset('assets/coin.svg')}}" alt="Coin" />
              <p>0</p>
              <img src="{{asset('assets/et.svg')}}" alt="Currency" />
            </div>
            <img
              class="product__icon"
              src="{{asset('assets/phone-call.svg')}}"
              alt="Phone call"
            />
            <div class="product__description">
              <p>0</p>
              <p>на звонки ST (x2)</p>
            </div>
            <button class="product__button">Использовать скидку</button>
          </div>
          <div class="product">
            <div class="product__price">
              <img src="./assets/coin.svg" alt="Coin" />
              <p>0</p>
              <img src="./assets/et.svg" alt="Currency" />
            </div>
            <img
              class="product__icon"
              src="./assets/special-course.svg"
              alt="Special course"
            />
            <div class="product__description">
              <p>0</p>
              <p>на спецкурс</p>
            </div>
            <button class="product__button">Использовать скидку</button>
          </div>
          <div class="product">
            <div class="product__price">
              <img src="{{asset('assets/coin.svg')}}" alt="Coin" />
              <p>0</p>
              <img src="{{asset('assets/et.svg')}}" alt="Currency" />
            </div>
            <img class="product__icon" src="{{asset('assets/course.svg')}}" alt="Course" />
            <div class="product__description">
              <p>0</p>
              <p>на курс</p>
            </div>
            <button class="product__button">Использовать скидку</button>
          </div>
          <div class="product">
            <div class="product__price">
              <img src="{{asset('assets/coin.svg')}}" alt="Coin" />
              <p>0</p>
              <img src="{{asset('assets/et.svg')}}" alt="Currency" />
            </div>
            <img class="product__icon" src="{{asset('assets/course.svg')}}" alt="Course" />
            <div class="product__description">
              <p>0</p>
              <p>на курс</p>
            </div>
            <button class="product__button">Использовать скидку</button>
          </div>
        </div>
      </section>
    </main>
    @endsection