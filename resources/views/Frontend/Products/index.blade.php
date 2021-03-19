<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>
  
   @include('partials.nav')

  
<!-- Product -->

    <section id="specialitem" style="margin-top: 150px">
        <div class="container">
          
          <h4 class="font-rubik font-size-20">All Items</h4>
         
          <hr>
          <br>
          <div class="grid">
            <div class="row my-5">
            
            @foreach($products as $product)
            
                    <div class="col-md-3 special">
               <div class="grid-items veg  p-4" >
                   
                   {{-- <a href=""><img class="d-block "  src="img/1v.jpg" style="height: 20vh;" alt="First slide"></a> --}}
                   @php $i = 1 @endphp



                   @foreach ($product->images as $image)
                     @if($i > 0)
                     <a href="{!! route ('Products.show', $product->slug) !!}"><img class="d-block "  src="{{ asset('img/'.$image->image)}}" style="height: 20vh;" alt="{{$product->title}}"></a>

                     @endif

                      @php $i-- @endphp
                   @endforeach
                   <div><a href="{!! route ('Products.show', $product->slug) !!}">{{ $product->title}}</a></div>
                   
                   
                   <div class="rating text-warning font-size-12">
                       <span><i class="fas fa-star"></i></span>
                       <span><i class="fas fa-star"></i></span>
                       <span><i class="fas fa-star"></i></span>
                       <span><i class="fas fa-star"></i></span>
                       <span><i class="fas fa-star"></i></span>
                   </div>
                   <div class="price py-2">
                       <span>৳{{ $product->price}}</span>
                   </div>
                   <button type="submit" class="btn btn-warning add_cart add_cart font-size-12">Add to cart</button>
                 
                 </div>
       
           </div>
         

           <br>
           <br>
        @endforeach
        <br>
  <br>
  <br>   
          
          

               </div>
               </div>
            
        
      
</section>

    

 
@include('partials.blog')
@include('partials.footer')
 


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    <!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

<!-- isotop javascript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js" integrity="sha512-Zq2BOxyhvnRFXu0+WE6ojpZLOU2jdnqbrM1hmVdGzyeCa1DgM3X5Q4A/Is9xA1IkbUeDd7755dNNI/PzSf2Pew==" crossorigin="anonymous"></script>

<script src="js/main.js"></script>



</body>
</html>