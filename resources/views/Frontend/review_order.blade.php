
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Go Fresh</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/style.css">

</head>

<body>

    @include('partials.nav')

<div class="container">
    <div class="step-one">
        <h2 class="heading">Shipping To</h2>
    </div>
    <div class="row">
        <form action="{{url('/submit-order')}}" method="post" class="form-horizontal">
            <input type="hidden" name="_token" value="{{csrf_token()}}">

            <input type="hidden" name="users_id" value="{{$shipping_address->users_id}}">
            <input type="hidden" name="users_email" value="{{$shipping_address->users_email}}">
            <input type="hidden" name="name" value="{{$shipping_address->name}}">
            <input type="hidden" name="address" value="{{$shipping_address->address}}">
            <input type="hidden" name="city" value="{{$shipping_address->city}}">
            <input type="hidden" name="state" value="{{$shipping_address->state}}">
            <input type="hidden" name="pincode" value="{{$shipping_address->pincode}}">
            <input type="hidden" name="country" value="{{$shipping_address->country}}">
            <input type="hidden" name="mobile" value="{{$shipping_address->mobile}}">
            <input type="hidden" name="shipping_charges" value="0">
            <input type="hidden" name="order_status" value="success">
            @if(Session::has('discount_amount_price'))
            <input type="hidden" name="coupon_code" value="{{Session::get('coupon_code')}}">
            <input type="hidden" name="coupon_amount" value="{{Session::get('discount_amount_price')}}">
            <input type="hidden" name="grand_total" value="{{$total_price-Session::get('discount_amount_price')}}">
            @else
            <input type="hidden" name="coupon_code" value="NO Coupon">
            <input type="hidden" name="coupon_amount" value="0">
            <input type="hidden" name="grand_total" value="{{$total_price}}">
            @endif

            <div class="col-sm-12">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Address</th>
                                <th>City</th>
                                <th>State</th>
                                <th>Country</th>
                                <th>Pincode</th>
                                <th>Mobile</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{$shipping_address->name}}</td>
                                <td>{{$shipping_address->address}}</td>
                                <td>{{$shipping_address->city}}</td>
                                <td>{{$shipping_address->state}}</td>
                                <td>{{$shipping_address->country}}</td>
                                <td>{{$shipping_address->pincode}}</td>
                                <td>{{$shipping_address->mobile}}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <section id="cart_items">
                    <div class="review-payment">
                        <h2>Review & Payment</h2>
                    </div>
                    <div class="table-responsive cart_info">
                        <table class="table table-condensed">
                            <thead>
                                <tr class="cart_menu">
                                    <td class="image">Item</td>
                                    <td class="description"></td>
                                    <td class="price">Price</td>
                                    <td class="quantity">Quantity</td>
                                    <td class="total">Total</td>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($cart_datas as $cart_data)
                                <?php
                                $image_products = DB::table('product_images')->select('image')->where('product_id', $cart_data->products_id)->first();
                                ?>
                                <tr>
                                    <td class="cart_product">
                                        {{-- <img src="{{$image_product->image}}" alt="" style="width: 100px;"></a> --}}

                                        {{-- @foreach($image_products as $image_product)
                                        <a href="">
                                            <img src="{{url('products/small',$image_product->image)}}" alt="" style="width: 100px;"></a>
                                        @endforeach --}}
                                    </td>
                                    <td class="cart_description">
                                        <h4><a href="">{{$cart_data->product_name}}</a></h4>
                                        <p>{{$cart_data->product_code}} | {{$cart_data->size}}</p>
                                    </td>
                                    <td class="cart_price">
                                        <p>৳{{$cart_data->price}}</p>
                                    </td>
                                    <td class="cart_quantity">
                                        <p>{{$cart_data->quantity}}</p>
                                    </td>
                                    <td class="cart_total">
                                        <p class="cart_total_price">৳ {{$cart_data->price*$cart_data->quantity}}</p>
                                    </td>
                                </tr>
                                @endforeach
                                <tr>
                                    <td colspan="4">&nbsp;</td>
                                    <td colspan="2">
                                        <table class="table table-condensed total-result">
                                            <tr>
                                                <td>Cart Sub Total</td>
                                                <td>৳ {{$total_price}}</td>
                                            </tr>
                                            @if(Session::has('discount_amount_price'))
                                            <tr class="shipping-cost">
                                                <td>Coupon Discount</td>
                                                <td>৳ {{Session::get('discount_amount_price')}}</td>
                                            </tr>
                                            <tr>
                                                <td>Total</td>
                                                <td><span>৳ {{$total_price-Session::get('discount_amount_price')}}</span></td>
                                            </tr>
                                            @else
                                            <tr>
                                                <td>Total</td>
                                                <td><span>৳ {{$total_price}}</span></td>
                                            </tr>
                                            @endif
                                        </table>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="payment-options">
                        <span>Select Payment Method : </span>
                        <span>
                            <label><input type="radio" name="payment_method" value="COD" checked> Cash On Delivery</label>
                        </span>
                        @foreach($cart_datas as $cart_data)
                        <input type="hidden" value="{{ $cart_data->products_id }}" name="ids[]">
                        @endforeach
                        <button type="submit" class="btn btn-primary" style="float: right;">Order Now</button>
                    </div>
                </section>

            </div>
        </form>
    </div>
</div>
<div style="margin-bottom: 20px;"></div>


@include('partials.footer')


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js"
    integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js"
    integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous">
</script>
<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

<!-- isotop javascript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js"
    integrity="sha512-Zq2BOxyhvnRFXu0+WE6ojpZLOU2jdnqbrM1hmVdGzyeCa1DgM3X5Q4A/Is9xA1IkbUeDd7755dNNI/PzSf2Pew=="
    crossorigin="anonymous"></script>

<script src="{{asset('js/main.js')}}"></script>



</body>

</html>