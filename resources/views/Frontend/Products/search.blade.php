

@extends('partials.link')







  
<!-- Product -->

    <section id="search" style="height: 50vh; margin:200px 0">
        <div class="container">
           <div class="row">
             <div class="col-md-8">
               <h3></h3>
               <section id="specialitem">
                <div class="container">
                  
                  <h4 class="font-rubik font-size-20">Searched Products For - <span class="badge p-2" style="background-color: #0b0e0b; color: #fff">{{$search}}</span></h4>
                
                  <hr>
                  <br>
                  <div class="grid">
                    <div class="row my-5">
                    
                    @foreach($products as $product)
                    
                            <div class="col-md-3 special">
                       <div class="grid-items veg border p-4" >
                           
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
                 
                @endforeach
                <br>
          <br>
          <br>   
                  
                  
        
                       </div>
                       </div>
                    
                
              
        </section>
      



 





