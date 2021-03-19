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
        @if(Session::has('message'))
        <div class="alert alert-success text-center" role="alert">
            {{Session::get('message')}}
        </div>
        @endif
        <div class="row">
            <form style="width: 100%;" action="{{url('/submit-checkout')}}" method="post" class="form-horizontal">
                @csrf
                {{-- <div class="col-6 col-md-6 col-sm-offset-1">
                    <div class="login-form">
                        <!--login form-->
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <legend>Billing To</legend>
                        <div class="form-group {{$errors->has('billing_name')?'has-error':''}}">
                            <input type="text" class="form-control" name="billing_name" id="billing_name"
                                value="{{$user_login->name}}" placeholder="Billing Name">
                            <span class="text-danger">{{$errors->first('billing_name')}}</span>
                        </div>
                        <div class="form-group {{$errors->has('billing_address')?'has-error':''}}">
                            <input type="text" class="form-control" value="{{$user_login->address}}"
                                name="billing_address" id="billing_address" placeholder="Billing Address">
                            <span class="text-danger">{{$errors->first('billing_address')}}</span>
                        </div>
                        <div class="form-group {{$errors->has('billing_city')?'has-error':''}}">
                            <input type="text" class="form-control" name="billing_city" value="{{$user_login->city}}"
                                id="billing_city" placeholder="Billing City">
                            <span class="text-danger">{{$errors->first('billing_city')}}</span>
                        </div>
                        <div class="form-group {{$errors->has('billing_state')?'has-error':''}}">
                            <input type="text" class="form-control" name="billing_state" value="{{$user_login->state}}"
                                id="billing_state" placeholder=" Billing State">
                            <span class="text-danger">{{$errors->first('billing_state')}}</span>
                        </div>
                        <div class="form-group">
                            <select style="height: 35px;" name="billing_country" id="billing_country"
                                class="form-control">
                                @foreach($countries as $country)
                                <option value="{{$country->country_name}}"
                                    {{$user_login->country==$country->country_name?' selected':''}}>
                                    {{$country->country_name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group {{$errors->has('billing_pincode')?'has-error':''}}">
                            <input type="text" class="form-control" name="billing_pincode"
                                value="{{$user_login->pincode}}" id="billing_pincode" placeholder=" Billing Pincode">
                            <span class="text-danger">{{$errors->first('billing_pincode')}}</span>
                        </div>
                        <div class="form-group {{$errors->has('billing_mobile')?'has-error':''}}">
                            <input type="text" class="form-control" name="billing_mobile"
                                value="{{$user_login->mobile}}" id="billing_mobile" placeholder="Billing Mobile">
                            <span class="text-danger">{{$errors->first('billing_mobile')}}</span>
                        </div>

                        <span>
                            <input type="checkbox" class="checkbox" name="checkme" id="checkme">Shipping Address same as
                            Billing Address
                        </span>
                    </div>
                    <!--/login form-->
                </div> --}}
                <div class="col-6 col-md-6">
                    <div class="signup-form" style="margin-top: 100px">
                        <!--sign up form-->
                        <legend>Shipping To</legend>
                        <div class="form-group {{$errors->has('shipping_name')?'has-error':''}}">
                            <input type="text" class="form-control" name="shipping_name" id="shipping_name" value=""
                                placeholder="Shipping Name">
                            <span class="text-danger">{{$errors->first('shipping_name')}}</span>
                        </div>
                        <div class="form-group {{$errors->has('shipping_address')?'has-error':''}}">
                            <input type="text" class="form-control" value="" name="shipping_address"
                                id="shipping_address" placeholder="Shipping Address">
                            <span class="text-danger">{{$errors->first('shipping_address')}}</span>
                        </div>
                        <div class="form-group {{$errors->has('shipping_city')?'has-error':''}}">
                            <input type="text" class="form-control" name="shipping_city" value="" id="shipping_city"
                                placeholder="Shipping City">
                            <span class="text-danger">{{$errors->first('shipping_city')}}</span>
                        </div>
                        <div class="form-group {{$errors->has('shipping_state')?'has-error':''}}">
                            <input type="text" class="form-control" name="shipping_state" value="" id="shipping_state"
                                placeholder="Shipping State">
                            <span class="text-danger">{{$errors->first('shipping_state')}}</span>
                        </div>
                        <div class="form-group">
                            <select style="height: 35px;" name="shipping_country" id="shipping_country"
                                class="form-control">
                                @foreach($countries as $country)
                                <option value="{{$country->country_name}}">{{$country->country_name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group {{$errors->has('shipping_pincode')?'has-error':''}}">
                            <input type="text" class="form-control" name="shipping_pincode" value=""
                                id="shipping_pincode" placeholder="Shipping Pincode">
                            <span class="text-danger">{{$errors->first('shipping_pincode')}}</span>
                        </div>
                        <div class="form-group {{$errors->has('shipping_mobile')?'has-error':''}}">
                            <input type="text" class="form-control" name="shipping_mobile" value="" id="shipping_mobile"
                                placeholder="Shipping Mobile">
                            <span class="text-danger">{{$errors->first('shipping_mobile')}}</span>
                        </div>
                        <button type="submit" class="btn btn-primary" style="float: right;">CheckOut</button>
                    </div>
                    <!--/sign up form-->
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