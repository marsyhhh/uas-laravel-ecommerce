@extends('page.app')

@section ('content')
    <!-- Hero Section Begin -->
    <section class="hero">
        <div class="hero__slider owl-carousel">
          @foreach ($banner as $b)
          <div class="hero__items set-bg" data-setbg="banner/{{$b->image}}">
            <div class="container">
              <div class="row">
                <div class="col-xl-5 col-lg-7 col-md-8">
                  <div class="hero__text">
                    <h2>{{$b->title}}</h2>
                    <p>{{$b->description}}</p>
                    <a href="/shop" class="primary-btn">Shop now</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </section>
      <!-- Hero Section End -->
      <!-- Product Section Begin -->
      <section class="product spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <ul class="filter__controls">
                        <li class="active" data-filter="*">New Product</li>
                    </ul>
                </div>
            </div>
            <div class="row product__filter">
              @foreach ($product as $product)
                <div class="col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6 mix new-arrivals">
                    <div class="product__item">
                      <a href="{{url('detailShop', $product->id)}}"><div class="product__item__pic set-bg" data-setbg="product/{{$product->image}}"></div></a>
                        <div class="product__item__text">
                            <h6>{{$product->title}}</h6>
                            <a href="https://api.whatsapp.com/send/?phone=628996914990&text&type=phone_number&app_absent=0" class="add-cart">Buy via Whatsapp</a>
                            <h5>${{$product->price}}</h5>
                        </div>
                    </div>
                </div>
              @endforeach
            </div>
        </div>
    </section>
    <!-- Product Section End -->
@endsection