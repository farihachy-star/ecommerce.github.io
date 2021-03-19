@extends('Frontend.master')

@section('content')
@include('partials.nav')


<!-- Product -->

<section class="main" style="height: 100vh; margin-top:200px">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        @php
                        $i = 1;
                        @endphp
                        @foreach ($product->images as $image)
                        <div class="product-item carousel-item {{$i == 1 ? 'active':''}}">
                            <img class="d-block w-100" src="{{ asset('img/' .$image->image) }}" alt="imgg">
                        </div>
                        @php
                        $i++;
                        @endphp
                        @endforeach
                        {{-- <div class="carousel-item">
                            <img class="d-block w-100" src="{{ asset('img/2.jpg') }}" alt="imgg">
                        </div> --}}
                        {{-- <div class="carousel-item">
                            <img class="d-block w-100" src="{{ asset('img/3.jpg') }}" alt="imgg">
                        </div> --}}
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <form action="/addToCart" method="post" role="form">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <input type="hidden" name="products_id" value="{{$product->id}}">
                    <input type="hidden" name="product_name" value="{{$product->title}}">
                    <input type="hidden" name="price" value="{{$product->price}}" id="dynamicPriceInput">
                    <div class="widget">

                        @if(Session::has('message'))
                        <div class="alert alert-success text-center" role="alert">
                            {{Session::get('message')}}
                        </div>
                    @endif


                        <h3>{{ $product->title}}</h3>
                        <h3>{{ $product->price}} Taka
                            <span class="badge badge-success">
                                {{$product->quantity < 1 ? 'No Item is Available' : $product->quantity. ' item is in stock' }}
                            </span>
                        </h3>
                        <hr>
                    </div>
                    <div class="product_description">
                        {{ $product->description }}
                    </div>
                    <br>
                    <br>


                    <div class="cart_quantity_button">
                        <label>Quantity:</label>
                        <input style="width:40px;" type="number" name="quantity" value="1" id="inputStock" /> kg
                        {{-- @if($cart_data->quantity>1)
                        <a class="cart_quantity_down"> - </a>
                    @endif --}}
                    </div>
                    <div class="widget">
                        @if($product->quantity >0)

                        <button type="submit" class="btn btn-warning add_cart font-size-12" id="buttonAddToCart">
                            <i class="fa fa-shopping-cart"></i>
                            Add to cart
                        </button>
                        @endif
                    </div>
                </form>
            </div>
        </div>
    </div>

</section>

@include('partials.footer')