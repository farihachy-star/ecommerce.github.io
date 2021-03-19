<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="img/Go Fresh Logo.png" rel="icon">
  <title>Admin - Dashboard</title>
  @include('admin.partials.style')
</head>

<body id="page-top">
  <div id="wrapper">
    @include('admin.partials.sidebar')
    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
        <!-- TopBar -->
        @include('admin.partials.nav')

        <!-- Topbar -->

         {{-- partials --}}

        @include('admin.partials.messages')

       <div class='card px-5'>
          <div class="card-header"><h3>Add Product</h3></div>
           <div class=card-body>
               <form action={{route('admin.product.store')}} method='post' enctype="multipart/form-data">
                   @csrf
                 <div class="mb-3">
                   <label for="exampleInputEmail1" class="form-label">Title</label>
                     <input type="text" name="title" class="form-control" id="exampleInputEmail1">
                        
                </div>
                <div class="mb-3">
                 <label for="exampleInputPassword1" class="form-label">Description</label>
                   <textarea name="description" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                 <div class="mb-3">
                   <label for="exampleInputEmail1" class="form-label">Price</label>
                     <input type="number" name="price" class="form-control" id="exampleInputEmail1">
                        
                </div>  

            
                 <div class="mb-3">
                   <label for="exampleInputEmail1" class="form-label">Quantity</label>
                     <input type="number" name="quantity" class="form-control" id="quantity">
                        
                </div>  

                     <div class="mb-3">
                   <label for="product_image" class="form-label">product Image</label>
                     <div class="row">
                         <div class="col-md-4">
                         
                         <input type="file" name="product_image[]" class="form-control" id="exampleInputEmail1">
                         <input type="file" name="product_image[]" class="form-control" id="exampleInputEmail1">
                         <input type="file" name="product_image[]" class="form-control" id="exampleInputEmail1">
                         <input type="file" name="product_image[]" class="form-control" id="exampleInputEmail1">
                         <input type="file" name="product_image[]" class="form-control" id="exampleInputEmail1">
                         </div>
                     
                     </div>
                        
                </div>  
                
                     <button type="submit" class="btn btn-primary">Add Product</button>
                </form>
       
       
       
           </div>
       </div>
 
    </div>
  </div>

  <!-- Scroll to top -->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('vendor/jquery-easing/jquery.easing.min.js')}}"></script>
  <script src="{{asset('js/ruang-admin.min.js')}}"></script>
  <script src="{{asset('vendor/chart.js/Chart.min.js')}}"></script>
  <script src="{{asset('js/demo/chart-area-demo.js')}}"></script>  
</body>

</html>